<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
{
   return view('register.create');
}
protected function validator(array $data)
{
    return Validator::make($data, [
        'name' => 'required|string|max:255',
        'username' => 'required|min:3|max:255|unique:users,username',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);
}

        protected function store(array $data)
{
            return User::create([
          'name' => $data['name'],
         'email' => $data['email'],
         'username'=>$data['username'],
        'password' => bcrypt($data['password']),
    ]);

   
}


}


