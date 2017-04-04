<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * GET /settings
     *
     * @return view
     */
    public function index()
    {
      return view('settings.index');
    }
}
