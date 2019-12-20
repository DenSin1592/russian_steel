@extends('layouts.admin')

@section('content')
   @php
      /** @var \Illuminate\Database\Eloquent\Collection $comboBoxCategory*/
      /** @var \Illuminate\Database\Eloquent\Collection $comboBoxImage*/
      $comboBoxCategory_final = $comboBoxCategory;
      $comboBoxImage_final = $comboBoxImage;
   @endphp
   <div class="site-section">

      <div class="container">
         <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
               <h2 class="font-weight-light text-black display-4">Создание</h2>
            </div>
            <div class="col-md-7 text-center">
               <p>Создание новой единицы товара</p>
            </div>
            @php /** @var \Illuminate\Support\ViewErrorBag $errors*/ @endphp
            @if($errors->any())
               <div class="bg-danger col-md-7 text-center">
                  <p>{{$errors->first()}}</p>
               </div>
            @endif
         </div>

      </div>

      <div class="container">
         <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
               <form action="{{route('admin/productions.store')}}" method="post"  class="p-5 bg-white">
                  @csrf
                  <div class="row form-group">
                     <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Название</label>
                        <input type="text" id="fullname" value="{{old('title')}}" name="title" class="form-control" >
                     </div>
                  </div>

                  <div class="row">
                     <div class="col">
                        <label class="mr-sm-2" for="SelectCategoryTitle">Категория</label>
                        <select class="custom-select mr-sm-2" name="category_id" id="SelectCategoryTitle">
                           @foreach($comboBoxCategory_final as $item)
                           <option value="{{$item->id}}">{{$item->title}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="col">
                        <label class="mr-sm-2" for="SelectImageTitle">Изображение</label>
                        <select class="custom-select mr-sm-2" name="image_id" id="SelectImageTitle">
                           @foreach($comboBoxImage_final as $item)
                              <option value="{{$item->id}}">{{$item->title}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <br/>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="is_added" id="inlineRadio1" value="1">
                     <label class="form-check-label" for="inlineRadio1">Опубликованно</label>
                  </div>
                  <br/>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" checked  name="is_added" id="inlineRadio2" value="0">
                     <label class="form-check-label" for="inlineRadio2"  >Неопубликованно</label>
                  </div>
                  <br/>

                  <div class="row form-group">
                     <div class="col-sm-3 my-1">
                        <label class="font-weight-bold" for="price">Цена</label>
                        <input type="text" id="price" name="price" value="{{old('price')}}" class="form-control" placeholder="Price">
                     </div>
                  </div>

                  <div class="row form-group">
                     <div class="col-md-12">
                        <label class="font-weight-bold" for="message">Описание</label>
                        <textarea name="content_row" id="message"  cols="30" rows="5" class="form-control">{{old('title')}}</textarea>
                     </div>
                  </div>

                  <div class="row form-group">
                     <div class="col-md-12">
                        <input type="submit" value="Создать" class="btn btn-primary">
                     </div>
                  </div>

               </form>
            </div>

            <div class="col-lg-4">
               <div class="p-4 mb-3 bg-white">
                  <h3 class="h5 text-black mb-3">Общая Информация</h3>
                  <p class="mb-0 font-weight-bold">Id</p>
                  <p class="mb-4">... </p>

                  <p class="mb-0 font-weight-bold">Дата Создания</p>
                  <p class="mb-4">...</p>

                  <p class="mb-0 font-weight-bold">Дата Последнего изменения</p>
                  <p class="mb-0">...</p>

                  <p class="mb-0 font-weight-bold">Дата Публикации</p>
                  <p class="mb-0">...</p>

               </div>

               <div class="p-4 mb-3 bg-white">
                  <h3 class="h5 text-black mb-3">Отмена создания</h3>
                  <p>Вы можете отменить процесс создания, вернувшись на главную страницу.</p>
                  <p><a href="{{route("admin/productions.index")}}" class="btn btn-primary px-4 py-2 text-white">Отмена</a></p>
               </div>
            </div>
         </div>
      </div>

   </div>

@endsection