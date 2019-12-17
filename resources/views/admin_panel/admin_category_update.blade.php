@extends('layouts.admin')

@section('content')
   @php
      /** @var \App\Models\PriceCategoryModel $category*/
      /** @var \Illuminate\Database\Eloquent\Collection $comboBox */
   @endphp
   @php
      $comboBox_final = $comboBox;
      $category_final = $category;
   @endphp
   <div class="site-section">

      <div class="container">

         <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
               <h2 class="font-weight-light text-black display-4">Редактирование</h2>
            </div>
            <div class="col-md-7 text-center">
               <p>Редактирование категории</p>
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

               <form action="{{route('admin/categories.update', $category_final->id)}}" method="post" class="p-5 bg-white">
               @method('PATCH')
                  @csrf
                  <div class="row form-group">
                     <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Имя</label>
                        <input type="text" name="title" id="fullname" class="form-control" placeholder="Имя категории" value="{{old('title',$category_final->title)}}">
                     </div>
                  </div>

                  <div class="row">
                     <div class="col">
                        <label class="mr-sm-2" for="SelectParentTitle">Родитель</label>
                        <select class="custom-select mr-sm-2" name="parent_id" id="SelectParentTitle">
                           @foreach($comboBox_final as $item)
                              <option value="{{$item->id}}">{{$item->title}}</option>
                           @endforeach
                        </select>
                     </div>
                     {{--<div class="col">
                        <label class="mr-sm-2" for="SelectImageTitle">Изображение</label>
                        <select class="custom-select mr-sm-2" id="SelectImageTitle">
                           <option selected>Выбор</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>--}}
                  </div>

                  {{--<div class="row form-group">
                     <div class="col-md-12">
                        <label class="font-weight-bold" for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Email Address">
                     </div>
                  </div>--}}

                  {{--<div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                     <label class="form-check-label" for="inlineRadio1">Опубликованно</label>
                  </div>
                  <br/>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                     <label class="form-check-label" for="inlineRadio2">Неопубликованно</label>
                  </div>--}}

                  <div class="row form-group">
                     <div class="col-md-12">
                        <label class="font-weight-bold" for="message">Описание</label>
                        <textarea name="description" name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us">{{old('description',$category_final->description)}}</textarea>
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

                   <p class="mb-0 font-weight-bold">Id</p>
                   <p class="mb-4">{{$category_final->id}}</p>

                  <p class="mb-0 font-weight-bold">Дата создания</p>
                  <p class="mb-4">{{$category_final->created_at}}</p>

                  <p class="mb-0 font-weight-bold">Дата последнего изменения</p>
                  <p class="mb-4">{{$category_final->updated_at}}</p>

                  <p class="mb-0 font-weight-bold">...</p>
                  <p class="mb-0">...</p>

               </div>

               <div class="p-4 mb-3 bg-white">
                  <h3 class="h5 text-black mb-3">Отмена редактирования</h3>
                  <p>Вы можете отменить процесс редактирования, вернувшись на главную страницу.</p>
                  <p><a href="{{route('admin/categories.index')}}" class="btn btn-primary px-4 py-2 text-white">Отмена</a></p>
               </div>
            </div>
         </div>
      </div>

   </div>
@endsection