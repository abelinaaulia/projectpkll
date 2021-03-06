<?php

namespace App\Http\Controllers;
use App\Models\peminjaman;
use App\Models\laporanpeminjaman;
use Illuminate\Http\Request;

class LaporanpeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $laporanpeminjaman = peminjaman::where('status', $request->status)->get();
        return view('laporanpeminjaman.index', compact('laporanpeminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\laporanpeminjaman  $laporanpeminjaman
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laporanpeminjaman  $laporanpeminjaman
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\laporanpeminjaman  $laporanpeminjaman
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laporanpeminjaman  $laporanpeminjaman
     * @return \Illuminate\Http\Response
     */

}
