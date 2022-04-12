<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetMail;

class NewPasswordController extends Controller
{
    public function ForgetPassword(Request $request)
    {

        $user = DB::table('users')->where('email', '=', $request->email)->first();

        if (!empty($user)) {

            DB::table('password_resets')->insert([

                'email' => $request->email,
                'otp' =>  rand(1000,9999),
                'token' => Str::random(60),
                'created_at' => Carbon::now()

            ]);

            $tokenData = DB::table('password_resets')->where('email', $request->email)->first();

            if ($this->sendResetEmail($request->email, $tokenData->token)) {

                return response()->json(['status' => 200, 'msg' => 'A reset code has been sent to your email address.']);
            } else {

                return response()->json(['status' => 500, 'msg' => 'Connection error']);
            }
        } else {

            return response()->json(['status' => 400, 'msg' => 'This Email is not registered']);
        }
         
    }


    private function sendResetEmail($email, $token)
    {

        $user = DB::table('users')->where('email', $email)->select('name', 'email')->first();
        //Generate, the password reset link. The token generated is embedded in the link
         $get_otp =DB::table('password_resets')->where('email' , $email)->select('otp')->first();

        try {
            Mail::send(new PasswordResetMail($get_otp, $user));
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function RequiredOtpCode($email ,Request $request)
    {
        $request->validate([
          
          'otp' => 'required',

        ]);
        $get_otp=DB::table('password_resets')->where('email' , $request->email)->select('otp')->first();
         
        $pass_otp= $request->otp;

        if($get_otp->otp == $pass_otp){

            return response()->json([

             'status' => 200,
             'message' => 'Password Reset code is Valid',

            ]);
        }

        else

          {
            
            return response()->json([
            
            'status' => 404,
            'message' => 'Password Reset code Not Found',


            ]);

          }  
        
        
    }

    public function UpdatePassword($email, Request $request)
    {
       $request->validate([
         
         'password' => 'required'

       ]);


        $user = User::where('email', $email)->first();
        // Redirect the user back if the email is invalid
        if (!$user) {

            return response()->json([
            
             'status' => 404,
             'message' => 'Email Not Found'

            ]);
        }

        $password=$request->password;
        //Hash and update the new password
        $user->password = \Hash::make($password);
        $user->save(); //or $user->save();

        DB::table('password_resets')->where('email', $user->email)
            ->delete();

         return response()->json([
          
          'status' => 200,
          'message' => 'Password Updated',
          
         ]);   

    }
}
