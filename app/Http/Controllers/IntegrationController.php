<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntegrationController extends Controller
{
    public function show_integration_list(Request $request) {
        return view('integration_list');
    }
}
