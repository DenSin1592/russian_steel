<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Requests\AdminPanel\CreateImageRequest;
use App\Models\PriceImageModel;

class ImageController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images_paginate = PriceImageModel::select('id', 'title', 'path')->paginate(10);
        return view('admin_panel.admin_images', compact('images_paginate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_panel.admin_image_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AdminPanel\CreateImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateImageRequest $request)
    {
        $path = $request->file('image')->store('upload_image','public');
        if(!$path) return back()->withErrors(['message' => "Неизвестная ошибка - попробуйте позже"])->withInput();

        $model = new PriceImageModel();
        $new_model['title'] = $request->input('title');
        $new_model['path'] = $path;
        $result = $model::create($new_model);
        if(!$result)
            return back()
                ->withInput()
                ->withErrors(['message' => "Операция не удалась"]);
        else
            return redirect()
                ->route('admin/images.index')
                ->with(['success' => 'Успешно сохранено']);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\AdminPanel\CreateImageRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateImageRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result= PriceImageModel::destroy($id);

        if(!$result)
            return back()
                ->withInput()
                ->withErrors(['message' => "Удаление не удалось"]);
        else
            return redirect()
                ->route('admin/images.index')
                ->with(['success' => 'Успешно удалено']);
    }
}
