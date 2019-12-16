<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPanel\UpdateProductRequest;
use App\Models\PriceProductModel;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductionRepository;
use Illuminate\Http\Request;

class ProductionController extends BaseController
{
    private $ProductionRepository;
    private $CategoryRepository;

    public function __construct()
    {
        parent::__construct();
        $this->ProductionRepository = app(ProductionRepository::class);
        $this->CategoryRepository = app(CategoryRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products_paginate = $this->ProductionRepository->getAllWithPaginate(10);

        return view('admin_panel.admin_productions', compact('products_paginate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin_panel.admin_production_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        return view('admin_panel.admin_production_show');
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->ProductionRepository->getOneById($id);
        if(!$product) abort(404);
        $comboBox = $this->CategoryRepository->getForCombobox();

        return view('admin_panel.admin_production_update', compact('product', 'comboBox'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $new_product = $this->ProductionRepository->getOneById($id);
        if(empty($new_product))
            return back()
                ->withErrors(['message' => "Продукт с [id = $id] не найден!"])
                ->withInput();

        $date = $request->all();
        $result = $new_product->update($date);

        if(!$result)
            return back()
                ->withInput()
                ->withErrors(['message' => "Операция не удалась"]);
        else
            return redirect()
                ->route('admin/productions.index')
                ->with(['success' => 'Успешно сохранено']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->ProductionRepository->getOneById($id);
        $result = $product::destroy($id);

        if(!$result)
            return back()
                ->withInput()
                ->withErrors(['message' => "Удаление не удалось"]);
        else
            return redirect()
                ->route('admin/productions.index')
                ->with(['success' => 'Успешно удалено']);

    }
}
