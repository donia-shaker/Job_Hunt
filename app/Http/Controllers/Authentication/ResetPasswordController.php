<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Enum\CRUDMessages;
use App\Http\Requests\NewPasswordRequest;
use App\Mail\ResetPassword as MailResetPassword;
use App\Models\ResetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;

class ResetPasswordController extends Controller
{
    public function show()
    {
        return view('web.resend_password');
    }

    public function sendEmail(Request $request)
    {
        Validator::validate($request->all(), [
            'email' => ['required', 'email'],
        ]);

        $e = new ResetPassword();
        $e->email = $request->email;

        $token = Str::uuid();
        $e->token = $token;

        if ($e->save()) {
            $email_data = array(
                'email' => $request->email,
                'activation_url' => URL::to('/') . "/verify_password/" . $token
            );

            // print_r ($email_data);
            try {

                Mail::to($request->email)->send(new MailResetPassword($email_data));
                return  redirect()->back()->with(['success' => ' يرجى مراجعة الايميل لتستطيع تغيير كلمة المرور ']);
            } catch (\Exception) {

                return back()->with(['error' => 'تأكد من كتابة الايميل بالشكل الصحيح ']);
            }
        }
    }

    public function formPassword($token)
    {
        $resetPass = ResetPassword::select()->where('token', $token)->first();
        $userInfo = User::select()->where('email', $resetPass->email)->first();
        return view('web.new_password', [
            'userInfo' => $userInfo
        ]);
    }

    public function newPassword(NewPasswordRequest $request)
    {
        // return $request;
        $request->validated();

        $id = $request->id;
        $password = Hash::make($request->password);
        $user = User::where('id', $id)->update(['password' => $password]);
        if ($user)
            return redirect('login')
                ->with(['success' => CRUDMessages::MESSAGE_UPDATE_SUCCESS]);
        return redirect('login')->with(['error' => CRUDMessages::MESSAGE_UPDATE_ERROR]);
    }

}
