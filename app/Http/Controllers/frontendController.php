<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mobil;
use App\boking;
use App\galeri;

class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book=boking::all();
        $mobil=mobil::all();
        return view('frontend.boking',compact('book','mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tanggal_boking' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'id_mobil' => 'required'
        ]);
        $front = new boking;
        $front->tanggal_boking = $request->tanggal_boking;
        $front->nama = $request->nama;
        $front->alamat = $request->alamat;
        $front->no_hp = $request->no_hp;
        $front->id_mobil = $request->id_mobil;
        return redirect()->route('frontend.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
