<?php

namespace App\Http\Controllers;

use App\Models\Computer;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'computerCount' => Computer::count(),
        ]);
    }
}