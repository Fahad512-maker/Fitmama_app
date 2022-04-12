<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class AppUserController extends Controller
{
    public function user_goals()
    {

         $user_goals=User::where('package_id' , auth('sanctum')->user()->package_id)->where('id' , auth('sanctum')->user()->id)->select('steps_goal' , 'water_intake_goal' , 'caloric_burn_goal' , 'caloric_burn_limit')->first();
         
         if($user_goals != null){
             
             return response()->json([
                 
                 'status' => 200,
                 'user_goals' => $user_goals,
                 
                 ]);
         }
         
         else
         
         {
             return response()->json([
                 
               'status' => 404,
               'message' => ' User Goals Not Found',
                 
            ]);
         }

    }
    
    public function save_fcm_token(Request $request){

         
        
        $update_token = auth()->user()->update(['fcm_token'=>$request->fcm_token]);
        if($update_token){

            return response()->json([

                'status' => 200,
                'message' => 'FCM Token Added Successfully',

            ]); 
        
        }
        else{
            return response()->json([

                'status' => 404,
                'message' => 'FCM Token Failed to Add',

            ]); 
        }
        
        
    }
    
     public function sendNotification(Request $request)

    {

        //$firebaseToken = User::whereNotNull('fcm_token')->pluck('fcm_token')->all();

        $firebaseToken = User::where('fcm_token','<>', '')->pluck('fcm_token')->all(); 
       print_r($firebaseToken);
      
        $SERVER_API_KEY = 'AAAAkgqGvR4:APA91bHhsDZwy9YGG_Lw-Vpdq8pA280z0vfsQXKvhOgqAwDUnhkkmkNNHpFSMahgawtT-Rb2cb_zSgQknh6tgKFuRaSArFz_JYkizxkFy5k4d2vmyC7GvjLpwdSseQ6f6cMveS-YVet0';

  

        $data = [

            "registration_ids" => $firebaseToken,

            "notification" => [

                "title" => $request->title,

                "body" => $request->body,  

            ]

        ];

        $dataString = json_encode($data);

        $headers = [

            'Authorization: key=' . $SERVER_API_KEY,

            'Content-Type: application/json',

        ];


        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

               

        $response = curl_exec($ch);

  

        //dd($response);

    }
        
}
