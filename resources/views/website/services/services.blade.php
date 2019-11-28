@extends('layouts.site')

@section('content')

  <div class="slide-one-item home-slider owl-carousel">

    <div class="site-blocks-cover overlay" style="background-image: url(/images/hero_bg_11.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-5">Профессиональные <br/><strong>Работы</strong></h1>

          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url(/images/hero_bg_12.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-5">Автоматированное <br/><strong>Производство</strong></h1>

          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url(/images/hero_bg_118.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-5">Ручной <br/><strong>Труд</strong></h1>

          </div>
        </div>
      </div>
    </div>

  </div>

    {{--<div class="site-blocks-cover inner-page" style="background-image: url(/images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-7">
            <span class="sub-text">Services That You Satisfied</span>
            <h1>Our <strong>Services</strong></h1>
          </div>
        </div>
      </div>
    </div>  --}}

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h2 class="display-4 text-black mb-5">Наши <strong>Преимущества</strong></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="site-block-feature-2 d-flex rounded mb-5">
              <div class="mr-3">
                <span class="icon flaticon-agreement font-weight-light "></span>
              </div>
              <div class="text">
                <h3>Доверие</h3>
                <p>Мы доверяем нашим Клиентам. Вы можете сами выбрать форму оплаты. Также мы готовы предоставить
                беспроцентную рассрочку на срок до 60 дней.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="site-block-feature-2 d-flex rounded mb-5">
              <div class="mr-3">
                <span class="icon flaticon-gears font-weight-light "></span>
              </div>
              <div class="text">
                <h3>Технологии</h3>
                <p>Мы стараемся идти в ногу со временем, и используем самые современные методы решение самых различных задач.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="site-block-feature-2 d-flex rounded mb-5">
              <div class="mr-3">
                <span class="icon flaticon-excavator font-weight-light "></span>
              </div>
              <div class="text">
                <h3>Техника</h3>
                <p>В наличии 50+ единиц самой разнообразной техники.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="site-block-feature-2 d-flex rounded mb-5">
              <div class="mr-3">
                <span class="icon flaticon-industrial-robot font-weight-light "></span>
              </div>
              <div class="text">
                <h3>Оборудование</h3>
                <p>Мы автоматизировали максимум своих рабочих процессов.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="site-block-feature-2 d-flex rounded mb-5 ng">
              <div class="mr-3">
                <span class="icon flaticon-industry font-weight-light "></span>
              </div>
              <div class="text">
                <h3>Производство</h3>
                <p>Два высокотехнологичных цеха - <strong>"Европа 1"</strong> и <strong>"Россия Центр"</strong>.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="site-block-feature-2 d-flex rounded mb-5">
              <div class="mr-3">
                <span class="icon flaticon-worker font-weight-light "></span>
              </div>
              <div class="text">
                <h3>Персонал</h3>
                <p>100+ единиц квалифицированного персонала.</p>
              </div>
            </div>
          </div>

          

        </div>
      </div>
    </div>


    <div class="site-section site-block-3 bg-light">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0 bg-image bg-md-height" style="background-image: url('/images/img_12_colored.jpg')"></div>
          <div class="col-lg-6 h-100">
            <div class="row row-items">
              <div class="col-md-6 mb-5 mb-md-0">
                {{--<a href="#" class="d-flex text-center feature active p-4 mb-4 bg-white">--}}
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-agreement display-3"></span>
                    </span>
                    <h3><strong class="d-block">500+</strong> Заключенных Договоров</h3>
                  </span>
                {{--</a>--}}
              </div>
              <div class="col-md-6 mb-5 mb-md-0">
               {{-- <a href="#" class="d-flex text-center feature p-4 mb-4 bg-white">--}}
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-worker display-3"></span>
                    </span>
                    <h3><strong class="d-block">100+</strong> Инженеров</h3>
                  </span>
               {{-- </a>--}}
              </div>
            </div>
            <div class="row row-items last">
              <div class="col-md-6 mb-5 mb-md-0">
               {{-- <a href="#" class="d-flex text-center feature p-4 mb-4 bg-white">--}}
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-planet-earth display-3"></span>
                    </span>
                    <h3><strong class="d-block">70+</strong> Проектов в Европе </h3>
                  </span>
               {{-- </a>--}}
              </div>
              <div class="col-md-6 mb-5 mb-md-0">
               {{-- <a href="#" class="d-flex text-center active feature p-4 mb-4 bg-white">--}}
                  <span class="align-self-center w-100">
                    <span class="d-block mb-3">
                      <span class="flaticon-excavator display-3"></span>
                    </span>
                    <h3><strong class="d-block">1000+</strong> Завершенных Проектов</h3>
                  </span>
               {{-- </a>--}}
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