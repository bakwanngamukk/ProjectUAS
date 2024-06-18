<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller
{
    public function registForm()
    {
        return view('register');
    }

    public function createAccount(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'name' => 'required|string|max:255',
            'telephone_number' => 'required|string|max:12',
            'address' => 'required|string|max:255',
            'password' => 'required|string|min:8|same:password_confirm',
            'password_confirm' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
            ->withErrors($validator)
            ->withInput();
        }

        $user = new User;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->name = $request->name;
        $user->telephone_number = $request->telephone_number;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->save();

        return view('login');
    }
}
