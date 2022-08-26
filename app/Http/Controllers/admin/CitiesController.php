<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Enum\CRUDMessages;
use App\Http\Requests\CitiesRequest;
use App\Models\Cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function show()
    {
        $do = isset($_GET['do']) ? $do = $_GET['do'] : 'Manage';
        $city = isset($_GET['Id']) ? $city = Cities::where('id',$_GET['Id'])->get():'all';
        $cities = Cities::orderBy('id', 'DESC')->get();
        return view('admin.cities', [
            'cities' => $cities,
            'do'        => $do,
            'city'   => $city[0]
        ]);
    }

    public function add(CitiesRequest $request)
    {
        // return $request;
        $request->validated();

            Cities::create([
            'name'      => [
                'ar'    => $request->nameAR,
                'en'    => $request->nameEN
            ],
            'is_active' =>  $request->is_active
            ]);

        return redirect()->route('cities')->with([
            'success'   => CRUDMessages::MESSAGE_ADD_SUCCESS,
            'error'     => CRUDMessages::MESSAGE_ADD_ERROR
        ]);
    }

    public function update(CitiesRequest $request, $id){
        // return $request;
        $request->validated();

            Cities::find($id)->update([
            'name'      => [
                'ar'    => $request->nameAR,
                'en'    => $request->nameEN
            ],
            'is_active' =>  $request->is_active
            ]);

        return redirect()->route('cities')->with([
            'success'   => CRUDMessages::MESSAGE_UPDATE_SUCCESS,
        ]);
    }

    public function active($id){
        $cities=Cities::find($id);
        if($cities->is_active )
            $cities->is_active=0;
        else 
            $cities->is_active=1;
        if($cities->save())
        return redirect()->back()->with([
            'success'   => CRUDMessages::MESSAGE_ACTIVE_SUCCESS,
        ]);
    }

    public function delete($id){
        $cities=Cities::find($id);
        if ($cities->delete())
        return redirect()->back()->with([
            'success'   => CRUDMessages::MESSAGE_DELETE_SUCCESS,
        ]);
    }
}
