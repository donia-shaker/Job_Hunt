<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Education extends Component
{
    public $userId, $name, $place, $startDate, $endDate ,$collection;

    public function addEducation(){
        $response = Http::asForm()->post('https://dummyjson.com/products', [
            'name'      =>  $this->name,
            'place'     =>  $this->place,
            'startDate' =>  $this->startDate,
            'endDate'   =>  $this->endDate,
            'userId'    =>  $this->userId
        ])->json();

        $this->collection =$response;
        session()->flash('message', 'تم إضافة عنوان جديد.');


    }

    public function render()
    {
        return view('livewire.education',[
            'data'=>$this->collection
        ]);
    }
}
