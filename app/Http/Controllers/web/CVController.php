<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Education;
use App\Models\Skills;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function show($id){
        $userProfile = UserProfile::where('user_id',$id)->with('user')->first();
        $skills = Skills::where('user_id',$id)->with('user')->get();
        $education = Education::where('user_id',$id)->with('user')->get();
        $courses = Courses::where('user_id',$id)->with('user')->get();
        return view('web.cv', [
            'userProfile'   =>  $userProfile,
            'Skills'   =>  $skills,
            'Educations'   =>  $education,
            'Courses'   =>  $courses,
        ]);
    }
}
