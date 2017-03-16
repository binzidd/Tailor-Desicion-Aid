<?php
/**
 * Created by PhpStorm.
 * User: Binay
 * Date: 15/3/17
 * Time: 4:33 PM
 */

namespace capstone\Http\Controllers;
use capstone\Http\Controllers\Controller;
use capstone\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function getintroduction()
    {
        return view('introduction');
    }

    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'username'=> 'required',
            'email' => 'required|email|unique:users',
            'first_name' => 'required|max:120',
            'last_name'=> 'required|max:120',
            'password'=> 'min:6'
        ]);

        $username= $request['username'];
        $email= $request['email'];
        $first_name= $request['first_name'];
        $last_name= $request['last_name'];
        $password= bcrypt($request['password']);

        $user=new User();
        $user->username = $username;
        $user->email =$email;
        $user->first_name=$first_name;
        $user->last_name=$last_name;
        $user->password= $password;

        $user->save();

        Auth::login($user);

        return redirect()->route('introduction');


    }
    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'username'=> 'required',
            'password'=> 'required'
        ]);
        if(Auth::attempt(['username' =>$request['username'],'password'=>$request['password']])) {
            return redirect() -> route('introduction');
        }
        return redirect()->back();
    }


}