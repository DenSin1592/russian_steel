<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends BaseController
{

    public function index ()
    {
        return view('admin_panel.admin_home');
    }
}
