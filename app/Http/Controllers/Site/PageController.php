<?php

namespace App\Http\Controllers\Site;

//use App\Http\Controllers\Controller;

use App\Http\Controllers\Site\BaseController as Controller;
use App\Models\PriceCategoryModel;
use App\Models\PriceProductModel;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public function show_home_page()
    {
        return view('website.home.home');
    }

    public function show_services_page()
    {
        return view('website.services.services');
    }

    public function show_contacts_page()
    {
        return view('website.contacts.contact');
    }

    public function show_production_page($arg_category_id=null)
    {
        $categories = PriceCategoryModel::select('id', 'title')->where('id','>','1')->get();

        if(!isset($arg_category_id)) {

            $header = 'Наши изделия';
            $products = PriceProductModel::select('id', 'title', 'excerpt', 'price')->orderBy('created_at', 'asc')->paginate(6);
            return view('website.production.production' , compact(['categories', 'products', 'header']));
        }

        $header = PriceCategoryModel::select('id', 'title')->where('id','=',$arg_category_id)->where('id','>','1')->firstOrFail();

        $header = $header->title;
        $products = PriceProductModel::select('id', 'title', 'excerpt', 'price')->where('category_id', '=', $arg_category_id)->orderBy('created_at', 'asc')->paginate(6);
        return view('website.production.production' , compact(['categories', 'products', 'header']));

    }

    /*public function show_news_page()
    {
        return view('website.news.news');
    }*/
}
