<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\UsersJobs;
use Illuminate\Http\Request;

class UsersJobsController extends Controller
{
    public function showAllUser($id){
        $count = UsersJobs::with(['user'])->where('job_id',$id)->count();
        $information = UsersJobs::with(['user'])->where('job_id',$id)->get();
        $job=Jobs::where('id',$id)->get('name')->first();
        // return $information;
        return view('admin.clients', [
            'information' => $information,
            'job'         => $job,
            'count'       => $count,
        ]);
    }

    public function showUserCV($id){

    }
}
