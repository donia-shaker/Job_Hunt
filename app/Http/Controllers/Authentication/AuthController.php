<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Enum\CRUDMessages;
use App\Http\Requests\loginRequest;
use App\Http\Requests\UserRequest;
use App\Mail\ActiveUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class AuthController extends Controller
{
    public function show()
    {
        $route = Route::current()->getName();

        if ($route == 'register') {
            return view('web.register');
        } elseif ($route == 'login') {
            if (Auth::check())
                return redirect()->route($this->checkRole());
            else
                return view('web.login');
        }
    }

    public function store(UserRequest $request)
    {
        // return $request;
        $request->validated();
        $token = Str::uuid();

        $user = new User();
        $user->name = $request->name;
        $user->email  = $request->email;
        $user->password  = Hash::make($request->password);
        $user->remember_token  = $token;
        if ($user->save()) {
            $user->attachRole('client');
            $email_data = array(
                'name' => $request->name,'email' => $request->email, 'password' => $request->password,
                'activation_url' => URL::to('/') . "/active_user/" . $token."/". $request->password
            );
            try {

                Mail::to($request->email)->send(new ActiveUser($email_data));
                return view('web.resend_email', [
                    'email_data' => $email_data,
                ]);

            } catch (\Exception ) {

                return back()->with(['error'=> CRUDMessages::MESSAGE_REGISTER_ERROR]);
            }
        }
    }

    public function login(loginRequest $request)
    {
        // return $request;
        $request->validated();

        $user = User::where('email', '=', $request->email)->first();
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->route('login')->with(['password'=>false, 'error' => 'اوبس! كلمة السر غير صحيحة']);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password , 'is_active' =>1])) {
            if (Auth::user()->hasRole('super_admin'))
                return redirect()->route('show_users');
            else
                return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with([
                'error' => '  عذرا! يمكنك  تفعيل حسابك اولا',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function checkRole()
    {
        if (Auth::user()->hasRole('super_admin'))
            return 'show_users';
        else
            return 'dashboard';
    }

}
