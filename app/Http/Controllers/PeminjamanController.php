<?php

namespace App\Http\Controllers;
use App\Models\barang;
use App\Models\peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = peminjaman::with('barang')->get();
        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjaman = peminjaman::all();
        $barang = barang::all();
        return view('peminjaman.create', compact('peminjaman','barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
      $request->validate([
        'id_barang' => 'required',
        'peminjam' => 'required',
        'jk' => 'required',
        'no_telp' => 'required',
<<<<<<< HEAD
        'jumlah' => 'required|numeric',
=======
        'jumlah' => 'required',
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
        'tgl_pinjam' => 'required',

    ]);

     $peminjaman = new peminjaman;
     $peminjaman->id_barang = $request->id_barang;
     $peminjaman->peminjam = $request->peminjam;
     $peminjaman->jk = $request->jk;
     $peminjaman->no_telp = $request->no_telp;
     $peminjaman->jumlah = $request->jumlah;
     $peminjaman->tgl_pinjam = $request->tgl_pinjam;

     $peminjaman->save();
     $barang = barang::findOrFail($request->id_barang);
        $barang->stok -= $request->jumlah; $barang->save();
     return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjaman = peminjaman::findOrFail($id);
        $barang = barang::all();
        return view('peminjaman.show', compact('peminjaman', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjaman = peminjaman::findOrFail($id);
        $barang = barang::all();
        return view('peminjaman.edit', compact('peminjaman', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi data
<<<<<<< HEAD
        $validated = $request->validate([
=======
        $request->validate([
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
          'id_barang' => 'required',
          'peminjam' => 'required',
          'jk' => 'required',
          'no_telp' => 'required',
<<<<<<< HEAD
          'jumlah' => 'required|numeric',
=======
          'jumlah' => 'required',
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
          'tgl_pinjam' => 'required',

      ]);

       $peminjaman = peminjaman::findOrFail($id);
       $peminjaman->id_barang = $request->id_barang;
       $peminjaman->peminjam = $request->peminjam;
       $peminjaman->jk = $request->jk;
       $peminjaman->no_telp = $request->no_telp;
       $peminjaman->jumlah = $request->jumlah;
       $peminjaman->tgl_pinjam = $request->tgl_pinjam;

       $peminjaman->save();
       $barang = barang::findOrFail($request->id_barang);
       $barang->stok -= $peminjaman->jumlah; $barang->save();
       return redirect()->route('peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman.index');
    }
}
