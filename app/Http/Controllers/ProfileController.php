<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $profil = User::where('users.id', '=', Auth::user()->id)
        //     ->with('roles')
        //     ->get();

        // return view('dashboard.profile', compact('profil'));

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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {

        $user = User::findOrFail(Auth::user()->id);
        $profil = User::where('users.id', '=', Auth::user()->id)
            ->with('roles')
            ->get();

        $roles = Role::all();

        return view('dashboard.profile', compact('profil', 'roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'role' => 'required',
        ]);

        $role = Role::where('name', $validatedData['role'])->first();
        if (!$role) {
            return redirect('/dashboard')->with('error', 'Invalid role specified!');
        }

        // Update the user's name
        $user->update(['name' => $validatedData['name']]);

        // Assign the specified role to the user
        $user->syncRoles([$role]);

        return redirect('/dashboard')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
