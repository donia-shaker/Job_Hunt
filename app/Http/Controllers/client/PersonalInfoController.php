<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalInfoController extends Controller
{
    public function show(){
        $userInfo=Auth::user();
        $id=$userInfo->id;
        $personalInfo=UserProfile::where('user_id',$id)->first();
        // return $personalInfo;
        return view('client.dashboard', [
            'userInfo'  =>  $userInfo,
            'personalLnfo'  =>  $personalInfo
        ]);
    }
}
