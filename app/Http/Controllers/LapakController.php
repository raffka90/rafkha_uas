<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapak;


class LapakController extends Controller
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
        $this-> authorize('create',Lapak::class);
        $nomor = 1;
        $lapak = Lapak::all();
        return view('page.lapak.index', compact('lapak','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this-> authorize('create',Lapak::class);

        return view('page.lapak.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lapak = new Lapak;

        $lapak -> no_lapak =$request->no;
        $lapak -> jenis_lapak =$request->jenis;

        $lapak ->save();

        return redirect('/lapak');
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
        $lapak = Lapak::find($id);
        return view('page.lapak.edit',compact('lapak'));
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
        $lapak = Lapak::find($id);

        $lapak -> no_lapak =$request->no;
        $lapak -> jenis_lapak =$request->jenis;

        $lapak ->save();

        return redirect('/lapak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lapak = Lapak::find($id);
        $lapak->delete();

        return redirect('/lapak');
    }
}
