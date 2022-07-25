<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedagang;
use App\Models\Lapak;

class PedagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $nomor = 1;
        $pedagang = Pedagang::all();
        return view('pedagang.index', compact('pedagang','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pedagang.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedagang = new Pedagang;

        
        $pedagang->nama = $request->nama;
        $pedagang->alamat = $request->alamat;
        $pedagang->nohp = $request->nohp;
        // $pedagang->lapaks_id = $request->lapak;
        // $pedagang->jk = $request->jk;
        // $mhs->agama = $request->agama;
        // $mhs->email = $request->email;
        $pedagang->save();

        return redirect('/pedagang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedagang = Pedagang::find($id);
        $lapak = Lapak::all();
        return view ('pedagang.edit', compact('pedagang','lapak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pedagang = Pedagang::find($id);

        
        $pedagang->nama = $request->nama;
        $pedagang->alamat = $request->alamat;
        $pedagang->nohp = $request->nohp;
        // $pedagang->lapaks_id = $request->lapak;
        // $pedagang->jk = $request->jk;
        // $mhs->agama = $request->agama;
        // $mhs->email = $request->email;
        $pedagang->save();

        return redirect('/pedagang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedagang = Pedagang::find($id);
        $pedagang->delete();

        return redirect('/pedagang');
    }
}
