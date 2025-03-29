<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerform(){


        return view('add');
    }


    public function loginform(){

        return view('login');
    }


    public function index(){

        return view('index');
    }


    public function login(Request $request){
        $credentials = $request->only('username','password');

        if(Auth::attempt($credentials)){
            return redirect()->route('index.users');

        }
    }

    public function logout(){
        auth::logout();
        return redirect()->route('login.users');
    }



    public function store(Request $request){




        User::create([

            'email'=> $request->email,
            'username'=> $request->username,
            'password'=> bcrypt($request->password),

        ]);




        Karyawan::create([

            'nama_lengkap' => $request->nama_lengkap,
            'nip' => $request->nip,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
            'gender' => $request->gender,
            'tanggal_lahir' => $request->tanggal_lahir,
            


        ]);


        return redirect()->route('login.users');

    



        }
}
