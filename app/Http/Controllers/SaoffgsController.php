<?php

namespace App\Http\Controllers;

use App\Models\IntegrationSaoffgsData;
use Illuminate\Http\Request;

class SaoffgsController extends Controller
{
    public function show_saoffgs_list(Request $request) {
        $datas = IntegrationSaoffgsData::all();
        return view('saoffgs_list', compact('datas'));
    }

    public function show_saoffgs_detail(Request $request) {
        $id = (int)$request->route('id');
        $data = IntegrationSaoffgsData::find($id);
        return view('saoffgs_detail', compact('data'));
    }

    public function update_saoffgs_detail(Request $request) {
        $id = (int)$request->route('id');
        $data = IntegrationSaoffgsData::find($id);
        $data->approved = !$data->approved;
        $data->save();
        return back();
    }

}
