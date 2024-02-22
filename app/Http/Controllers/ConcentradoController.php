<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ConcentradoController extends Controller
{
    public function Concentrado(): View
    {
        return view('concentrado'); 
    }
}
