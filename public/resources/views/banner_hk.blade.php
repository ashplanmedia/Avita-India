<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <a href="/campus">
                            @if( App::isLocale('en') )
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/campus_banner.png')"></div>
                            @else
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/campus_banner.png')"></div>
                            @endif
                            <div class="banner-bg hidden-md-up"
                                 style="background-image: url('/images/banner/banner_mob.png')"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <a href="/techideate">
                            @if( App::isLocale('en') )
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/smu_web_banner.jpg')"></div>
                            @else
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/smu_web_banner.jpg')"></div>
                            @endif
                            <div class="banner-bg hidden-md-up"
                                 style="background-image: url('/images/banner/smu_mob_banner.jpg')"></div>
                        </a>
                    </div>
                </div>
            </div>
            
               <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <a href="/hindu">
                            @if( App::isLocale('en') )
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/Hindu_web.jpg')"></div>
                            @else
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/Hindu_web.jpg')"></div>
                            @endif
                            <div class="banner-bg hidden-md-up"
                                 style="background-image: url('/images/banner/Hindu_mob.jpg')"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <a href="#">
                            @if( App::isLocale('en') )
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/magus_web.jpg')"></div>
                            @else
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/magus_web.jpg')"></div>
                            @endif
                            <div class="banner-bg hidden-md-up"
                                 style="background-image: url('/images/banner/magus_mob.jpg')"></div>
                        </a>
                    </div>
                </div>
            </div>


            <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <a href="https://paytmmall.com/shop/search?q=avita&from=organic&child_site_id=6&site_id=2">
                            @if( App::isLocale('en') )
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/web_banner.png')"></div>
                            @else
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/web_banner.png')"></div>
                            @endif
                            <div class="banner-bg hidden-md-up"
                                 style="background-image: url('/images/banner/mob_banner.png')"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="responsive-block">
                    <div class="banner-block responsive-item">
                        <a href="https://paytmmall.com/shop/search?q=avita&from=organic&child_site_id=6&site_id=2">
                            @if( App::isLocale('en') )
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/website_banner.png')"></div>
                            @else
                                <div class="banner-bg hidden-sm-down"
                                     style="background-image: url('/images/banner/website_banner.png')"></div>
                            @endif
                            <div class="banner-bg hidden-md-up"
                                 style="background-image: url('/images/banner/mobile_banner.png')"></div>
                        </a>
                    </div>
                </div>
            </div>


            <ol class="carousel-indicators">
                <li data-target="#home_banner" data-slide-to="0" class="active"></li>
                <li data-target="#home_banner" data-slide-to="1"></li>
                <li data-target="#home_banner" data-slide-to="2"></li>
                <li data-target="#home_banner" data-slide-to="3"></li>
                <li data-target="#home_banner" data-slide-to="4"></li>
                <li data-target="#home_banner" data-slide-to="5"></li>
            </ol>
        </div>
</section>

@section('css')
    <style type="text/css">
        #home_banner video{
            position: absolute;
            -webkit-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
        }
    </style>
@endsection

