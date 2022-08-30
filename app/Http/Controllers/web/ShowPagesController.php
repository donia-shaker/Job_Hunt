<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use Illuminate\Http\Request;

class ShowPagesController extends Controller
{
    public function showHome(){
        $jobs = Jobs::with(['company','city'])->orderBy('id', 'DESC')->where('end_date', '>', date('Y-m-d'))->where('is_active', 1)->where('status', 0)->take(6)->get();
        return view("web.index",[
        'jobs'   =>   $jobs
        ]);
    }

    public function showJobs(){
        $jobs = Jobs::with(['company','city'])->orderBy('id', 'DESC')->where('end_date', '>', date('Y-m-d'))->where('is_active', 1)->where('status', 0)->get();
        return view("web.job",[
            'Jobs'  =>  $jobs
        ]);
    }

    public function showDetailes($id){
        $job = Jobs::where('id',$id)->with(['company','city'])->orderBy('id', 'DESC')->where('end_date', '>', date('Y-m-d'))->where('is_active', 1)->where('status', 0)->first();
        return view("web.details",[
            'job' => $job
        ]);
    }

    public function showPartener(){
        return view("web.membership");
    }

    public function showContactUs(){
        return view("web.contact-us");
    }

    public function showAboutUs(){
        return view("web.about-us");
    }
    public function showServices(){
        return view("web.services");
    }
}
