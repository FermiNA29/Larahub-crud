<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    //
    public function index() {
        $pertanyaan = PertanyaanModel::get_all();
        return view('pertanyaan.pertanyaan', compact('pertanyaan'));
    }

    public function create() {
        return view('pertanyaan.formpertanyaan');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        $create_pertanyaan = PertanyaanModel::save($data);
        if ($create_pertanyaan) {
            return redirect('/pertanyaan');
        }
    }

    public function edit(Request $request) {
        $editpertanyaan = PertanyaanModel::find_id($request['id']);
        return view('pertanyaan.edit', compact('editpertanyaan'));
    }

    public function show($id) {
        $pertanyaan = PertanyaanModel::find_id($id);
        $jawaban = JawabanModel::getjawaban($id);
        return view('pertanyaan.detail', compact('pertanyaan', 'jawaban'));
    }

    public function update($id, Request $request) {
        $upadate = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id) {
        $delete = PertanyaanModel::destroy_pertanyaan($id);
        $jawaban = JawabanModel::destroy_jawaban($id);
        return redirect('/pertanyaan');
    }
}
