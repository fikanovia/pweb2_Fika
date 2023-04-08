<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\DashboardController;
use App\Models\Barang;
use Illuminate\View\View;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Barang::all();
        return view('Barang.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Barang::all();
        return view('Barang.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insert(Request $request)
    {
        $data = Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga_satuan' => $request->harga_satuan,
            'jml' => $request->jml,
            'tgl_drop' => $request->tgl_drop,
        ]);
        $data->save();
        return redirect()->route('Tampildata');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Barang::find($id);
        return view('Barang.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Barang::findOrFail($id);
        $data->nama_barang = $request->nama_barang;
        $data->harga_satuan = $request->harga_satuan;
        $data->jml = $request->jml;
        $data->tgl_drop = $request->tgl_drop;
        $data->save();
        return redirect()->route('Tampildata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('Tampildata');
    }
}
