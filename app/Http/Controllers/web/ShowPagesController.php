<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowPagesController extends Controller
{
    public function showHome(){
        return view("web.index");
    }

    public function showJobs(){
        return view("web.job");
    }

    public function showDetailes(){
        return view("web.details");
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
