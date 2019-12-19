@extends('layouts.admin')

@section('content')

   <div class="site-section">

      <div class="container">
         <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
               <h2 class="font-weight-light text-black display-4">Создание</h2>
            </div>
            <div class="col-md-7 text-center">
               <p>Добавление нового изображения</p>
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
               <form action="{{route('admin/images.store')}}" method="POST"  class="p-5 bg-white" enctype="multipart/form-data">
                  @csrf
                  <div class="row form-group">
                     <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Название</label>
                        <input type="text" id="fullname" value="{{old('title')}}" name="title" class="form-control" >
                     </div>
                  </div>

                  <div class="row form-group">
                     <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="img">Выберите файл</label>
                        <input style="width: 100%"  id="img" type="file" name="image">
                     </div>
                  </div>

                  <div class="row form-group">
                     <div class="col-md-12">
                        <input type="submit" value="Добавить" class="btn btn-primary">
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

               </div>

               <div class="p-4 mb-3 bg-white">
                  <h3 class="h5 text-black mb-3">Отмена добавления</h3>
                  <p>Вы можете отменить процесс создания, вернувшись на главную страницу.</p>
                  <p><a href="{{route("admin/images.index")}}" class="btn btn-primary px-4 py-2 text-white">Отмена</a></p>
               </div>
            </div>
         </div>
      </div>

   </div>

@endsection