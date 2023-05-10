<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        return view ('register.index', [
            'title' => 'REGISTER',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255', // bisa menggunakan tanda pive ( | )
            'username' => ['required', 'min:3', 'max:255', 'unique:users'], // Atau bisa menggunakan Array
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request = session();
        // $request->flash('success', '. Selanjutnya Silahkan Login');
        return redirect('/login')->with('success', ' Silahkan Login');

    }
}
