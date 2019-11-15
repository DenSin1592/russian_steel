<?php

namespace App\Http\Controllers\Site;

//use App\Http\Controllers\Controller;

use App\Http\Controllers\Site\BaseController as Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show_home_page()
    {
        return view('website.home.home');
    }

    public function show_about_page()
    {
        return view('website.about.about');
    }

    public function show_contacts_page()
    {
        return view('website.contacts.contact');
    }

    public function show_price_page()
    {
        return view('website.price.price');
    }

    /*public function show_news_page()
    {
        return view('website.news.news');
    }*/
}
