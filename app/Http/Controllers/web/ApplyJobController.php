<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\UsersJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyJobController extends Controller
{
    public function applyJob($id){
        $apply = UsersJobs::create([
            'user_id'   => Auth::user()->id,
            'job_id'    => $id
        ]);

        if($apply)
        return redirect()->back()->with([
            'success'   => 'You Are Applying For Job Successflly'
        ]);

        return redirect()->back()->with([
            'error'   => 'Error: You Can\'t Apply For Job Retry Later'
        ]);
    }
}
