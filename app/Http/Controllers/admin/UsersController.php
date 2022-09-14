<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Enum\CRUDMessages;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function show(){
        $users=User::get();
        $userProfile=UserProfile::get();
        $count=User::count();
        return view('admin.users',[
            'users'         =>  $users,
            'userProfile'   =>  $userProfile,
            'count'         =>  $count
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

    public function delete($id){
        $user=User::find($id);
        if ($user->delete())
        return redirect()->back()->with([
            'success'   => CRUDMessages::MESSAGE_DELETE_SUCCESS,
        ]);
    }
}