@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="site-section">

    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
                <h2 class="font-weight-light text-black display-4">Вы успешно авторизованы</h2>
            </div>
            <div class="col-md-7 text-center">
                <p>Пожалуйста, выберите один из пунктов меню... </p>
            </div>
        </div>
        <div class="row no-gutters align-items-stretch h-100">
            <div class="col-lg-6">
                <div class="row no-gutters align-items-stretch h-100 half-sm">
                    <div class="col-md-6 bg-image bg-sm-height" style="background-image: url('/images/img_2_colored.jpg');" data-aos="fade" data-aos-delay="0"></div>
                    <div class="col-md-6 bg-light text">
                        <div class="p-4">
                            <h2 class="h5 mb-3 text-black line-height-sm">Главная Страница Сайта </h2>
                            <p>Стандартная форма сайта, которая также доступна и не авторизованным пользователям.</p>
                            <p class="mb-0"><a href="{{route('site/home')}}" class=""><small class="text-uppercase font-weight-bold text-black">Перейти</small></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row no-gutters align-items-stretch h-100 half-sm">
                    <div class="col-md-6 bg-image order-md-2 order-lg-1 bg-sm-height" style="background-image: url('/images/img_4_colored.jpg');" data-aos="fade" data-aos-delay="200"></div>
                    <div class="col-md-6 bg-light text order-md-1 order-lg-2">
                        <div class="p-4">
                            <h2 class="h5 mb-3 text-black line-height-sm">Панель Администратора</h2>
                            <p>В данном разделе осуществляется добавление, редактирование или удаление данных из Базы Данных. Доступно только авторизованным пользователям.</p>
                            <p class="mb-0"><a href={{route('admin/home')}} class=""><small class="text-uppercase font-weight-bold text-black">Перейти</small></a></p>
                        </div>
                    </div>
                </div>
            </div>

            {{--<div class="col-lg-6">
                <div class="row no-gutters align-items-stretch h-100 half-sm">
                    <div class="col-md-6 bg-image order-md-1 order-lg-2 bg-sm-height" style="background-image: url('images/img_2_colored.jpg');" data-aos="fade" data-aos-delay="300"></div>
                    <div class="col-md-6 bg-light text order-md-2 order-lg-1">
                        <div class="p-4">
                            <h2 class="h5 mb-3 text-black line-height-sm">Oil &amp; Gas Energy</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsum error perspiciatis odit ullam officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias fugiat facilis quasi ratione ducimus ipsam!</p>
                            <p class="mb-0"><a href="#" class=""><small class="text-uppercase font-weight-bold text-black">Read More</small></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row no-gutters align-items-stretch h-100 half-sm">
                    <div class="col-md-6 bg-image order-md-2 bg-sm-height" style="background-image: url('images/img_3_colored.jpg');" data-aos="fade" data-aos-delay="400"></div>
                    <div class="col-md-6 bg-light text order-md-1">
                        <div class="p-4">
                            <h2 class="h5 mb-3 text-black line-height-sm">Industrial Construction</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsum error perspiciatis odit ullam officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam est alias minus, expedita autem.</p>
                            <p class="mb-0"><a href="#" class=""><small class="text-uppercase font-weight-bold text-black">Read More</small></a></p>
                        </div>
                    </div>
                </div>
            </div>--}}

        </div>
    </div>

</div>
@endsection
