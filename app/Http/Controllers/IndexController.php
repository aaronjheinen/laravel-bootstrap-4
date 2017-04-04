<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    /**
     * GET /
     *
     * @return view
     */
    public function index()
    {
      return view('index');
    }
}
