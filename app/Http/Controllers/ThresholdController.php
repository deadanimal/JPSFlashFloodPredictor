<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThresholdController extends Controller
{
    public function show_threshold_list(Request $request) {
        return view('threshold_list');
    }
}
