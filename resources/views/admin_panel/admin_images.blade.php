@extends('layouts.admin')

@section('content')
   @php /** @var App\Models\PriceProductModel $images_paginate */ @endphp
   @php
      $images_paginate_final = $images_paginate;
   @endphp
   <div class="site-section">
      <div class="container">

         <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
               <h2 class="font-weight-light text-black display-4">Изображения</h2>
            </div>
            @if(Session::has('success'))
               <div class="text-success col-md-7 text-center">
                  <p><strong>{{Session::get('success')}}</strong></p>
               </div>
            @else
               <div class="col-md-7 text-center">
                  <p>Пункт управления изображениями</p>
               </div>
            @endif
            <div class="col-md-7 text-right">
               <a href="{{route('admin/images.create')}}"><button type="button" class="btn btn-danger">Добавить</button></a>
            </div>
         </div>

         <table class="table table-hover table-dark">
            <thead>
            <tr>
               <th>#</th>
               <th>Имя</th>
               <th>Id</th>
               <th>Img</th>
               <th>Управление</th>
            </tr>
            </thead>
            <tbody>
            @foreach($images_paginate_final as $image)
               @php
                     $count = 0;
                     $count++;
               @endphp
                  <tr>
                     <th scope="row">{{$count}}</th>
                     <td>{{$image->title}}</td>
                     <td>{{$image->id}}</td>
                     <td><img style="width: 70px; height: 70px;" alt="{{$image->title}}" src="/storage/{{$image->path}}"></td>
                     <td>
                        <form method="post" action="{{route("admin/images.destroy", $image->id)}}">
                              @method("DELETE")
                              @csrf
                              <input type="submit" value="Удалить" class="btn btn-primary">
                           </form>
                     </td>
                  </tr>
            @endforeach
            </tbody>
         </table>
      </div>
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="site-block-27">
               {{$images_paginate_final->render()}}
            </div>
         </div>
      </div>
   </div>
@endsection