<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accountController extends Controller
{
    public function index()
    {
        return view('landingpage.index');
    }

    public function store(Request   $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'description' => 'required',
        ]);
    }
}
