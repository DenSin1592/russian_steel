@extends('layouts.site')

@section('content')
    @php
        /** @var \App\Models\PriceCategoryModel $products */
        /**  @var (string || \App\Models\PriceCategoryModel) $header*/
    @endphp
  @php
    $products_final = $products;
    $header_final = $header;
  @endphp
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
                  {{--<li><a href='#'>Категория1</a></li>
                  <li><a href='#'>Категория2</a></li>
                  <li><a href='#'>Категория3</a></li>
                  <li><a href='#'>Категория4</a></li>--}}
                  @foreach($categories as $category)
                    <li><a href='{{route('site/production')."/".$category->id}}'>{{$category->title}}</a></li>
                  @endforeach
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
      <div class="row mb-5 justify-content-center">
        <div class="col-12 text-center">
          <h2 class="font-weight-light text-black display-4">{{$header_final}}</h2>
        </div>
      </div>
      <div class="row no-gutters align-items-stretch h-100">
        @foreach($products_final as $product_final)
          <?php
              static $count = 0;
              $count++;
              if($count>4) $count=1;
          ?>
          @if($count<3)
          <div class="col-lg-6">
            <div class="row no-gutters align-items-stretch h-100 half-sm">
              <div class="col-md-6 bg-image bg-sm-height" style="background-image: url('/images/img_4_colored.jpg');" data-aos="fade" data-aos-delay="0"></div>
              <div class="col-md-6 bg-light text">
                <div class="p-4">
                <h2 class="h5 mb-3 text-black line-height-sm">{{$product_final->title}}</h2>
                  <p>{{$product_final->excerpt}}...</p>
                  <p class="mb-0"><a  class=""><small class="text-uppercase font-weight-bold text-black">{{$product_final->price}}р.</small></a></p>
                </div>
              </div>
            </div>
          </div>
          @else
            <div class="col-lg-6">
              <div class="row no-gutters align-items-stretch h-100 half-sm">
                <div class="col-md-6 bg-image order-md-1 order-lg-2 bg-sm-height" style="background-image: url('/images/img_2_colored.jpg');" data-aos="fade" data-aos-delay="300"></div>
                <div class="col-md-6 bg-light text order-md-2 order-lg-1">
                  <div class="p-4">
                    <h2 class="h5 mb-3 text-black line-height-sm">{{$product_final->title}}</h2>
                    <p>{{$product_final->excerpt}}...</p>
                    <p class="mb-0"><a  class=""><small class="text-uppercase font-weight-bold text-black">{{$product_final->price}}р.</small></a></p>
                  </div>
                </div>
              </div>
            </div>
          @endif
        @endforeach
        </div>
    </div>
  </div>



  <div class="row">
    <div class="col-md-12 text-center">
      <div class="site-block-27">
          <?php echo $products_final->render(); ?>
      </div>
    </div>
  </div>



@endsection