<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
    public static function pertanyaan($id) {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return $pertanyaan;
    }

    public static function save($data) {
        $newData = DB::table('jawaban')->insert($data);
        return $newData;
    }

    public static function getjawaban($id) {
        $jawaban = DB::table('jawaban')->where('idpertanyaan', $id)->get();
        return $jawaban;
    }

    public static function delete_jawaban($id) {
        $del_jawaban = DB::table('jawaban')
                        ->where('idpertanyaan', $id)
                        ->destroy();
        return $del_jawaban;
    }

    public static function destroy_jawaban($id) {
        $del_jawaban = DB::table('jawaban')
                            ->where('idpertanyaan', $id)
                            ->delete();
        return $del_jawaban;
    }
}