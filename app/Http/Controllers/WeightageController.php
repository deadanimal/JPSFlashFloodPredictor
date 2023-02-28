<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeightageController extends Controller
{
    public function show_weightage_list(Request $request) {
        return view('weightage_list');
    }
}
