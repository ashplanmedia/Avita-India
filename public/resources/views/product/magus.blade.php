@extends('layouts.app')

@section('title')
    @lang('title.magus')
@stop


@section('content')
    <main class="top-nav-padding">

        @include('partials.product-navbar')

        <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/banner/magus_banner.jpg')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/banner/magus_banner_mob.jpg')"></div>
                    <div class="banner-info">
                        <div class="btn-group mt-3">
                            {{--<img class="mx-auto" src="/images/liber/brand.png">--}}
                        </div>
                        <div class="an-scroll-wrap">
                            <div class="an-scroll">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="product-liber-port ls-0">
            <div class="banner-block">
                <div class="banner-bg"> </div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/sc2_img1.png">
                    <!--<img class="bc-computer-image bc-computer-2" src="/images/liber/sc7_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/sc7_fimg3.png">-->
                </div>
                <div class="container">
                    <div class="banner-info mx-auto mr-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" src="/images/sc2_img1.png">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">2-in-1 detachable design</div>

                        <div class="banner-para ls-0">
                            <span class="d-lg-block">MAGUS is both a recreational gadget and the best partner in the office. The 2-in-1 comes vivid color line-up with a 12.2” 1920x1200 IPS touch screen that offers ultra-wide viewing angle.  With a keyboard cover, the MAGUS 12.2&quot; 2-in-1 transforms from a tablet into a laptop by simply opening the built-in stand, enabling users to stay productive with ease anytime, anywhere.</span><span class="d-lg-block"></span>
                       <p class="d-lg-block"><img src="/images/feature.png"></p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        


        <section class="product-liber-performance ls-0"/>
            <div >
                <div class="hidden-xs-down"><img src="/images/sc1_bg.png"></div>
                <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" style="" src="/images/sc3_fimg2.png">
                        </div>
                <div class="container">
                    <div class="banner-info">

                        <div class="h2 banner-header mb-4 mb-sm-5">Inside-out Vibrancy</div>
                        <div class="banner-para">
                            <span class="d-lg-block">MAGUS combines minimalistic design with a metallic casing. Be it in tablet form or laptop mode, MAGUS allows users to express their personal styles with the four color options available – Seashell Pink, Steel Blue, Charcoal Grey, and Pastel Violet.</span>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="product-liber-port ls-0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/sc7_fimg1.png">
                    <!--<img class="bc-computer-image bc-computer-2" src="/images/liber/sc7_fimg2.png">
                    <img class="bc-computer-image bc-computer-3" src="/images/liber/sc7_fimg3.png">-->
                </div>
                <div class="container">
                    <div class="banner-info mx-auto mr-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" src="/images/magus/sc7_fimg1.png">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">Accommodate daily work and entertainment needs</div>

                        <div class="banner-para ls-0">
                            <p class="d-lg-block">MAGUS can run a variety of Windows applications with battery life up to eight hours. It has a microSDXC card reader built in, equipped with a 3.5mm audio jack, a mini HDMI port and a USB 3.0 interface, taking care of the users' needs in every way possible. </p>
                            <!--p class="d-lg-block"><img src="/images/sideview.png"></p-->
                            <p class="d-lg-block"><img src="/images/port_en.png"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section style="background-color:#f0f0f0">
            <div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
            <iframe src="https://www.youtube.com/embed/ExOYYBDDOIw" 
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-pictur" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
           </div>
        </section>

        <!--section class="product-liber-port ls-0" style="background-color:#f0f0f0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/magus_pink2.png">
                </div>
                <div class="container">
                    <div class="banner-info mx-auto mr-lg-0">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" src="/images/sc7_fimg1.png">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">AVAILABLE NOW</div>

                        <div class="banner-para ls-0">
                            <p class="d-lg-block"><h3>Purchase by 6 March 23:59, you can save HK$200 and get 3 Bonus Freebies.</h3><span style="font-size:13px;">Terms and conditions apply and is subject to change without prior notice.</span></br> </p>
                            <p class="d-lg-block"><a href="https://www.nexstmall.com/en_hk/avita-magus-12-2.html?utm_source=brandsite_en&utm_medium=button&utm_campaign=magus201903" class="btn btn-primary support-search-btn-block mt-3 mt-md-0 mx-auto ml-md-3 px-5 px-md-0" target="_blank">BUY NOW</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section-->


        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
				<li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display setting of your viewing device.</li>
					<li>We try our best to provide accurate and complete product information online yet we reserve the rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States and/or other countries.</li>
                    <li>Battery life will vary depending on various factors including product model, configuration, loaded applications, features, use, wireless functionality, and power management settings. The maximum capacity of the battery will naturally decrease with time and usage.</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

<!-- ./Content -->

@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/>
                <link type="text/css" rel="stylesheet" href="https://avita.com/css/product-magus.css"/>
@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/liber.js') }}"></script>


@endsection
