<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Enum\CRUDMessages;
use App\Http\Requests\PersonalInformationRequest;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalInfoController extends Controller
{
    public function show()
    {
        $do = isset($_GET['do']) ? $do = $_GET['do'] : 'Manage';
        $userInfo = Auth::user();
        $id = $userInfo->id;
        $personalInfo = UserProfile::where('user_id', $id)->first();
        return view('client.dashboard', [
            'userInfo'      =>  $userInfo,
            'personalInfo'  =>  $personalInfo,
            'do'            =>  $do,
        ]);
    }

    public function store(PersonalInformationRequest $request)
    {
        $user_id = Auth::user()->id;
        $request->validated();
        
        $name = User::find($user_id)->update([
            'name'   =>  $request->name
        ]);

        if ($request->hasFile('image'))
            $image = $this->uploadFile($request->file('image'));
        else
            $image = $this->defaultImage('default_image.png');

        $store = UserProfile::create([
            'address'   =>  $request->address,
            'job'   =>  $request->job,
            'phone'     =>  $request->phone,
            'avatar'    =>  $image,
            'user_id'   =>  $user_id
        ]);

        if ($name && $store) {
            return redirect()->route('dashboard')->with([
                'success'   =>  CRUDMessages::MESSAGE_ADD_SUCCESS,
            ]);
        }
        else{
            return redirect()->back()->with([
                'error'   =>  CRUDMessages::MESSAGE_ADD_ERROR,
            ]);
        }
    }

    public function update(PersonalInformationRequest $request)
    {
        $user_id = Auth::user()->id;
        $request->validated();

        $name = User::find($user_id)->update([
            'name'   =>  $request->name
        ]);

        if ($request->hasFile('image'))
            $image = $this->uploadFile($request->file('image'));
        else
            $image = $this->defaultImage('default_image.png');

        $info = UserProfile::where('user_id', $user_id)->update([
            'address'   =>  $request->address,
            'job'   =>  $request->job,
            'phone'   =>  $request->phone,
            'avatar'   =>  $image,
            'user_id'   =>  $user_id
        ]);

        if ($name && $info) {
            return redirect()->route('dashboard')->with([
                'success'   =>  CRUDMessages::MESSAGE_UPDATE_SUCCESS,
            ]);
        }
        else{
            return redirect()->back()->with([
                'error'   =>  CRUDMessages::MESSAGE_UPDATE_ERROR,
            ]);
        }
    }
}
