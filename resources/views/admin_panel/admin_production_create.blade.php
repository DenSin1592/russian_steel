@extends('layouts.admin')

@section('content')
   <div class="site-section">

      <div class="container">
         <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
               <h2 class="font-weight-light text-black display-4">Создание</h2>
            </div>
            <div class="col-md-7 text-center">
               <p>Создание новой единицы товара</p>
            </div>
         </div>

      </div>

      <div class="container">
         <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
               <form action="#" class="p-5 bg-white">

                  <div class="row form-group">
                     <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Имя</label>
                        <input type="text" id="fullname" class="form-control" >
                     </div>
                  </div>


                  <div class="row">
                     <div class="col">
                        <label class="mr-sm-2" for="SelectParentTitle">Категория</label>
                        <select class="custom-select mr-sm-2" id="SelectParentTitle">
                           <option selected>Выбор</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="col">
                        <label class="mr-sm-2" for="SelectImageTitle">Изображение</label>
                        <select class="custom-select mr-sm-2" id="SelectImageTitle">
                           <option selected>Выбор</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                  </div>
                  {{--<div class="row form-group">
                     <div class="col-md-12">
                        <label class="font-weight-bold" for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Email Address">
                     </div>
                  </div>--}}
                  <br/>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                     <label class="form-check-label" for="inlineRadio1">Опубликованно</label>
                  </div>
                  <br/>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                     <label class="form-check-label" for="inlineRadio2">Неопубликованно</label>
                  </div>
                  <br/>

                  <div class="row form-group">
                     <div class="col-sm-3 my-1">
                        <label class="font-weight-bold" for="price">Цена</label>
                        <input type="text" id="price" class="form-control" placeholder="Price">
                     </div>
                  </div>

                  <div class="row form-group">
                     <div class="col-md-12">
                        <label class="font-weight-bold" for="message">Описание</label>
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
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