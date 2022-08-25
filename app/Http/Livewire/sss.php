<?php

namespace App\Http\Livewire;

use App\Models\Skills;
use Livewire\Component;


class bcsub extends Component
{
    public $user_id, $name;

    protected function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'user_id' => ['required'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveSKill()
    {
        $validatedData = $this->validate();

        Skills::create($validatedData);
        session()->flash('success','Skill Added Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function resetInput()
    {
        $this->user_id = '';
        $this->name = '';
    }

    public function render()
    {
        return view('livewire.skillslivewire');
    }
}
