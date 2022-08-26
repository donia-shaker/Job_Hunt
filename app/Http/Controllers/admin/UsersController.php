<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Enum\CRUDMessages;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    public function show(){
        $users=User::get();
        $count=User::count();
        return view('admin.users',[
            'users' =>  $users,
            'count' =>  $count
        ]);
    }

    public function active($id)
    {
        $user = User::find($id);
        if ($user->is_active)
            $user->is_active = 0;
        else
            $user->is_active = 1;
        if ($user->save())
            return redirect()->back()->with([
                'success'   => CRUDMessages::MESSAGE_ACTIVE_SUCCESS,
            ]);
        else
        return redirect()->back()->with([
            'error'   => CRUDMessages::MESSAGE_ACTIVE_ERROR,
        ]);
    }
}