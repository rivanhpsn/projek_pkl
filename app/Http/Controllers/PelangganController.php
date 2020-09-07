<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use App\models\PelangganModel;
use App\Respon;
use App\Category;
use App\User; 

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        // dd($pelanggan->all());
        return view('pelanggan.index', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $respons = Respon::all();
        $categories = Category::all();
        return view('pelanggan.form', compact('respons','categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $new_pel = Pelanggan::create([
            "nama" => $request["nama"],
            "no_polisi" => $request["no_polisi"],
            "model_type" => $request["model_type"],
            "no_telp" => $request["no_telp"],
            "respon_id" => $request["respon_id"],
            "category_id" => $request["category_id"]
        ]);

        return redirect('/pelanggan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelanggan = Pelanggan::find($id);
        // dd($pertanyaan->tags);
        return view('pelanggan.show', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggan = PelangganModel::find_by_id($id);
        $respons = Respon::all();
        return view('pelanggan.edit', compact('pelanggan','respons'));
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
        Pelanggan::where('id',$id)
            ->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
            ]);
        return redirect('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = Pelanggan::destroy($id);
        return redirect('/pelanggan');
    }
}
