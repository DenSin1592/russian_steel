@extends('layouts.admin')

@section('content')
   <div class="site-section">
      <div class="container">

         <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
               <h2 class="font-weight-light text-black display-4">Товары</h2>
            </div>
            @if(Session::has('success'))
               <div class="text-success col-md-7 text-center">
                  <p><strong>{{Session::get('success')}}</strong></p>
               </div>
            @else
               <div class="col-md-7 text-center">
                  <p>Пункт управления изделиями</p>
               </div>
            @endif
            <div class="col-md-7 text-right">
               <a href="{{route("admin/productions.create")}}"><button type="button" class="btn btn-danger">Создать</button></a>
            </div>
         </div>

         <table class="table table-hover table-dark">
            <thead>
            <tr>
               <th>#</th>
               <th>Имя</th>
               <th>Id</th>
               <th>Категория</th>
               <th>Статус</th>
               <th>Дата публикации</th>
               <th>Управление</th>
            </tr>
            </thead>
            <tbody>
            @php /** @var App\Models\PriceProductModel $products_paginate */ @endphp
            @foreach($products_paginate as $product)
               @php
                  static $count = 0;
                   $count ++;
               @endphp
               @if($product->is_added)
               <tr>
                  <th scope="row">{{$count}}</th>
                  <td>{{$product->title}}</td>
                  <td>{{$product->id}}</td>
                  <td>{{$product->category->title}}</td>
                  <td>Опубликована</td>
                  <td>{{$product->created_at}}</td>
                  <td>
                     <a href="{{route("admin/productions.edit", $product->id)}}"><button type="button" class="btn btn-warning">Изменить</button></a>
                     <a href="{{route('admin/productions.destroy', $product->id)}}"><button type="button" class="btn btn-danger">Удалить</button></a>
                  </td>
               </tr>
               @else
                  <tr class="bg-secondary">
                     <th scope="row">{{$count}}</th>
                     <td>{{$product->title}}</td>
                     <td>{{$product->id}}</td>
                     <td>{{$product->category->title}}</td>
                     <td class="text-danger">Не Опубликована</td>
                     <td> </td>
                     <td>
                        <a href="#"><button type="button" class="btn btn-warning">Изменить</button></a>
                        <a href="#"><button type="button" class="btn btn-danger">Удалить</button></a>
                     </td>
                  </tr>
               @endif
            @endforeach
            </tbody>
         </table>
      </div>
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="site-block-27">
                <?php echo $products_paginate->render(); ?>
            </div>
         </div>
      </div>
   </div>
@endsection