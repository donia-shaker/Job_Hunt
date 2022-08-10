<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    function showloginPage()
     { 
          return view('front.login');
    }

        function showRegisterPage()
     { 
          return view('front.sign-up');
    }

    // public function showloginPage(){
    //     if(Auth::check())
    //     return redirect()->route($this->checkRole());
    //     else 
    //     return view('front.login');
    // }



    public function checkRole(){
        if(Auth::user()->hasRole('admin'))
        return 'dashboard';
            else 
            return 'home';
        
    }

        public function login(Request $request){
                //    print_r( $request->input());

            Validator::validate($request->all(),[
            'email'=>['required','email'],
            'password'=>['required']


            ],[
            'email.required'=>'this field is required',
            'email.email'=>'incorrect email format',
            'password.required'=>'password is required',
         ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'is_active'=>1])){


            if(Auth::user()->hasRole('admin'))
               return redirect()->route('all_Jobs');
               
            else 
            return redirect()->route('dashboard');
        
        }
        else {
            return redirect()->route('login')->with(['message'=>'incorerct username or password or your account is not active ']);
        }

            

    }

    public function register(Request $request){
    //    print_r( $request->input());


        Validator::validate($request->all(),[
            'name'=>['required','min:3'],
            'email'=>['required','email','unique:users,email'],
            'password'=>['required','min:5'],
            'confirm_pass'=>['same:password']


        ],[
            'name.required'=>'this field is required',
            'name.min'=>'can not be less than 3 letters', 
            'email.unique'=>'there is an email in the table',
            'email.required'=>'this field is required',
            'email.email'=>'incorrect email format',
            'password.required'=>'password is required',
            'password.min'=>'password should not be less than 3',
            'confirm_pass.same'=>'password dont match',


        ]);
        $u=new User();
        $u->name=$request->name;
        $u->password=Hash::make($request->password);
        $u->email=$request->email;
        if($u->save()){
        $u->attachRole('client');
        return redirect()->route('dashboard')
        ->with(['success'=>'user created successful']);
    }
        return back()->with(['error'=>'can not create user']);


    }

        public function allUser(){


    }

    public function logout(){

        Auth::logout();
        return redirect()->route('login');

    }
}
