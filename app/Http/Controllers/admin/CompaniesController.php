<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Enum\CRUDMessages;
use App\Http\Requests\CompaniesRequest;
use App\Models\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompaniesController extends Controller
{
    public function show()
    {
        $do = isset($_GET['do']) ? $do = $_GET['do'] : 'Manage';
        $company = isset($_GET['Id']) ? $company = Companies::where('id',$_GET['Id'])->get():'all';
        $companies = Companies::orderBy('id', 'DESC')->get();
        return view('admin.companies', [
            'Companies' => $companies,
            'do'        => $do,
            'company'   => $company[0]
        ]);
    }

    public function add(CompaniesRequest $request)
    {
        // return $request;
        $request->validated();

        if($request->hasFile('image'))
            $image=$this->uploadFile($request->file('image'));

        Companies::create([
            'name'      => [
                'ar'    => $request->nameAR,
                'en'    => $request->nameEN
            ],
            'image'     =>  $image,
            'address'      => [
                'ar'    => $request->addressAR,
                'en'    => $request->addressEN
            ],
            'phone'     =>  $request->phone,
            'is_active' =>  $request->is_active
            ]);

        return redirect()->route('companies')->with([
            'success'   => CRUDMessages::MESSAGE_ADD_SUCCESS,
        ]);
    }

    public function update(CompaniesRequest $request, $id){
        // return $request;
        $request->validated();

        if($request->hasFile('image'))
            $image=$this->uploadFile($request->file('image'));

        Companies::find($id)->update([
            'name'      => [
                'ar'    => $request->nameAR,
                'en'    => $request->nameEN
            ],
            'image'     =>  $image,
            'address'      => [
                'ar'    => $request->addressAR,
                'en'    => $request->addressEN
            ],
            'phone'     =>  $request->phone,
            'is_active' =>  $request->is_active
            ]);

        return redirect()->route('companies')->with([
            'success'   => CRUDMessages::MESSAGE_UPDATE_SUCCESS,
        ]);
    }

    public function active($id){
        $companies=Companies::find($id);
        if($companies->is_active )
            $companies->is_active=0;
        else 
            $companies->is_active=1;
        if($companies->save())
        return redirect()->back()->with([
            'success'   => CRUDMessages::MESSAGE_ACTIVE_SUCCESS,
        ]);
    }

    public function delete($id){
        $companies=Companies::find($id);
        if ($companies->delete())
        return redirect()->back()->with([
            'success'   => CRUDMessages::MESSAGE_DELETE_SUCCESS,
        ]);
    }
}
