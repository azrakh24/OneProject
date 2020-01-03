<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){
        $user = User::all();
        return view('users',['user' => $user]);
    }

    public function tambah(){
        return view('users_tambah');
    }
    public function store(Request $request){
$this->validate($request,[
    'nm_user'=>'required',
    'username'=>'required'
]);
User::create([
    'nm_user' =>$request->nm_user,
    'username' =>$request->username,
    'no_hp_user' =>$request->no_hp_user,
    'password' =>$request->password,
    'on_off' =>$request->on_off,

]);
 
// $users = new User;
// $users->nm_user = $request->nm_user;
//    $users->username= $request->username;
//    $users->no_hp_user = $request->no_hp_user;
//    $users->password = $request->password;
//    $users->on_off = $request->on_off;
//    $users->save();



return redirect('/users');
    }
}
