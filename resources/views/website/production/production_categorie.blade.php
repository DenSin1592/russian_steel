@extends('layouts.site')

@section('content')
  <div class="slide-one-item home-slider owl-carousel">

    <div class="site-blocks-cover overlay" style="background-image: url(/images/hero_bg_300.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-5">Арматура <strong>5*0,25</strong></h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url(/images/hero_bg_301.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-5">Балка <strong>Двутавровая</strong></h1>

          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url(/images/hero_bg_302.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-5">Опоры <strong>Мостовые</strong></h1>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="site-navbar-wrap bg-white">
    <div class="site-navbar bg-light">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-2">
            <h2 class="mb-0 site-logo"><a href={{route('site/production')}}>Продукция</a></h2>
          </div>
          <div class="col-10">
            <nav class="site-navigation text-right" role="navigation">
              <div class="container">
                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li><a href='#'>Категория1</a></li>
                  <li><a href='#'>Категория2</a></li>
                  <li><a href='#'>Категория3</a></li>
                  <li><a href='#'>Категория4</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">

    <div class="container">
      {{--<div class="row mb-5 justify-content-center">
        <div class="col-12 text-center">
          <h2 class="font-weight-light text-black display-4">Категория_БД</h2>
        </div>
      </div>--}}
      <div class="row no-gutters align-items-stretch h-100">
        <div class="col-lg-6">
          <div class="row no-gutters align-items-stretch h-100 half-sm">
            <div class="col-md-6 bg-image bg-sm-height" style="background-image: url('/images/img_4_colored.jpg');" data-aos="fade" data-aos-delay="0"></div>
            <div class="col-md-6 bg-light text">
              <div class="p-4">
                <h2 class="h5 mb-3 text-black line-height-sm">Automative Manufacturing</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsum error perspiciatis odit ullam officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium voluptatum vel natus, repellat at optio.</p>
                <p class="mb-0"><a href="#" class=""><small class="text-uppercase font-weight-bold text-black">Read More</small></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row no-gutters align-items-stretch h-100 half-sm">
            <div class="col-md-6 bg-image order-md-2 order-lg-1 bg-sm-height" style="background-image: url('/images/img_1_colored.jpg');" data-aos="fade" data-aos-delay="200"></div>
            <div class="col-md-6 bg-light text order-md-1 order-lg-2">
              <div class="p-4">
                <h2 class="h5 mb-3 text-black line-height-sm">Mechanical Engineering</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsum error perspiciatis odit ullam officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, cupiditate officia recusandae velit sint totam.</p>
                <p class="mb-0"><a href="#" class=""><small class="text-uppercase font-weight-bold text-black">Read More</small></a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="row no-gutters align-items-stretch h-100 half-sm">
            <div class="col-md-6 bg-image order-md-1 order-lg-2 bg-sm-height" style="background-image: url('/images/img_2_colored.jpg');" data-aos="fade" data-aos-delay="300"></div>
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
            <div class="col-md-6 bg-image order-md-2 bg-sm-height" style="background-image: url('/images/img_3_colored.jpg');" data-aos="fade" data-aos-delay="400"></div>
            <div class="col-md-6 bg-light text order-md-1">
              <div class="p-4">
                <h2 class="h5 mb-3 text-black line-height-sm">Industrial Construction</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsum error perspiciatis odit ullam officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam est alias minus, expedita autem.</p>
                <p class="mb-0"><a href="#" class=""><small class="text-uppercase font-weight-bold text-black">Read More</small></a></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>




  <div class="promo py-5 bg-primary" data-aos="fade">
    <div class="container text-center">
      <h2 class="d-block mb-0 font-weight-light text-white"><a href={{route('site/contacts')}} class="text-white d-block">Свяжитесь с нами</a></h2>
    </div>
  </div>

@endsection