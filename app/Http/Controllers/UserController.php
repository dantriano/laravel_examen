<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{    
    /**
     *  Method to store new user in the database
     *  Must validate taht the user insert all the required inputs
     */
    public function register(RegisterRequest $request)
    {
        
        //Show WELCOME view if user is stored succed
        return $this->show();
    }

    /**
     *  Method to login an existing user in the database
     *  
     */
    public function login(LoginRequest $reqest)
    {
        $validate = $request->validate([
            'name'=>'required|max:10',
            'email'=>'required'
        ]);
   
        //Show WELCOME or LOGIN FAIL view if user is in the database
        return $this->show();
    }
}