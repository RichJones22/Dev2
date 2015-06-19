<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('PremiseMain');
    }

    public function projects()
    {
        return view('PremiseProjects');
    }

    public function contact()
    {
        return view('PremiseContact');
    }
}
