    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap bg-white">
        <div class="site-navbar-top">
            <div class="container py-2">
                <div class="row align-items-center">
                    <div class="col-6">
                        {{--<a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>--}}
                    </div>
                    <div class="col-6">
                        <div class="d-flex ml-auto">
                            <a href="#" class="d-flex align-items-center ml-auto mr-4">
                                {{--<span class="icon-phone mr-2"></span>
                                <span class="d-none d-md-inline-block">+7 999 99 99</span>--}}
                            </a>
                            <a href="{{route('site/home')}}" class="d-flex align-items-center">
                                <span class="icon-home2"></span>
                                <span class="d-none d-md-inline-block">Вернуться на сайт</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-navbar bg-warning">
            <div class="container py-1">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h2 class="mb-0 site-logo"><a href={{route('admin/home')}}>Панель Администратора</a></h2>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                                <ul class="site-menu js-clone-nav d-none d-lg-block">
                                    <li><a href={{route('admin/home')}}>Home</a></li>
                                    <li><a href={{route('site/about')}}>Категории</a></li>
                                    <li><a href={{route('site/production')}}>Продукты</a></li>
                                    <li><a href={{route('auth/home')}}>Log In</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>