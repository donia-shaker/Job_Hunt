<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Enum\CRUDMessages;
use App\Models\Courses;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CoursesLivewire extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name, $place, $start, $end, $course_id;

    protected function rules()
    {
        return [
        'name'      => 'required|string|min:3|max:100',
        'place'     => 'string|min:3',
        'start'     => 'required|date|',
        'end'       => 'required|date|before:now',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function save()
    {
        $this->validate(); 

        Courses::create([
            'name'      =>  $this->name,
            'place'     =>  $this->place,
            'start'     =>  $this->start,
            'end'       =>  $this->end,
            'user_id'   =>  Auth::user()->id,
        ]);

        session()->flash('success',CRUDMessages::MESSAGE_ADD_SUCCESS);
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function edit(int $course_id)
    {
        $course = Courses::find($course_id);
        if($course){
            $this->course_id = $course->id;
            $this->name = $course->name;
            $this->place = $course->place;
            $this->start = $course->start;
            $this->end = $course->end;
        }else{
            return redirect()->route('courses');
        }
    }

    public function update()
    {
        $validatedData = $this->validate();

        Courses::find($this->course_id)->update([
            'name'  => $validatedData['name'],
            'place' => $validatedData['place'],
            'start' => $validatedData['start'],
            'end'   => $validatedData['end'],
        ]);
        session()->flash('success',CRUDMessages::MESSAGE_UPDATE_SUCCESS);
        $this->resetInput();
        $this->dispatchBrowserEvent('close-update-modal');
    }

    public function delete(int $course_id)
    {
        $this->course_id = $course_id;
    }

    public function destroyCourse()
    {
        Courses::find($this->course_id)->delete();
        session()->flash('success',CRUDMessages::MESSAGE_DELETE_SUCCESS);
        $this->dispatchBrowserEvent('close-delete-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->place = '';
        $this->start = '';
        $this->end = '';
    }

    public function render()
    {
        $user_id =  Auth::user()->id;
        $courses = Courses::where('user_id', $user_id)->orderBy('id', 'DESC')->paginate(3);
        return view('livewire.courses-livewire',[
            'courses'    =>  $courses,
        ]);    }
}
