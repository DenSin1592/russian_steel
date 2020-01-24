<?php

namespace App\Http\Controllers\Site;

//use App\Http\Controllers\Controller;

use App\Http\Controllers\Site\BaseController as Controller;
use App\Models\PriceCategoryModel;
use App\Models\PriceProductModel;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public function showHomePage()
    {
        return view('website.home.home');
    }

    public function showServicesPage()
    {
        return view('website.services.services');
    }

    public function showContactsPage()
    {
        return view('website.contacts.contact');
    }

    public function showProductionPage($argCategoryId=null)
    {
        $categories = PriceCategoryModel::select('id', 'title')->where('id','>','1')->get();

        if(!isset($argCategoryId)) {

            $header = 'Наши изделия';
            $products = PriceProductModel::select('id', 'title', 'excerpt', 'price')->orderBy('created_at', 'asc')->paginate(6);
            return view('website.production.production' , compact(['categories', 'products', 'header']));
        }

        $header = PriceCategoryModel::select('id', 'title')->where('id','=',$argCategoryId)->where('id','>','1')->firstOrFail();

        $header = $header->title;
        $products = PriceProductModel::select('id', 'title', 'excerpt', 'price')->where('category_id', '=', $argCategoryId)->orderBy('created_at', 'asc')->paginate(6);
        return view('website.production.production' , compact(['categories', 'products', 'header']));

    }

    /*public function showNewsPage()
    {
        return view('website.news.news');
    }*/
}
