<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;

use Illuminate\Support\Facades\Input;

class ProfilController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(){
    	$id = Auth::user()->id;
    	$user = User::where('id', $id)->first();
    	return view('profil', ['user' => $user]);
    }

    public function upstore(Request $request){

      $id = Auth::user()->id;

      DB::table('users')->where('id',$id)->update(
                [
                  'civility' => $request->civility,
                  'firstName' => $request->firstName,
                  'lastName' => $request->lastName,
                  'email' => $request->email,
                  'adress' => $request->adress,
                  'codePostal' => $request->codePostal,
                ]
        );

            $user = User::where('id', $id)->first();
          	return view('profil', ['user' => $user]);
    }

    public function password(){
      return view('password');
    }

    public function passwordUpdate(Request $request){

      $id = Auth::user()->id;
      $request->validate([
          'password_old' => 'required|min:8',
          'password' => 'required|confirmed|min:8',
      ]);
      $password_old = $request->password_old;
      if(Hash::check($password_old, Auth::user()->password)){
        User::where('id', $id)->update([
            'password' => bcrypt($request->password),
          ]);
        return view('password');
      }else{
        return view('password')->withErrors(['pw_old'=> ['The Message']]);
      }

    }
}
