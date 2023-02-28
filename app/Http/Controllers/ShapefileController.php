<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShapefileController extends Controller
{
    public function show_shapefile_list(Request $request) {
        return view('shapefile_list');
    }
}
