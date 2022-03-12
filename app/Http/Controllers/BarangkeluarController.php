<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

=======
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
use App\Models\barang;
use App\Models\barangkeluar;
use App\Models\barangmasuk;
use Illuminate\Http\Request;

class BarangkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangkeluar = barangkeluar::with('barang')->get();
        return view('barangkeluar.index', compact('barangkeluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangkeluar = barangkeluar::all();
        $barang = barangmasuk::all();
<<<<<<< HEAD
        return view('barangkeluar.create', compact('barangkeluar', 'barang'));
=======
        return view('barangkeluar.create', compact('barangkeluar','barang'));
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ///validasi data
<<<<<<< HEAD
        $request->validate([
            'id_barang' => 'required',
            'jumlah' => 'required',
            'tgl_keluar' => 'required',
        ]);

        $barangkeluar = new barangkeluar;
        $barangkeluar->id_barang = $request->id_barang;
        $barangkeluar->jumlah = $request->jumlah;
        $barangkeluar->tgl_keluar = $request->tgl_keluar;
        $barangkeluar->save();

        $barang = barang::findOrFail($barangkeluar->id_barang);
        $barang->stok -= $request->jumlah;
        $barang->save();
        return redirect()->route('barangkeluar.index');
=======
      $request->validate([
        'id_barang' => 'required',
        'jumlah' => 'required',
        'tgl_keluar' => 'required',
    ]);

     $barangkeluar = new barangkeluar;
     $barangkeluar->id_barang = $request->id_barang;
     $barangkeluar->jumlah = $request->jumlah;
     $barangkeluar->tgl_keluar = $request->tgl_keluar;

     $barangkeluar->save();
     $barang = barang::findOrFail($request->id_barang);
        $barang->stok -= $request->jumlah; $barang->save();
     return redirect()->route('barangkeluar.index');
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barangkeluar  $barangkeluar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangkeluar = barangkeluar::findOrFail($id);
        $barang = barang::all();
        return view('barangkeluar.show', compact('barangkeluar', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barangkeluar  $barangkeluar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangkeluar = barangkeluar::findOrFail($id);
        $barang = barang::all();
        return view('barangkeluar.edit', compact('barangkeluar', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barangkeluar  $barangkeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ///validasi data
<<<<<<< HEAD
        $request->validate([
            'id_barang' => 'required',
            'jumlah' => 'required',
            'tgl_keluar' => 'required',
        ]);

        $barangkeluar = barangkeluar::findOrFail($id);
        $barangkeluar->id_barang = $request->id_barang;
        $barangkeluar->jumlah = $request->jumlah;
        $barangkeluar->tgl_keluar = $request->tgl_keluar;

        $barangkeluar->save();
        $barang = barang::findOrFail($request->id_barang);
        $barang->stok -= $barangkeluar->jumlah;
        $barang->save();
        return redirect()->route('barangkeluar.index');
=======
      $request->validate([
        'id_barang' => 'required',
        'jumlah' => 'required',
        'tgl_keluar' => 'required',
    ]);

     $barangkeluar = barangkeluar::findOrFail($id);
     $barangkeluar->id_barang = $request->id_barang;
     $barangkeluar->jumlah = $request->jumlah;
     $barangkeluar->tgl_keluar = $request->tgl_keluar;

     $barangkeluar->save();
     $barang = barang::findOrFail($request->id_barang);
        $barang->stok -= $barangkeluar->jumlah; $barang->save();
     return redirect()->route('barangkeluar.index');
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barangkeluar  $barangkeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangkeluar = barangkeluar::findOrFail($id);
        $barangkeluar->delete();
        return redirect()->route('barangkeluar.index');
    }
}
