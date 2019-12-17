<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPanel\CreateCategoryRequest;
use App\Http\Requests\AdminPanel\UpdateCategoryRequest;
use App\Models\PriceCategoryModel;
use Illuminate\Http\Request;
use App\Repositories\CategoryRepository;

class CategoryController extends BaseController
{
    /**
     * @var CategoryRepository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    private $CategoryRepository;

    public function __construct()
    {
        parent::__construct();
        $this->CategoryRepository = app(CategoryRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories_paginator = $this->CategoryRepository->getAllWithPaginate(5);

        return view('admin_panel.admin_categories', compact('categories_paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comboBox = $this->CategoryRepository->getForCombobox();
        return view('admin_panel.admin_category_create', compact('comboBox'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $request_date = $request->input();
        $new_category = new PriceCategoryModel();
        $result = $new_category->create($request_date);

        if($result)
            return redirect()
                ->route('admin/categories.index')
                ->with(['success' => "Успешно создано"]);
        else
            return back()
                ->withErrors(['message' => "Ошибка сохранения"])
                ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->CategoryRepository->getOneById($id);
        $comboBox = $this->CategoryRepository->getForCombobox();

        if(empty($category)) abort(404);
        return view('admin_panel.admin_category_update', compact('category','comboBox'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCategoryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = $this->CategoryRepository->getOneById($id);
        if(empty($category))
            return back()
                ->withErrors(['message' => "Категория с [id = $id] не найдена!"])
                ->withInput();

        $data_request = $request->all();
        $result = $category->update($data_request);

        if($result)
            return redirect()
                ->route('admin/categories.index')
                ->with(['success' => "Успешно изменено"]);
        else
            return back()
                ->withErrors(['message' => "Ошибка сохранения"])
                ->withInput();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd(__METHOD__);
    }
}
