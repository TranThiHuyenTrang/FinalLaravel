<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\login;
use App\Http\Requests\loginForm;
use App\customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
class loginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getLogin(){
        return view("loginForm");
    }
    public function login(Request $Request){
        // $type_pro=customer::all();
        $password=$Request->input('Password');
        $username=$Request->input('Username');


        if(Auth::attempt(['name' => $username, 'password' => $password])){
            Session::put('UserName', $username);
            return redirect()->route('food.show',['name'=>$username]);

        }else{
            return redirect()->route('login.show',['errors'=>'Login fail']);
         }
    }
    public function getRegist(){
        return view("regist");
    }
    public function logout(){
        Auth::logout();
        return redirect()->back('trangchu');
    }
    public function regist(loginForm $Request){
        $password=$Request->input('password');
        $username=$Request->input('name');
        $email=$Request->input('email');
        $phone=$Request->input('phone');
        $adress=$Request->input('adress');
        $gender=$Request->input('id');

        DB::table('customers')->insert(
            [
                'name'=> $username,
                'gender'=>$gender,
                'email'=> $email,
                'adress'=> $adress,
                'phone'=> $phone,

                'password' => Hash::make($password)
            ]);

        return redirect()->route('login.show')->with(['flash_level' => 'success','flash_message' =>'Đăng kí thành công']);
    }
}
