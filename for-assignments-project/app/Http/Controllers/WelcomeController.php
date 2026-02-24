<?php

namespace App\Http\Controllers;

use App\Models\Author;

class WelcomeController extends Controller
{
    public function index()
    {
        $authors = Author::with('books')->get();
        
        $greeting = 'Welcome to my page';

        return view('hello', compact('authors', 'greeting'));
    }
}
