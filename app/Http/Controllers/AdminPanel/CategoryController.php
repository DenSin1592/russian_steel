<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPanel\UpdateCategoryRequest;
use App\Models\PriceCategoryModel;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = PriceCategoryModel::select('id', 'title')
            ->where('id', '>', '1')
            ->paginate(5);

        return view('admin_panel.admin_categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_panel.admin_category_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(__METHOD__);
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
        $category = PriceCategoryModel::findOrFail($id);
        /*$categories_list = PriceCategoryModel::all();*/

        return view('admin_panel.admin_category_update', compact('category'));
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
        $category = PriceCategoryModel::find($id);
        if(empty($category))
            return back()
                ->withErrors(['message' => "Категория с [id = $id] не найдена!"])
                ->withInput();

        $data_request = $request->all();
        $result = $category->fill($data_request)->save();

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
