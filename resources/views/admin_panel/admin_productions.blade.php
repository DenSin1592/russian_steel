@extends('layouts.admin')

@section('content')
   @php /** @var App\Models\PriceProductModel $products_paginate */ @endphp
   @php
      $products_paginate_final = $products_paginate;
   @endphp
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
            @foreach($products_paginate_final as $product)
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
                  <td>{{$product->added_at}}</td>
                  <td>
                     <a href="{{route("admin/productions.edit", $product->id)}}"><button type="button" class="btn btn-warning">Изменить</button></a>
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
                        <a href="{{route("admin/productions.edit", $product->id)}}"><button type="button" class="btn btn-warning">Изменить</button></a>
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
                <?php echo $products_paginate_final->render(); ?>
            </div>
         </div>
      </div>
   </div>
@endsection