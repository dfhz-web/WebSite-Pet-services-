<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function index()
    {
        return 'welcome to possible suggestions';
    }
    public function create()
    {
        return "here you can create a request";
    }
    public function show()
    {

    }

}
