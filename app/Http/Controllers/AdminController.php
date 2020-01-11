<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\RevalidateBackHistory;

class AdminController extends Controller
{
    public function index()
    {

        return view('access.login');
    }


     public function checklogin(Request $request)
    {
        
        $email = $request->email;
        $password = $request->password;
      

        $data = DB::table('users')->where('email',$email)->first();
      
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id',$data->id);
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('Transisi/Companies');
            }
            else{
                return redirect('Transisi/Admin')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('Transisi/Admin')->with('alert','Password atau Email, Salah!');
        }
        
        /*
        

     $credentials = [ 'email' => $request->email , 'password' => $request->password ];
  
     if(Auth::attempt($credentials)){ // login attempt
    //login successful, redirect the user to your preferred url/route...
    
    return redirect ('Home/Admin/Dashboard');
    } else {
    return redirect ('Home/Admin')->with('alert','Invalid Email or password');
    }
    
  */
 }

 public function logout(){
        Session::flush();
        return redirect('Transisi/Admin')->with('alert','Kamu sudah logout');
    }

}
