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
                        <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                    </div>
                    <div class="col-6">
                        <div class="d-flex ml-auto">
                            <a href="#" class="d-flex align-items-center ml-auto mr-4">
                                <span class="icon-phone mr-2"></span>
                                <span class="d-none d-md-inline-block">+7 999 99 99</span>
                            </a>
                            <a href="#" class="d-flex align-items-center">
                                <span class="icon-envelope mr-2"></span>
                                <span class="d-none d-md-inline-block">russiansteelrussia@example.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-navbar bg-light">
            <div class="container py-1">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h2 class="mb-0 site-logo"><a href={{route('site/home')}}>Русская Сталь</a></h2>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                                <ul class="site-menu js-clone-nav d-none d-lg-block">
                                    {{--<li class="has-children active">
                                      <a href="index.html">Home</a>
                                      <ul class="dropdown arrow-top">
                                        <li><a href="#">Menu One</a></li>
                                        <li><a href="#">Menu Two</a></li>
                                        <li><a href="#">Menu Three</a></li>
                                        <li class="has-children">
                                          <a href="#">Sub Menu</a>
                                          <ul class="dropdown">
                                            <li><a href="#">Menu One</a></li>
                                            <li><a href="#">Menu Two</a></li>
                                            <li><a href="#">Menu Three</a></li>
                                          </ul>
                                        </li>
                                      </ul>
                                    </li>--}}

                                    {{--<li class="has-children">
                                      <a href="about.html">Company</a>
                                      <ul class="dropdown arrow-top">
                                        <li><a href="#">Menu One</a></li>
                                        <li><a href="#">Menu Two</a></li>
                                        <li><a href="#">Menu Three</a></li>
                                      </ul>
                                    </li>--}}
                                    <li><a href={{route('site/home')}}>Home</a></li>
                                    {{--<li><a href={{route('site/news')}}>News</a></li>--}}
                                    <li><a href={{route('site/about')}}>Services</a></li>
                                    <li><a href={{route('site/production')}}>Production</a></li>
                                    {{--<li class="has-children">
                                        <a href={{route('site/production')}}>Production</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="/website/production/production_categorie.blade.php">Категория1</a></li>
                                            <li><a href="#">Категория2</a></li>
                                            <li><a href="#">Категория3</a></li>
                                        </ul>
                                    </li>--}}


                                    <li><a href={{route('site/contacts')}}>Contact</a></li>


                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>