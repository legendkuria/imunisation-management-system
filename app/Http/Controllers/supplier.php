<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;
use App\Student;
use Illuminate\Support\Facades\Crypt;
use File;
use Response;
use Illuminate\Support\Facades\DB;

class supplier extends Controller
{
    function registerUser(Request $req){
        $validateData = $req->validate([
        'name' => 'required|regex:/^[a-z A-Z]+$/u',
        'email' => 'required|email',
        'password' => 'required|min:6|max:12',
        'confirm_password' => 'required|same:password'
        ]);
        $result =DB::table('supplier')
            ->where('email',$req->input('email'))
            ->get();
        $res = json_decode($result,true);
        print_r($res);
        if(sizeof($res)==0){
            $data = $req->input();
            $user = new supplier;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password=$data['password'];
            $user->save();
            $req->session()->flash('register_status','User has been registered successfully');
            return redirect()->route('report.create');
        }
        else{
            $req->session()->flash('register_status','This Email already exists.');
            return redirect('/supplier');
        }
        }
    function loginSupplier(Request $req){
        $validatedData = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $result = DB::table('supplier')
            ->where('email',$req->input('email'))
            ->get();
        $res = json_decode($result,true);
        print_r($res);
        if(sizeof($res)==0){
            $req->session()->flash('error','Email does not exist. Please Confirm Login Credentials');
            echo "Email Id Does not Exist.";
            return redirect('/supplier');
        }
        else{
            echo "Hello";


        if($req->input('password')){
            echo "You are logged in Successfully";
            $req->session()->put('supplier',$result[0]->name);
            return redirect()->route('allocate.create');
        }
        else{
            $req->session()->flash('error','Password Incorrect!!!');
            echo "Email Id Does not Exist.";
            return redirect('supplier.login');
        }
        }
    }

}
