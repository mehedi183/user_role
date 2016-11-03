<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use App\User;

use Image;

class UserController extends Controller
{
    public function getWelcome(){
        return view('welcome');
    }
	
    public function postSignUp(Request $request)
    {
        
    	$this->validate($request, [
    		'email' => 'required|email|unique:users',
    		'name' => 'required|max:120',
    		'password' => 'required|min:4'
    		]);
    	$name = $request['name'];
    	$email = $request['email'];
    	$password = bcrypt($request['password']);

    	$user = new User();
    	$user->name = $name;
    	$user->email = $email;
    	$user->password = $password;
    	$user->save();
    	Auth::login($user);


    	return redirect()->route('dashboard');
    }


    public function postSignIn(Request $request)
    {
        
    	$this->validate($request, [
    		'email' => 'required',
    		'password' => 'required|'
    		]);
    	if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
    	{
            $user = Auth::user();
    		return redirect()->route('dashboard')->with(['user' => $user]);
    	}
    	else
    		return redirect()->back();
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function getDashboard(){
        $users = User::all();
        

        return view('dashboard');
    }
    public function getHome(){
        return view('home');
    }

    public function getAuthor(){
        return view('author');
    }
    public function getAdmin(){
        $users = User::all();
        return view('admin', ['users' => $users]);
    }
    public function newArticle(){
        return view('article');
    }

    
}
