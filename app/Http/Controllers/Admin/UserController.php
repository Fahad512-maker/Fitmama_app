<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Package;
use App\Models\UserPackage;
use Mail;
use App\Mail\LoginUserLink;
use App\Models\ProfileQuestion;
use App\Models\ProfileAnswer;
use App\Models\Pkg_description;
use App\Models\UserBodyMeasurement;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use PDF;
use Carbon\Carbon;
class UserController extends Controller
{
    
    public function users_list()
    {
        $users=User::all();
        $package=Package::all();
        $data=['page_title' => 'Users' , 'users' => $users , 'package' => $package ];
        return view('admin.users.userslist' ,$data);
    }

    public function user_profile($id)
    {

       $users = User::find($id);
     

        // $users=DB::table('user_packages')
        //        ->select('profile_questions.question' , 'users.name' , 'users.email' , 'packages.title' , 'profile_answers.answer')
        //        ->leftJoin('packages' , 'user_packages.package_id' , '=' , 'packages.id')
        //        ->leftJoin('users' , 'users.package_id' , '=' , 'user_packages.user_id')
        //        ->leftJoin('profile_questions' , 'profile_questions.package_id' , '=' , 'packages.id')
        //        ->leftJoin('profile_answers' , 'profile_answers.user_id' , '=' , 'users.id')
        //        ->where(['user_id' => $id])
        //        ->distinct()->get();
               // dd($users);
       $measurements=UserBodyMeasurement::where('user_id' , $users->id)->get();
        $data=['page_title' => 'User Profile' , 'users' => $users , 'measurements' => $measurements];
        return view('admin.users.UserProfile',$data);
    }

    public function create()
    {
        $package=Package::OrderBy('id' , 'asc')->get();
        $data=['page_title' => 'Add Users' , 'package' => $package];
        return view('admin.users.create' , $data);
    }

    public function store(Request $request)
    {
        $request->validate([
         
         'name' => 'required',
         'email' => 'required|unique:users,email',
         'amount' => 'required',
         'package_id' => 'required',

        ]);

        $user=User::create([
         
         'name' => $request->name,
         'email' => $request->email,
         'package_id' => $request->package_id,

        ]);

        Mail::send(new LoginUserLink($user));

        $user_package=UserPackage::create([

          'user_id' => $user->id,
          'package_id' => $user->package_id,
          'days' => $user->package->days,
          'end_date' => Carbon::now()->addDays($user->package->days),
 
        ]);

        return redirect(url('/users_list'))->with('success' , 'Users Added Successfully');
    }

    public function getusersbypackage($id)
    {
        $package=Package::find($id);
        $users=User::where('package_id' , $id)->get();
        $data=['page_title' => 'Users list - Fitmama' , 'users' => $users , 'package' => $package];
     return view('admin.users.userlistbypackage' , $data);
    }

    public function edit_users($id, User $user)
    {
        $package=Package::all();
        $user=User::find($id);
        $data=['page_title' => 'edit_profile' , 'user' => $user , 'packages' => $package];
        return view('admin.users.edit' , $data);
    }

    public function update_users($id , Request $request)
    {
       
        $users=User::find($id);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->package_id=$request->package_id;
        $users->phone=$request->phone;
        $users->save();

        $user_package = UserPackage::where('user_id' , $users->id)->update([

         'user_id' => $users->id,
         'package_id' => $request->package_id,
         'days' => $users->package->days,
         'end_date' => Carbon::now()->addDays($users->package->days),

        ]);

        return redirect(url('/users_list'))->with('success' , 'Users Update Successfully');
    }

     public function getresetpassword($email, Request $request)
    {
       $user = DB::table('users')->where('email', $request->email)->first();
        return view('admin.users.passwordupdate', ['user' => $user]);
    }

    public function updatepassword($email, Request $request)
    {
        
        $request->validate([
          'password' => 'required',

        ]);


        $password = $request->password;

        $user = User::where('email', $email)->first();
        // Redirect the user back if the email is invalid
        if (!$user) {

            return redirect()->back()->withErrors(['email' => 'Email not found']);
        }
        //Hash and update the new password
        $user->password = \Hash::make($password);
        $user->save(); //or $user->save();

        // DB::table('password_resets')->where('email', $user->email)
        //     ->delete();

        return redirect('/login');
    }

     public function searchuserbypackage($id)
     {
        $users=User::where('package_id' , $id)->get();

        return view('admin.users.userlistbypackage' , ['users' => $users])->render();
     }

     public function searchuserbydate(Request $request)
     {
        
        $users=User::where('created_at' ,  '<=' , $request->end_date)->where('created_at', '>=' , $request->start_date)->get();
        
        return view('admin.users.userlistbypackage' , ['users' => $users])->render();
        
     }

     public function getuserachievements($id, Request $request)
     {
         
     }

     public function getuserprogress($id)
     {
         // code...
     }

     public function getusermeasurement($id)
     {
         // code...
     }

     public function destroy($id)
     {
         $user=User::find($id);
         $user->delete();
         $user->subscribed_package->delete();
         return redirect(url('/users_list'))->with('success' , 'User Delete Successfully');
     }

    //  public function getpdfdata($id)
    //  {
    //    $users=User::find($id);

    //    $profile_question=ProfileQuestion::where('package_id' , $users->package_id)->get();

    //    foreach ($profile_question as $key =>  $value) {
           
    //        $profile_question[$key]->answers=ProfileAnswer::where('profile_question_id' , $value->id)->where('user_id' , $users->id)->select('answer')->latest()->get();
    //    }

    //   $pdf = PDF::loadView('admin.users.UserProfile', array('users' => $users));
    // return $pdf->download('invoice.pdf');
    //  }

}
