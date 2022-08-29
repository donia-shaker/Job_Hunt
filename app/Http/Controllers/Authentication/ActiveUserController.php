<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActiveUserController extends Controller
{
    public function activeUser($token, $password)
    {
        $user = User::where('remember_token', $token)->first();
        User::where('remember_token', $user->remember_token)->update(['is_active' => 1]);
        if (Auth::attempt(['email' => $user->email, 'password' => $password])) {
            if (Auth::user()->hasRole('super_admin'))
                return redirect()->route('show_users');
            else
                return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')
                ->with(['erorr' => 'اسم المستخدم او كلمة المرور غير صحيحة ']);
        }
    
    }
}
