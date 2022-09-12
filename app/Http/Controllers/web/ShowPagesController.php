<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Models\Companies;
use App\Models\Jobs;
use App\Models\Partiners;
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
        $cities = Cities::where('is_active', 1)->get();
        $companies = Companies::where('is_active', 1)->get();
        return view("web.job",[
            'Jobs'  =>  $jobs,
            'cities'=>  $cities,
            'companies'=>  $companies,
        ]);
    }

    public function showDetailes($id){
        $job = Jobs::where('id',$id)->with(['company','city'])->orderBy('id', 'DESC')->where('end_date', '>', date('Y-m-d'))->where('is_active', 1)->where('status', 0)->first();
        return view("web.details",[
            'job' => $job
        ]);
    }

    public function showPartener(){
        $partiners = Partiners::orderBy('id', 'DESC')->where('is_active', 1)->get();
        return view("web.membership",[
            'partiners' =>  $partiners
        ]);
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
