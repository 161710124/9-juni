<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\boking;
use App\mobil;

class BokingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = boking::all();
        return view('boking.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = boking::all();
        $mobil = mobil::all();
        return view('boking.create',compact('book','mobil'));
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
        'id_mobil' => 'required',
        'nama' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required'
        ]);
        $book = boking::create($request->all());
        return redirect()->route('bk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = boking::findOrFail($id);
        return view('boking.edit',compact('book'));
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
        $this->validate($request,[
        'tanggal_boking' => 'required',
        'id_mobil' => 'required',
        'nama' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required'
        ]);
        $book = boking::findOrFail($id);
        $book->tanggal_boking = $request->tanggal_boking;
        $book->id_mobil = $request->id_mobil;
        $book->nama = $request->nama;
        $book->alamat = $request->alamat;
        $book->no_hp = $request->no_hp;
        $book->save();
        return redirect()->route('bk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = boking::findOrFail($id);
        $book->delete();
        return redirect()->route('bk.index');
    }
}
