@extends('layouts.admin')

@section('content')
   @php /** @var \App\Models\PriceCategoryModel $categories_paginator*/ @endphp
   @php
      $categories_paginator_final = $categories_paginator;
   @endphp

   <div class="site-section">
      <div class="container">

         <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
               <h2 class="font-weight-light text-black display-4">Категории</h2>
            </div>
            @if(Session::has('success'))
               <div class="text-success col-md-7 text-center">
                  <p><strong>{{Session::get('success')}}</strong></p>
               </div>
            @else
            <div class="col-md-7 text-center">
               <p>Пункт управления категориями</p>
            </div>
            @endif
            <div class="col-md-7 text-right">
               <a href="{{route('admin/categories.create')}}"><button type="button" class="btn btn-danger">Создать</button></a>
            </div>

         </div>

         <table class="table table-hover table-dark">
            <thead>
            <tr>
               <th>#</th>
               <th>Id</th>
               <th>Имя</th>
               <th>Родитель</th>
               <th>Управление</th>

            </tr>
            </thead>
            <tbody>

            @foreach($categories_paginator_final as $category)
               <tr>
                  <th scope="row">{{($category->id)-1}}</th>
                  <td>{{$category->id}}</td>
                  <td>{{$category->title}}</td>
                  <td>{{$category->parent->title}}</td>

                  <td>
                     <a href="{{route('admin/categories.edit', $category->id)}}"><button type="button" class="btn btn-warning">Изменить</button></a>
                  </td>
               </tr>
            @endforeach

            </tbody>
         </table>
      </div>
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="site-block-27">
                <?php echo $categories_paginator_final->render(); ?>
            </div>
         </div>
      </div>
   </div>
@endsection