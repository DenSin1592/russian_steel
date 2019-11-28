@extends('layouts.site')
  
  @section('content')
    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(/images/hero_bg_15.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-5"> Стальные Конструкции <br/><strong>№ 1</strong></h1>
              <p>
                <a href={{route('site/contacts')}} class="btn btn-primary py-3 px-5 rounded-0" >Связаться с нами</a>
                <a href="https://yandex.ru/maps/?l=sat&ll=39.804058%2C54.671031&mode=routes&rtext=~54.671671%2C39.803264&rtt=auto&ruri=~&source=wizgeo&utm_medium=maps-desktop&utm_source=serp&z=17
" class="btn btn-white btn-outline-white py-3 px-5 rounded-0">На карте</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(/images/hero_bg_14.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-5">Профессионалы Своего <br/><strong>Дела</strong></h1>
              <p>
                <a href={{route('site/contacts')}} class="btn btn-primary py-3 px-5 rounded-0">Связаться с нами</a>
                <a href="https://yandex.ru/maps/?l=sat&ll=39.804058%2C54.671031&mode=routes&rtext=~54.671671%2C39.803264&rtt=auto&ruri=~&source=wizgeo&utm_medium=maps-desktop&utm_source=serp&z=17
" class="btn btn-white btn-outline-white py-3 px-5 rounded-0">На карте</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(/images/hero_bg_10.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-5">Самые Сложные <br/><strong>Проекты</strong></h1>
              <p>
                <a href={{route('site/contacts')}} class="btn btn-primary py-3 px-5 rounded-0">Связаться с нами</a>
                <a href="https://yandex.ru/maps/?l=sat&ll=39.804058%2C54.671031&mode=routes&rtext=~54.671671%2C39.803264&rtt=auto&ruri=~&source=wizgeo&utm_medium=maps-desktop&utm_source=serp&z=17
" class="btn btn-white btn-outline-white py-3 px-5 rounded-0">На карте</a>
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="site-section border-bottom bg-light py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5"><h2 class="text-black h6 font-weight-bold text-uppercase" data-aos="fade">Пусть числа говорят за нас</h2></div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="0">
            <div class="d-flex align-items-center">
              <div class="mr-3"><span class="flaticon-worker display-3 text-primary"></span></div>
              <div class="">
                <h2 class="text-black">100+</h2> <strong class="text-black">Высококвалифицированных</strong> Инженеров
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="d-flex align-items-center">
              <div class="mr-3"><span class="flaticon-planet-earth display-3 text-primary"></span></div>
              <div class="">
                <h2 class="text-black">100+</h2> <strong class="text-black">Проектов</strong> в Европе и США
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-0 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="d-flex align-items-center">
              <div class="mr-3"><span class="flaticon-excavator display-3 text-primary"></span></div>
              <div class="">
                <h2 class="text-black">1000+</h2> <strong class="text-black">Завершенных</strong> Проектов
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">

      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-12 text-center">
            <h2 class="font-weight-light text-black display-4">Наша Специализация</h2>
          </div>
          <div class="col-md-7 text-center">
            <p>Мы специализируемся на работе с металлами любой сложности. Так же мы производим изделия высшего качества.</p>
          </div>
        </div>
        <div class="row no-gutters align-items-stretch h-100">
          <div class="col-lg-6">
            <div class="row no-gutters align-items-stretch h-100 half-sm">
              <div class="col-md-6 bg-image bg-sm-height" style="background-image: url('/images/img_4_colored.jpg');" data-aos="fade" data-aos-delay="0"></div>
              <div class="col-md-6 bg-light text">
                <div class="p-4">
                  <h2 class="h5 mb-3 text-black line-height-sm">Автоматизированное Производство</h2>
                  <p>В основе организации производственного процесса лежит рациональное сочетание в пространстве и во времени всех основных, вспомогательных и обслуживающих процессов.</p>
                  {{--<p class="mb-0"><a href="#" class=""><small class="text-uppercase font-weight-bold text-black">Read More</small></a></p>--}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row no-gutters align-items-stretch h-100 half-sm">
              <div class="col-md-6 bg-image order-md-2 order-lg-1 bg-sm-height" style="background-image: url('/images/img_10_colored.jpg');" data-aos="fade" data-aos-delay="200"></div>
              <div class="col-md-6 bg-light text order-md-1 order-lg-2">
                <div class="p-4">
                  <h2 class="h5 mb-3 text-black line-height-sm">Качество Материалов</h2>
                  <p>Используя дешёвую сталь невозможно соответствовать международным стандартам. Мы работаем только с металлами самого высшего качества из США и стран Европы.</p>
                  {{--<p class="mb-0"><a href="#" class=""><small class="text-uppercase font-weight-bold text-black">Read More</small></a></p>--}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row no-gutters align-items-stretch h-100 half-sm">
              <div class="col-md-6 bg-image order-md-1 order-lg-2 bg-sm-height" style="background-image: url('/images/img_2_colored.jpg');" data-aos="fade" data-aos-delay="300"></div>
              <div class="col-md-6 bg-light text order-md-2 order-lg-1">
                <div class="p-4">
                  <h2 class="h5 mb-3 text-black line-height-sm">Экология</h2>
                  <p>Мы используем новейшие мировые тренды, когда дело касается защиты окружающей среды. Наши цеха сертифицированы согласно Oeko-Tex Standard 100.</p>
                  {{--<p class="mb-0"><a href="#" class=""><small class="text-uppercase font-weight-bold text-black">Read More</small></a></p>--}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row no-gutters align-items-stretch h-100 half-sm">
              <div class="col-md-6 bg-image order-md-2 bg-sm-height" style="background-image: url('/images/img_3_colored.jpg');" data-aos="fade" data-aos-delay="400"></div>
              <div class="col-md-6 bg-light text order-md-1">
                <div class="p-4">
                  <h2 class="h5 mb-3 text-black line-height-sm">Персонал</h2>
                  <p>Все наши инженеры проходят аттестацию согласно Европейским стандартам EN/ISO</p>
                  {{--<p class="mb-0"><a href="#" class=""><small class="text-uppercase font-weight-bold text-black">Read More</small></a></p>--}}
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 bg-image bg-sm-height mb-5 mb-md-0 order-md-2" style="background-image: url('/images/img_11_colored.jpg');" data-aos="fade-up"></div>
          <div class="col-md-6 pr-md-5 order-md-1">
            <h2 class="display-3 line-height-xs text-black mb-4">Всегда открыты для <strong>Вас</strong></h2>
            <p class="mb-4">Мы всегда открыты для клиентов. Посетите нас лично и убедитесь в качестве предоставляемых нами услуг. Вполне возможно, что в одном лице Вы увидете несколько, а именно:</p>
            <ul class="site-block-check">
              <li>Производитель</li>
              <li>Поставщик</li>
              <li>Подрядчик</li>
            </ul>
            <p><a href="#adress" class="btn btn-outline-primary btn-sm rounded-0 p-2 px-4">Узнать Адрес</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">

        <div class="block-13 nonloop-block-13 owl-carousel" data-aos="fade">

          <div class="p-4">
            <div class="block-47 d-flex">
              <div class="block-47-image d-none d-sm-block">
                <img src="/images/person_1.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <blockquote class="block-47-quote">
                <p>&ldquo;Настоящие профессионалы своего дела!&rdquo;</p>
                <cite class="block-47-quote-author">&mdash; Ирина Мойвер, Генеральный Директор <a href="https://leroymerlin.ru/">ООО "Лерой Мерлен Восток"</a></cite>
              </blockquote>
            </div>
          </div>

          <div class="p-4">
            <div class="block-47 d-flex">
              <div class="block-47-image d-none d-sm-block">
                <img src="/images/person_2.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <blockquote class="block-47-quote">
                <p>&ldquo;The best steel in the industry!&rdquo;</p>
                <cite class="block-47-quote-author">&mdash; Mary Lou, CEO <a href="https://www.pbs.cz">PBS Velká Bíteš, a. s.</a></cite>
              </blockquote>
            </div>
          </div>

          <div class="p-4">
            <div class="block-47 d-flex">
              <div class="block-47-image d-none d-sm-block">
                <img src="/images/person_3.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <blockquote class="block-47-quote">
                <p>&ldquo;Быстро. Качественно. Надежно.&rdquo;</p>
                <cite class="block-47-quote-author">&mdash; Игорь Симонов, Исполнительный Директор <a href="#">ООО "Стальные конструкции Ростов"</a></cite>
              </blockquote>
            </div>
          </div>

          <div class="p-4">
            <div class="block-47 d-flex">
              <div class="block-47-image d-none d-sm-block">
                <img src="/images/person_4.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <blockquote class="block-47-quote">
                <p>&ldquo;Материал качественный. Сопровождают от начала сотрудничества и до конца. Рекомендую!&rdquo;</p>
                <cite class="block-47-quote-author">&mdash; Денис Давыдов, <a href="#">ИП Давыдов Д. М.</a></cite>
              </blockquote>
            </div>
          </div>


        </div>


      </div>
    </div>

    {{--<div class="site-block-half d-block d-lg-flex site-block-video" data-aos="fade">
      <div class="image bg-image order-2" style="background-image: url(/images/hero_bg_1.jpg); ">
        <a href="https://youtu.be/ZuJYwoPKxjk" class="play-button popup-vimeo"><span class="icon-play"></span></a>
      </div>
      <div class="text order-1">
        <h2 class="site-heading text-black mb-3">See Our <strong>Video</strong></h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id cum vel, eius nulla inventore aperiam excepturi molestias incidunt, culpa alias repudiandae, a nobis libero vitae repellendus temporibus vero sit natus.</p>
        <p>Dolores perferendis ipsam animi fuga, dolor pariatur aliquam esse. Modi maiores minus velit iste enim sunt iusto, dolore totam consequuntur incidunt illo voluptates vero quaerat excepturi. Iusto dolor, cum et.</p>
      </div>

    </div>--}}


    <div class="promo py-5 bg-primary" data-aos="fade">
      <div class="container text-center">
        <h2 class="d-block mb-0 font-weight-light text-white"><a href={{route('site/contacts')}} class="text-white d-block">Свяжитесь с нами</a></h2>
      </div>
    </div>

  @endsection