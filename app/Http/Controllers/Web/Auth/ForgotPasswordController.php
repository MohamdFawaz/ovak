<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordMail;
use App\Mail\NewsletterMail;
use App\Models\User;
use Doctrine\DBAL\Exception;
use http\Env\Response;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function forgotPassword(Request $request)
    {
        try {
            if (User::query()->where('email',$request->email)->exists()) {
                $randomToken = Str::random(4);
                \Mail::to($request->email)->send(new ForgotPasswordMail($randomToken));
                \DB::table('password_resets')->where('email', $request->email)->delete();
                \DB::table('password_resets')->insert(['email' => $request->email,'token' => $randomToken]);
                return response()->json('Please check your email');
            }
        }catch (Exception $e){
            return response()->json(null,JsonResponse::HTTP_BAD_REQUEST);
        }
    }

    public function verifyResetCode(Request $request)
    {
        $userPasswordReset = \DB::table('password_resets')
            ->where('email',$request->email)
            ->where('token',$request->token)
            ->first();
        if ($userPasswordReset){
            \DB::table('password_resets')
                ->where('email',$request->email)
                ->where('token',$request->token)->delete();
            return \response()->json('success');
        }else{
            return \response()->json(__('front.forget_password.invalid_token'), JsonResponse::HTTP_BAD_REQUEST) ;
        }
    }
}
