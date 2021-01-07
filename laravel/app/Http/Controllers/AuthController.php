<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function getLogin()
    {
        return view('/login');
    }

    public function postLogin(Request $request)
    {
        //
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            date_default_timezone_set("Asia/Jakarta");
            session_start();
            $_SESSION['last_login'] = User::select('last_login')->where('id', Auth::id())->first()->last_login;
            User::where('id' , Auth::id())
            ->update(['last_login' => date('Y-m-d H:i:s')]);
            //checkPackageExpiration();
            return redirect()->intended('/dashboard');
        }
        return redirect('/login')->with('error','Username / Password salah!');

    }

    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        //
        //dd($request);
        $this->validate($request, [
            'name'=> 'required|string|min:4',
            'username'=> 'required|string|unique:users',
            'email'=> 'required|email|unique:users',
            'no_hp'=> 'required|numeric',
            'password'=> 'required|min:6|same:confirmPassword'
        ]); 

        User::create([
            'name'=> $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'no_handphone'=> $request->no_hp,
            'password'=> bcrypt($request->password)
        ]);
        
        if($request){
            return redirect('/login')->with('success', 'Register Berhasil, silakan Login ');
         }else{
             return redirect('/login')->with('error', 'Register Gagal');
         } 
    } 

    public function logout()
    {
        Auth::logout();
         
        return redirect('/home');
    }
}
