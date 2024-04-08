<?php

namespace App\Http\Controllers\Auth1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Enums\UserRoles;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Mail\ResetPasswordMail;
use App\Models\passwordreset;




class MyAuthController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        //dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //dd(Auth::user()->role===UserRoles);
            if(Auth::user()->role === UserRoles::SU->value){
                return redirect()->intended('/Admin/dashboard');
            }
            elseif(Auth::user()->role === UserRoles::ESTB->value){
                return redirect()->intended('/ESTB/dashboard');
            }elseif(Auth::user()->role === UserRoles::TEACHING->value){
                //session(['user_id' => $user->id]);
                return redirect()->intended('/Teaching/dashboard');
            }elseif(Auth::user()->role === UserRoles::NONTEACHING->value){
                    //session(['user_id' => $user->id]);
                    return redirect()->intended('/Non-Teaching/dashboard');
            }
            elseif(Auth::user()->role === UserRoles::DEANRND->value){
                //dd('Hello from dean RND');
                return redirect()->intended('/Deanrnd/dashboard');
            
            }elseif(Auth::user()->role == UserRoles::EGOV_ADMIN->value && Auth::user()->email=="egov_cv@git.edu"){
                 Session::put('deptid','8');
                    return redirect()->intended('/egov/dashboard');
            }elseif(Auth::user()->role == UserRoles::EGOV_ADMIN->value && Auth::user()->email=="egov_cs@git.edu"){
             Session::put('deptid','5');
                return redirect()->intended('/egov/dashboard');
            }elseif(Auth::user()->role == UserRoles::EGOV_ADMIN->value && Auth::user()->email=="egov_at@git.edu"){
             Session::put('deptid','17');
                return redirect()->intended('/egov/dashboard');
            }elseif(Auth::user()->role == UserRoles::EGOV_ADMIN->value && Auth::user()->email=="egov_ae@git.edu"){
             Session::put('deptid','9');
                return redirect()->intended('/egov/dashboard');
            }elseif(Auth::user()->role == UserRoles::EGOV_ADMIN->value && Auth::user()->email=="egov_ec@git.edu"){
             Session::put('deptid','2');
                return redirect()->intended('/egov/dashboard');
            }elseif(Auth::user()->role == UserRoles::EGOV_ADMIN->value && Auth::user()->email=="egov_ee@git.edu"){
             Session::put('deptid','7');
                return redirect()->intended('/egov/dashboard');
            }elseif(Auth::user()->role == UserRoles::EGOV_ADMIN->value && Auth::user()->email=="egov_is@git.edu"){
             Session::put('deptid','6');
                return redirect()->intended('/egov/dashboard');
            }elseif(Auth::user()->role == UserRoles::EGOV_ADMIN->value && Auth::user()->email=="egov_me@git.edu"){
             Session::put('deptid','1');
                return redirect()->intended('/egov/dashboard');
            }elseif(Auth::user()->role == UserRoles::EGOV_ADMIN->value && Auth::user()->email=="egov_mba@git.edu"){
             Session::put('deptid','24');
                return redirect()->intended('/egov/dashboard');
            }elseif(Auth::user()->role == UserRoles::EGOV_ADMIN->value && Auth::user()->email=="egov_mca@git.edu"){
             Session::put('deptid','3');
                return redirect()->intended('/egov/dashboard');
            }elseif(Auth::user()->role == UserRoles::EGOV_ADMIN->value && Auth::user()->email=="egov_phy@git.edu"){
             Session::put('deptid','13');
                return redirect()->intended('/egov/dashboard');
            }elseif(Auth::user()->role == UserRoles::EGOV_ADMIN->value && Auth::user()->email=="egov_math@git.edu"){
             Session::put('deptid','12');
                return redirect()->intended('/egov/dashboard');
            }elseif(Auth::user()->role == UserRoles::EGOV_ADMIN->value && Auth::user()->email=="egov_chem@git.edu"){
             Session::put('deptid','14');
                return redirect()->intended('/egov/dashboard');
            }
            //department HoD logins.
            elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="hodcivil@git.edu"){
                Session::put('deptid','8');
                   return redirect()->intended('/HOD/dashboard');
           }elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="hodcse@git.edu"){
                Session::put('deptid','5');
               return redirect()->intended('/HOD/dashboard');
           }elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="hodarch@git.edu"){
                Session::put('deptid','17');
               return redirect()->intended('/HOD/dashboard');
           }elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="hodaero@git.edu"){
                Session::put('deptid','9');
               return redirect()->intended('/HOD/dashboard');
           }elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="hodec@git.edu"){
                Session::put('deptid','2');
               return redirect()->intended('/HOD/dashboard');
           }elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="hodee@git.edu"){
                Session::put('deptid','7');
               return redirect()->intended('/HOD/dashboard');
           }elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="hodise@git.edu"){
                Session::put('deptid','6');
               return redirect()->intended('/HOD/dashboard');
           }elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="hodmech@git.edu"){
                Session::put('deptid','1');
               return redirect()->intended('/HOD/dashboard');
           }elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="deanmba@git.edu"){
                Session::put('deptid','24');
               return redirect()->intended('/HOD/dashboard');
           }elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="hodmca@git.edu"){
                Session::put('deptid','3');
               return redirect()->intended('/HOD/dashboard');
           }elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="hodphy@git.edu"){
                Session::put('deptid','13');
               return redirect()->intended('/HOD/dashboard');
           }elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="hodmaths@git.edu"){
                Session::put('deptid','12');
               return redirect()->intended('/HOD/dashboard');
           }elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="hodchem@git.edu"){
                Session::put('deptid','14');
               return redirect()->intended('/HOD/dashboard');
           }
           elseif(Auth::user()->role == UserRoles::HOD->value && Auth::user()->email=="coeoffice@git.edu"){
                Session::put('deptid','20');
            
                return redirect()->intended('/HOD/dashboard');
            }

           //principal office
           elseif(Auth::user()->role === UserRoles::PRINCIPAL_OFFICE->value && Auth::user()->email=="principaloffice@git.edu"){
            
            return redirect()->intended('/Principaloffice/podashboard');
        
            }
            //Exam section
            // elseif(Auth::user()->role == UserRoles::EXAM_SECTION->value && Auth::user()->email=="coeoffice@git.edu"){
            
            //     return redirect()->intended('/Examoffice/dashboard');
            // }
            // elseif(Auth::user()->role == UserRoles::EXAM_SECTION->value && Auth::user()->email=="coe_@git.edu"){
                
            //     return redirect()->intended('/COE-OFFICE/dashboard');
            // }
            // elseif(Auth::user()->role == UserRoles::EXAM_SECTION->value && Auth::user()->email=="os_examsection@git.edu"){
            
            //     return redirect()->intended('/COE-OFFICE/dashboard');
            // }
            // elseif(Auth::user()->role == UserRoles::EXAM_SECTION->value && Auth::user()->email=="nw_examsection@git.edu"){
            
            //     return redirect()->intended('/COE-OFFICE/dashboard');
            // }
            else
            {
                return redirect('login');
                //->intended('dashboard')
                //->withSuccess('Signed in');
            }
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut(Request $request): RedirectResponse {
       // dd('Logging Out');

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

            //dd('Logging out');
        return redirect('login');

    }
     
    //change password
    public function changePassword(Request $request)
    {
        return view('auth.change_password');
    }

    public function updatepassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|string',
            'confirm_password' => 'required|same:new_password',
        ]);
       
         $auth=auth::user();
        $credentials = $request->only('email', 'password');
            //dd(strcmp($request->password, $request->new_password));
        if (!Hash::check($request->password, $auth->password))
            {
                return back()->with('error',"Current Password is Invalid");
            }
            elseif (strcmp($request->password, $request->new_password) == 0)
                {
                    return back()->with("error","New Password cannot be same as your current password.");
                }
                 else
                 {
                     //$user =  User::find($auth->id);
                    $auth->password =Hash::make($request->new_password);
                    $auth->update();
                    if($request)
                    {
                      $status=1;
                    }
                    else
                    {
                        $status=0;
                    }
                    return redirect('login')->with('success', "Password Changed Successfully");

                        //return back()->with('success',"Password Changed Successfully");

                 }  
        
    }

    public function  checkcurrentpassword(Request $request)
    {
        $auth=auth::user();
        //get current password 
        $current_password = $request->input('current_password');

        if (Hash::check($current_password, $auth->password))
            {
                return 1;

            }else{
                return 0;
            }
    }

    //forgot password code
    public function forgotpassword()
    {
        return view('auth.forgot_password');
    }

    public function forgotPasswordupdate(Request $request)
    {
        //dd($request);
        $request->validate([
        'email' => 'required|email|exists:users,email'
        ]);

        $token =Str::random(64);
        
        DB::table('password_reset_tokens')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=> Carbon::now(),
         ]);
       
        //dd($token);
        // Mail::send(new WelcomeMail($title, $body), ['token' => $token], function ($message) use ($request) {
        //     $message->to($request->email)
        //        ->subject("Reset Password");
        // });

        
      
        //$body = 'Thank you for participating!';
     
        $body = "Click the following  reset link to reset your password
         ". route('reset.password', $token) ;
            $body1=@include('auth.reset_password');
      
        Mail::to($request->email)->send(new WelcomeMail($token,$body));

        return redirect()->back()->with('success', 'We have sent an email to reset the password');

    }
   

    public function resetPassword($token)
    {
        
       return view('auth/reset_password',(['token'=>$token]));
    }
    public function resetPasswordupdate(Request $request)
    {
        $token=$request->token;
        $passwordreset=passwordreset::where('token',$token)->first();
       //dd($passwordreset);
        if(!$passwordreset)
         {
          
            return redirect('auth\reset_password')->with('error', "Inavalid");
         }
         
        $user= User::where("email",$passwordreset->email)->update(["password"=>Hash::make($request->new_password)]);
    
         DB::table(table:'password_reset_tokens')->where("email",$passwordreset->email)->delete();
         return redirect('login')->with('success', "Password Reset sucess");
        
    } 

   
    
    

}


