<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AdminController extends Controller
{
    public function index(){

        return view('admin.login');

    }
    public function dashboard(){

        return view('admin.dashboard');
    }

    public function form(){

        return view('admin.form');

    }
    public function table(){

        return view('admin.table');

    }

    public function authenticate(Request $request){

        $request->validate([
        'email'=>['required','email'],
        'password'=>'required',

        ]);
        // dd($request->all());

        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){

            if(Auth::guard('admin')->user()->role !='admin'){
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login')->with('error','Unatherise user. Access denied');
            }
            return redirect()->route('admin.dashboard');
        }else{

             return redirect()->route('admin.login')->with('error','Something went wrong');
        }
    }

    public function logout(){
Auth::guard('admin')->logout();
return redirect()->route('admin.login')->with('success','Logged out successfully');

    }
    public function register(){
        $user = new User();
        $user->name='ram';
        $user->role='student';  
        $user->email='ram@gmail.com';
        $user->password = hash::make('ram');
        $user->save();
        return redirect()->route('admin.login')->with('success','User created successfully');
    }




}
