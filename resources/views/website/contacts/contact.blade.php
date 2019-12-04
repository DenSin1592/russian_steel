@extends('layouts.site')

@section('content')

    <div class="site-blocks-cover inner-page overlay" style="background-image: url(/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h1 class="mb-5">Свяжитесь <strong>С Нами</strong></h1>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">

            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A39b5a2c283b219956873b4b017971599fa986dbb1295ad6da9a6f5a436647760&amp;width=645&amp;height=461&amp;lang=ru_RU&amp;scroll=true"></script>
          
            {{--<form action="#" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address">
                </div>
              </div>



              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label>
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send" class="btn btn-primary">
                </div>
              </div>


            </form>--}}
          </div>

          <div class="col-lg-4" id="contacts/adress">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Контакты</h3>
              <p class="mb-0 font-weight-bold">Адрес</p>
              <p class="mb-4">РФ, Рязанская обл., пос. Шумашь. ул Центральная, д. 111</p>

              <p class="mb-0 font-weight-bold">Телефон</p>
              <p class="mb-4"><a href="#">+7 999 999 9999</a></p>

              <p class="mb-0 font-weight-bold">Email</p>
              <p class="mb-0"><a href="#">russiansteelrussia@example.com </a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">ООО "Руская Сталь"</h3>
              <p>Мы стремимся к качеству, к удовлетворинию любых потребностей наших Клиентов. У нас богатый опыт в ведении бизнеса и, конкретно, в металлургии.</p>
              <p><a href={{route('site/home')}} class="btn btn-primary px-4 py-2 text-white">Узнать больше</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="promo py-5 bg-primary" data-aos="fade">
      <div class="container text-center">
        <h2 class="d-block mb-0 font-weight-light text-white"><a href="#contacts/adress" class="text-white d-block">Посетите наш Офис</a></h2>
      </div>
    </div>

    @endsection