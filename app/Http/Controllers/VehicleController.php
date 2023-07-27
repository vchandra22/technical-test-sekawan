<?php

namespace App\Http\Controllers;

use App\Exports\VehicleExport;
use App\Models\Transaction;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraan = Vehicle::get();

        $kVerifikator = Transaction::join('vehicles', 'vehicles.id', '=', 'transactions.id_vehicles')
            ->where('transactions.id_users', '=', Auth::id())
            ->get();

        return view('dashboard.kendaraan', compact('kendaraan', 'kVerifikator'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kendaraan_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kendaraan = $request->validate([
            'merek' => 'required',
            'nopol' => 'required',
            'bahan_bakar' => 'required',
            'jenis' => 'required',
            'status' => 'required',
        ]);

        $kendaraan = new Vehicle();
        $kendaraan->merek = $request->merek;
        $kendaraan->nopol = $request->nopol;
        $kendaraan->bahan_bakar = $request->bahan_bakar;
        $kendaraan->jenis = $request->jenis;
        $kendaraan->status = $request->status;
        $kendaraan->save();

        return redirect('/kendaraan')->with('success', 'Kendaraan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $decryptId =  Crypt::decryptString($id);

        $kendaraan = Vehicle::findOrFail($decryptId);

        $kdDetail = Vehicle::where('id', '=', $decryptId)->get();

        return view('dashboard.kendaraan_edit', compact('kdDetail', 'kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $validatedData = $request->validate([
            'merek' => 'required',
            'nopol' => 'required',
            'bahan_bakar' => 'required',
            'jenis' => 'required',
            'status' => 'required',
        ]);

        if ($vehicle->status === 'tersedia') {
            $validatedData['nama_driver'] = null;
        }

        Vehicle::where('id', $vehicle->id)
            ->update($validatedData);

        return redirect('/kendaraan')->with('success', 'Kendaraan berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kendaraan = Vehicle::where('id', $id);

        $kendaraan->delete();

        return redirect('/kendaraan')->with('success', 'Data kendaraan berhasil dihapus!');
    }

    public function approve($id)
    {

        $decryptedId = Crypt::decryptString($id);

        $vehicle = Vehicle::find($decryptedId);

        if ($vehicle) {
            $vehicle->status = 'dipakai';
            $vehicle->save();
        }

        return redirect('/kendaraan')->with('success', 'Status kendaraan berhasil diubah menjadi "dipakai"');
    }

    public function reject($id)
    {

        $decryptedId = Crypt::decryptString($id);

        $vehicle = Vehicle::find($decryptedId);

        if ($vehicle) {
            $vehicle->status = 'tersedia';
            $vehicle->save();
        }

        return redirect('/kendaraan')->with('success', 'Status kendaraan berhasil diubah menjadi "dipakai"');
    }

    public function exportexcel()
    {
        return Excel::download(new VehicleExport, 'datakendaraan.xlsx');
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';

            $keyword = $request->input('search');

            $kendaraan = Vehicle::where(function ($query) use ($keyword) {
                $query->where('merek', 'LIKE', "%$keyword%")
                    ->orWhere('nopol', 'LIKE', "%$keyword%")
                    ->orWhere('bahan_bakar', 'LIKE', "%$keyword%")
                    ->orWhere('jenis', 'LIKE', "%$keyword%")
                    ->orWhere('nama_driver', 'LIKE', "%$keyword%");
            })
                ->select('*')
                ->get();

            if ($kendaraan) {
                foreach ($kendaraan as $count => $item) {
                    if ($item['status'] == 'tersedia') {
                        $color = 'bg-green-500';
                    } elseif ($item['status'] == 'dipesan') {
                        $color = 'bg-blue-600';
                    } elseif ($item['status'] == 'dipakai') {
                        $color = 'bg-yellow-300';
                    } elseif ($item['status'] == 'servis') {
                        $color = 'bg-red-600';
                    } else {
                        // Set default color if status is not recognized
                        $color = 'bg-gray-400';
                    }

                    $output .= '
                    <tr>
                        <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-xs">' . ++$count . '</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent text-center">
                            <div class="flex px-2 py-1">
                                <div class="flex flex-col mx-auto">
                                    <h6 class="mb-0 leading-normal text-sm text-center">' . $item->merek . '</h6>
                                    <p class="mb-0 leading-tight text-xs text-slate-400 text-center">' . $item->nopol . '</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-xs text-center">' . $item->bahan_bakar . '</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-xs text-center capitalize">Kendaraan ' . $item->jenis . '</p>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <p class="mb-0 font-semibold leading-tight text-xs text-center capitalize">' . ($item->nama_driver ?: '-') . '</p>
                        </td>
                        <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                            <h3 class="' . $color . ' px-3 text-xs rounded-xl py-2 inline-block whitespace-nowrap text-center align-baseline font-semibold uppercase tracking-wide text-white hover:bg-opacity-80">' . $item->status . '</h3>
                        </td>
                    </tr>
                ';
                }

                if ($kendaraan->count() > 0) {
                    return response()->json($output);
                } else {
                    $output .= '
                    <tr>
                        <td colspan="8" class="text-center py-20">Ups! data tidak ditemukan.</td>
                    </tr>
                ';
                    return response()->json($output);
                }
            }
        }
        return view('dashboard.kendaraan');
    }
}
