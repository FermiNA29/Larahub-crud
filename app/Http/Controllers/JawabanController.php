<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    //
    public function index(Request $request) {
        $id = $request['id'];
        $pertanyaan = JawabanModel::pertanyaan($id);
        $jawaban = JawabanModel::getjawaban($id);
        return view('jawaban.createjawaban',compact('jawaban','pertanyaan'));
    }

    public function store($id, Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        $newData = JawabanModel::save($data);
        // dd($getData);
        if($newData) {
            return redirect("/pertanyaan");
        }
    }
}
