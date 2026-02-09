<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function sayHello()
    {
        return view('hello', [
            'university' => 'KBTU'
        ]);
    }
}
