<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function show_procedure_list(Request $request) {
        return view('procedure_list');
    }
}
