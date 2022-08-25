<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Enum\CRUDMessages;
use App\Models\Skills;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;


class SkillsLivewire extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name, $skill_id;

    protected function rules()
    {
        return [
            'name' => 'required|string|min:3',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function save()
    {
        $this->validate(); 

        Skills::create([
            'name'      =>  $this->name,
            'user_id'   =>  Auth::user()->id,
        ]);

        session()->flash('success',CRUDMessages::MESSAGE_ADD_SUCCESS);
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function edit(int $skill_id)
    {
        $skill = Skills::find($skill_id);
        if($skill){

            $this->skill_id = $skill->id;
            $this->name = $skill->name;
        }else{
            return redirect()->route('skills');
        }
    }

    public function update()
    {
        $validatedData = $this->validate();

        Skills::find($this->skill_id)->update([
            'name' => $validatedData['name'],
        ]);
        session()->flash('success',CRUDMessages::MESSAGE_UPDATE_SUCCESS);
        $this->resetInput();
        $this->dispatchBrowserEvent('close-update-modal');
    }

    public function delete(int $skill_id)
    {
        $this->skill_id = $skill_id;
    }

    public function destroySkill()
    {
        Skills::find($this->skill_id)->delete();
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
    }

    public function render()
    {
        $user_id =  Auth::user()->id;
        $skills = Skills::where('user_id', $user_id)->orderBy('id', 'DESC')->paginate(3);
        return view('livewire.skills-livewire',[
            'skills'    =>  $skills,
        ]);
    }
}
