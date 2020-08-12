<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PelangganModel {
  public static function get_all(){
    $pelanggan = DB::table('pelanggan')
                  ->select('pelanggan.*', 'respons.nama as respon_nama', 'respons.id as respon_id')
                  ->join('respons', 'pelanggan.respon_id', '=', 'respon_id')
                  ->get();
    return $pelanggan;
  }

  public static function save($data) {
    // data _token nya dibuang
    unset($data["_token"]);
    $new_pelanggan = DB::table('pelanggan')->insert($data);
    return $new_pelanggan;
  }

  public static function find_by_id($id){
    $pelanggan = DB::table('pelanggan')->where('id', $id)->first();
    return $pelanggan;
  }

  public static function update($id, $request){
    // dd($request);
    $pelanggan = DB::table('pelanggan')
              ->where('id', $id)
              ->update([
                'nama' => $request["nama"],
                'no_polisi' => $request["no_polisi"],
                'model_type' => $request["model_type"],
                'no_telp' => $request["no_telp"],
                'respon_id' => $request["respon_id"]
              ]);
    return $pelanggan;
  }

  public static function destroy($id){
    $deleted = DB::table('pelanggan')
                  ->where('id', $id)
                  ->delete();
    return $deleted;
  }

  

}
