 @extends('layouts.app')

@section('title')
    {{ $news_detail->title }} | @lang('title.whats_new')
@stop


@section('content')
    <main>
        <section class="event-detail top-nav-padding">
            <div class="container mb-5">
                <h3 class="section-title ls-0 my-4 mt-5">#YouCanBe AVITA launches stylish ADMIROR notebooks</h3>
                <div class="row p-3 align-items-center">
                    <div class="event-date color-required h5 mb-0 pr-3">
                        <i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>May 27, 2019
                    </div>
                    <div class="event-status px-4 py-1">
                       In Progress
                    </div>
                </div>
                <div class="row p-3 align-items-center">
                   <!--- <div class="event-detail-title h3">
                       #YouCanBe AVITA launches stylish ADMIROR notebooks
                    </div>
                    --->
                   @if( $country != 'cn')

                    <div class="event-share ml-auto">
                        <span class="px-2">@lang('site.share'):</span>
                        <a href="#" class="ml-0 ml-md-auto fb_share_btn"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="ml-0 ml-md-2 twitter_share_btn"><i class="fa fa-twitter pl-1" aria-hidden="true"></i></a>
                    </div>

                    @endif
               
               </div>
           
                  <div class="event-banner">
                        <img src="/images/events/Avita_jellyfish_teaser_banner_v3_1000px.jpg" class="img-responsive" />
                    </div>
                  
               
                <div class="event-desc py-3 mb-5">
                    <div class="event-desc-block pb-5">
                        <p class="event-desc-content">
                           
							
                        </p>
                    </div>
                </div>


            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
@endsection


@section('js')

    <script>

        $('.fb_share_btn').click( function(e) {

            e.preventDefault();

            FB.ui( {
                method: 'share',
                href: $(location).attr('href')
            }, function(response){

            });
        });

        $('.twitter_share_btn').click(function(e){

            e.preventDefault();

            var current_url = $('meta[property="og:url"]').prop('content');


            var share_url = "https://twitter.com/intent/tweet?text=" + encodeURIComponent( current_url );
            window.open( share_url, '_blank' );
        });



    </script>

@stop


