<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupoortFormController extends Controller
{
    public function support(Request $request){
        dd($request->all());
    }
}
