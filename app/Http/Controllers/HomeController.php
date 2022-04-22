<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{

    /**
     * Renderiza la vista Home
     *
     * @return View
     */
    public function home(): View
    {
        return view('home');
    }
}
