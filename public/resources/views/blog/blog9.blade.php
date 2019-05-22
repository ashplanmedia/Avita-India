
@extends('layouts.app')

@section('title')
    @lang('site.blogs_title')
@stop

@section('content')
    <main>


        <section class="focus-event top-nav-padding">
            <div class="container">
                <h3 class="section-title ls-0 my-5">@lang('site.blog9')</h3>
                <div class="row">
                    <!-----
                      ------->
                    <div class="col-12">Do you like expressing your originality and are good with OUT-OF-THE-BOX thinking? If your answer to the above question is YES, the chances are that your RIGHT creative brain is more dominant over your LEFT analytical brain. In recent years, many Indian students have said "Goodbye" to the common career fields and have decided some creative career options. 
Everyone would agree with the statement that- using correct accessories can ease the overall process, especially for those who produce something creative. Such creative students need a special laptop that can handle the demanding load of resource-hogging software and deliver great output without taking the toll. 
But don't worry. We have your back. AVITA is a laptop brand which is specially designed to break the pain-points of creative users. Want to know how? Okay. Let's dive into it.

<h2>LIBER Screen for Graphic Designers</h2>
Choosing the best-fitted screen is perhaps the most important decision in choosing the right laptop. LIBER Series laptops provide outstanding visuals, a higher resolution with better details and colour accuracy. These detailed screen features can be the best companion for any graphic designer.

<h2>Hi-Tech Keyboard for the Content Writers</h2>
The sky is the limit if you are a creative content writer. AVITA laptops have a unique keyboard design which pleases fingers in every touch and maintains the typing speed which is essential for every writer.



<h2>Radio Jockey</h2>
If you are skilled in talking your way out of uncomfortable conversations, then career paths such as Radio Joking and Anchoring could be your area of interest. We have everything to offer to such users. AVITA laptops have a high-quality microphone that captures human voices very well. You can record in it, play in it, and you are good to go.

<h2>Advertising</h2>
A career in advertising has been promising because companies need to do much more than manufacturing the best product and providing the best service to attract the target audience. This is where advertising professionals come in. Advertising professionals perform varied roles such as client-servicing, research, copywriting, editing, scriptwriting, and much more. In such a demanding job, people need a laptop that can handle the load. AVITA is a perfect choice as it has 8 hours battery backup, with latest Intel i5 processor for fast processing.

<h2>CONCLUSION</h2>
Indian youth is breaking the stereotypes and going for the career of their choices. In such a situation, AVITA is a brand which is ready to be with you at every step. We are providing everything you are looking for in your dream laptop.

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
