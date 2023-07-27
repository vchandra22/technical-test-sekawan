<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class TransactionController extends Controller
{
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
        $kendaraan = Vehicle::where('status', '=', 'tersedia')->get();

        $user = User::role('verifikator')->get();

        return view('dashboard.transaction_create', compact('kendaraan', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_vehicles' => 'required',
            'id_users' => 'required',
        ]);

        // Membuat record transaksi baru
        $transaction = new Transaction($validatedData);

        // Menyimpan record transaksi ke database
        $transaction->save();

        // Mengubah status kendaraan menjadi "dipesan"
        $vehicle = Vehicle::find($validatedData['id_vehicles']);
        if ($vehicle) {
            $vehicle->status = 'dipesan';
            $vehicle->nama_driver = $request->nama_driver;
            $vehicle->save();
        }

        return redirect('/kendaraan')->with('success', 'Transaksi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
