<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function get_all() {
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function find_id($id) {
        $pertanyaan = DB::table('pertanyaan')->where('id',$id)->first();
        return $pertanyaan;
    }

    public static function save($data) {
        $create_pertanyaan = DB::table('pertanyaan')->insert($data);
        return $create_pertanyaan;
    }

    public static function update($id, $request) {
        $pertanyaan = DB::table('pertanyaan')
                      ->where('id', $id)
                      ->update([
                          'judul'=>$request['judul'],
                          'nama'=>$request['nama'],
                          'isi'=>$request['isi']
                        ]);
        return $pertanyaan;
    }

    public static function destroy_pertanyaan($id) {
        $del_pertanyaan = DB::table('pertanyaan')
                            ->where('id', $id)
                            ->delete();
        return $del_pertanyaan;
    } 
} 