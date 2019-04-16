<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','author']);
    }
    public function index()
    {
        return view('author_dashboard');
    }
}
