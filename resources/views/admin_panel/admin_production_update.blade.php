@extends('layouts.admin')

@section('content')
   @php
      /** @var App\Models\PriceProductModel $product */
      /** @var \Illuminate\Database\Eloquent\Collection $comboBoxCategory*/
      /** @var \Illuminate\Database\Eloquent\Collection $comboBoxImage*/
   @endphp
   @php
      $product_final = $product;
      $comboBoxCategory_final = $comboBoxCategory;
      $comboBoxImage_final = $comboBoxImage;
   @endphp
   <div class="site-section">

      <div class="container">
         <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
               <h2 class="font-weight-light text-black display-4">Редактирование</h2>
            </div>
            <div class="col-md-7 text-center">
               <p>Редактирование единицы товара</p>
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

               <form action="{{route("admin/productions.update", $product_final->id)}}" method="post" class="p-5 bg-white">
                  @method('PATCH')
                  @csrf
                  <div class="row form-group">
                     <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Название</label>
                        <input type="text" id="fullname" class="form-control" name="title" value="{{old('title', $product_final->title)}}" >
                     </div>
                  </div>



                  <input type="hidden" id="fullname"  class="form-control" name="id" value="{{old('id', $product_final->id)}}" >



                  <div class="row">
                     <div class="col">
                        <label class="font-weight-bold" for="SelectParentTitle">Категория</label>
                        <select class="custom-select mr-sm-2" name="category_id" id="SelectParentTitle">
                           @foreach($comboBoxCategory_final as $category)
                              <option value="{{$category->id}}"
                                      @if($product_final->category_id == $category->id) selected @endif
                              >
                                 {{$category->title}}
                              </option>

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
                     <input class="form-check-input" type="radio" name="is_added" id="inlineRadio1" value="1"
                           @if($product_final->is_added) checked = 'checked' @endif
                     >
                     <label class="form-check-label" for="inlineRadio1">Опубликованно</label>
                  </div>
                  <br/>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="is_added" id="inlineRadio2" value="0"
                            @if(!$product_final->is_added) checked = 'checked' @endif
                     >
                     <label class="form-check-label" for="inlineRadio2">Неопубликованно</label>
                  </div>
                  <br/>

                  <div class="row form-group">
                     <div class="col-sm-3 my-1">
                        <label class="font-weight-bold" for="price">Цена</label>
                        <input type="text" id="price" class="form-control" name="price" value="{{old('price', $product_final->price)}}" placeholder="Price">                     </div>
                  </div>

                  <div class="row form-group">
                     <div class="col-md-12">
                        <label class="font-weight-bold" for="message">Описание</label>
                        <textarea name="content_row" id="message" cols="30" rows="5" class="form-control">{{old('content_row', $product_final->content_row)}}</textarea>
                     </div>
                  </div>

                  <div class="row form-group">
                     <div class="col-md-12">
                        <input type="submit" value="Изменить" class="btn btn-primary">
                     </div>
                  </div>


               </form>
            </div>

            <div class="col-lg-4">
               <div class="p-4 mb-3 bg-white">
                  <h3 class="h5 text-black mb-3">Общая Информация</h3>

                  <p class="mb-0 font-weight-bold" >Id</p>
                  <p class="mb-4">{{$product_final->id}}</p>

                  <p class="mb-0 font-weight-bold">Дата Создания</p>
                  <p class="mb-4">{{$product_final->created_at}}</p>

                  <p class="mb-0 font-weight-bold">Дата Последнего изменения</p>
                  <p class="mb-0">{{$product_final->updated_at}}</p>
                  <br/>
                  <p class="mb-0 font-weight-bold">Дата Публикации</p>
                  <p class="mb-0">{{$product_final->added_at}}</p>

               </div>

               <div class="p-4 mb-3 bg-white">
                  <h3 class="h5 text-black mb-3">Отмена редактирования</h3>
                  <p>Вы можете отменить процесс редактирования, вернувшись на главную страницу.</p>
                  <p><a href="{{route("admin/productions.index")}}" class="btn btn-primary px-4 py-2 text-white">Отмена</a></p>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
               <div class="p-4 mb-3 bg-white">
                  <h3 class="h5 text-black mb-3">Удаление продукта</h3>
                  <form method="post" action="{{route("admin/productions.destroy", $product->id)}}">
                     @method("DELETE")
                     @csrf
                     <div class="row form-group">
                        <div class="col-md-12">
                           <input type="submit" value="Удалить" class="btn btn-primary">
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection