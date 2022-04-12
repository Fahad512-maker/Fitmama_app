<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * @group Authentication
 *
 *
 */

class AuthController extends Controller
{
    /**
     * Register.
     *
     * @return \Illuminate\Http\Response
     */

    public function register(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|string',
            'password' => 'required'
        ]);
         
         $validate_email=User::where('email', $data['email'])->first();
         
         if(!empty($validate_email)){
             
             return response()->json([
                   
              'status' => 400,
               'message' => 'Email is already registered',
                   
              ]);
                  

         }
         
         else
         
         {

                  
            $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'accepted_terms_and_conditions' => $request->accepted_terms_and_conditions,
            'subscribe_newsletter' => $request->subscribe_newsletter,
        ]);
        
         
              $token = $user->createToken($user->email)->plainTextToken;

        $response = [
            'status' => true,
            'message' => 'Registered successfully!',
            'token' => $token,
            'user' => $user,
        ];

        return response()->json($response);
        
      
           }

    
       
    }

    /**
     * Login.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:191',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {

            return response(['status' => false, 'message' => 'invalid email or password'], 401);
        } else {

            $token = $user->createToken($user->email)->plainTextToken;

            $response = [
                'status' => true,
                'message' => 'Login successful!',
                'user' => $user,
                'token' => $token,
            ];
            return response()->json($response);
        }
    }

    /**
     * Logout.
     *
     * @return \Illuminate\Http\Response
     */

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        $response = [
            'status' => true,
            'message' => 'Logout successfully',
        ];
        return response($response, 201);
    }
}
