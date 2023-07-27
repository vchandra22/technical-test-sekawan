<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public $password;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('dashboard.password');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        request()->validate([
            'old_password' => 'required',
            'password' => 'min:8|required_with:konfirmasi_password|same:konfirmasi_password',
        ]);

        $currentPassword = auth()->user()->password;
        $old_password = request('old_password');

        if (Hash::check($old_password, $currentPassword)) {

            // mendapatkan password baru dari inputan form
            $currentPassword = request('password');
            // hash password baru sebelum disimpan ke database
            $hashedPassword = Hash::make($currentPassword);
            // mendapatkan id user yang sedang login melalui Auth::id()
            $user_id = Auth::id();
            // update password user dengan query builder
            DB::table('users')->where('id', $user_id)->update(['password' => $hashedPassword]);

            return redirect('/profile')->with('success', 'Password baru berhasil diubah');
        } else {
            return back()->withErrors(['old_password' => 'Pastikan anda memasukkan password lama dengan benar']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
