<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
    public function __construct()
    {
    parent::__construct();
        $this->middleware('auth');
    }
}
