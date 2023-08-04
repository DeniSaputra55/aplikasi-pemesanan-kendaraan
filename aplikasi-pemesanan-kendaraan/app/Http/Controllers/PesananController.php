<?php

namespace App\Http\Controllers;

use App\Models\Atasan;
use App\Models\Kendaraan;
use App\Models\Pesanan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = Pesanan::latest()->get();
        $kendaraan = Kendaraan::latest()->get();
        $atasan = Atasan::latest()->get();
        return view('/dashboard/pesanan/index', [
            'pesanans' => $pesanan,
            'kendaraans' => $kendaraan,
            'atasans' => $atasan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view()
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate($this->validation());

        Pesanan::create($validator);

        return redirect('/dashboard/pesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        $kendaraan = Kendaraan::latest()->get();
        $atasan = Atasan::latest()->get();
        return view('/dashboard/pesanan/ubah', [
            'pesanans' => $pesanan,
            'kendaraans' => $kendaraan,
            'atasans' => $atasan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        $validator = $request->validate($this->validation());

        Pesanan::where('id', $pesanan->id)->update($validator);

        return redirect('/dashboard/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesanan $pesanan)
    {
        Pesanan::destroy($pesanan->id);
        return redirect('/dashboard/pesanan');
    }

    public function validation()
    {
        return [
            'mobil_id' => 'required',
            'driver' => 'required',
            'atasan_id' => 'required',
            'telp' => 'required',
            'plat_mobil' => 'required'
        ];
    }
}
