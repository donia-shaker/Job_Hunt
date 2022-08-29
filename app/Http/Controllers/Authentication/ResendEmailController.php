<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Mail\ActiveUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ResendEmailController extends Controller
{
    public function resendEmail(Request $request){
        $email_data = array(
            'name' => $request->name, 'email' => $request->email,
            'activation_url' => $request->activation_url
        );

        try {

                Mail::to($request->email)->send(new ActiveUser($email_data));
                return view('web.resend_email', [
                    'email_data' => $email_data,
                ]);

            } catch (\Exception ) {

                return back()->with(['error'=>'تأكد من كتابة البيانات بالشكل الصحيح ']);
            }
    }
}
