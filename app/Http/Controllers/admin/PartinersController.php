<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Enum\CRUDMessages;
use App\Http\Requests\PartinersRequest;
use App\Models\Partiners;
use Illuminate\Http\Request;

class PartinersController extends Controller
{
    public function show()
    {
        $do = isset($_GET['do']) ? $do = $_GET['do'] : 'Manage';
        $partiner = isset($_GET['Id']) ? $partiner = Partiners::where('id',$_GET['Id'])->get():'all';
        $partiners = Partiners::orderBy('id', 'DESC')->get();
        // dd($partiner);
        return view('admin.partiners', [
            'partiners' => $partiners,
            'do'        => $do,
            'partiner'   => $partiner[0]
        ]);
    }

    public function add(PartinersRequest $request)
    {
        // return $request;
        $request->validated();

        if($request->hasFile('image'))
            $image=$this->uploadFile($request->file('image'));

        Partiners::create([
            'name'      => [
                'ar'    => $request->nameAR,
                'en'    => $request->nameEN
            ],
            'image'     =>  $image,
            'address'      => [
                'ar'    => $request->addressAR,
                'en'    => $request->addressEN
            ],
            'information'=> [
                'ar'    => $request->informationAR,
                'en'    => $request->informationEN
            ],
            'phone'     =>  $request->phone,
            'is_active' =>  $request->is_active
            ]);

        return redirect()->route('partiners')->with([
            'success'   => CRUDMessages::MESSAGE_ADD_SUCCESS,
        ]);
    }

    public function update(PartinersRequest $request, $id){
        // return $request;
        $request->validated();

        if($request->hasFile('image'))
            $image=$this->uploadFile($request->file('image'));

        Partiners::find($id)->update([
            'name'      => [
                'ar'    => $request->nameAR,
                'en'    => $request->nameEN
            ],
            'image'     =>  $image,
            'address'      => [
                'ar'    => $request->addressAR,
                'en'    => $request->addressEN
            ],
            'information'=> [
                'ar'    => $request->informationAR,
                'en'    => $request->informationEN
            ],
            'phone'     =>  $request->phone,
            'is_active' =>  $request->is_active
            ]);

        return redirect()->route('partiners')->with([
            'success'   => CRUDMessages::MESSAGE_UPDATE_SUCCESS,
        ]);
    }

    public function active($id){
        $partiners=Partiners::find($id);
        if($partiners->is_active )
            $partiners->is_active=0;
        else 
            $partiners->is_active=1;
        if($partiners->save())
        return redirect()->back()->with([
            'success'   => CRUDMessages::MESSAGE_ACTIVE_SUCCESS,
        ]);
    }

    public function delete($id){
        $partiners=Partiners::find($id);
        if ($partiners->delete())
        return redirect()->back()->with([
            'success'   => CRUDMessages::MESSAGE_DELETE_SUCCESS,
        ]);
    }
}
