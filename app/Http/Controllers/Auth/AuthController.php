<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Activitylog\Models\Activity;

class AuthController extends Controller
{
    public function showFormRegister()
    {
        return view('auth.register');
    }

    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $user = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'min:6|required_with:confirm-password|same:confirm-password',
            'confirm-password' => 'min:6'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->assignRole('admin');
        $user->save();

        return redirect('/dashboard')->with('success', 'Registrasi berhasil');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            activity()->causedBy(Auth::user())->log('' . auth()->user()->name . ' telah login');
            return redirect('/dashboard');
        }

        // Authentication failed, kembali ke halaman login
        return back()->withInput()->with('error', 'Login gagal, silakan coba lagi!');
    }

    function logout()
    {
        activity()->causedBy(Auth::user())->log('' . auth()->user()->name . ' telah logout');
        Auth::logout();

        return redirect('/login');
    }
}
