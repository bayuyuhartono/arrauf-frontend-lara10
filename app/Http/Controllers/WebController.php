<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class WebController extends BaseController
{
    public function home()
    {
        return view('page.home.index');
    }
}
