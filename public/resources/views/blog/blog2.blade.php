 @extends('layouts.app')

@section('title')
     @lang('site.blogs_title')
@stop

@section('content')
    <main>
        <section class="event-detail top-nav-padding">
            <div class="container mb-5">
                <br/>
               <div class="event-banner">
                        <img src="/images/blog/blog4.jpeg" class="img-responsive" />
                    </div>
                  
               
                <div class="event-desc-block pb-5">
                        <p class="event-desc-content">
                            </p><p class="MsoNormal" style="text-align: center; line-height: 20.0pt; mso-line-height-rule: exactly;" align="center"><strong><span lang="EN-US" style="font-size: 18.0pt; mso-bidi-font-family: 'Times New Roman';">@lang('site.blog2')</span></strong></p>
<p class="MsoNormal" style="line-height: 16pt; text-align: center;"><span lang="EN-US" style="mso-bidi-font-size: 12.0pt; mso-bidi-font-family: 'Times New Roman';"><em style="text-align: center;"><span lang="EN-US"> Technology has evolved all around the corners of the world. Surviving in the 21st century without laptops and smartphones is impossible. Each and every person carries a laptop to the office or college for their specific purposes.</span></em></span></p>
<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><span lang="EN-US" style="mso-bidi-font-size: 12.0pt; mso-bidi-font-family: 'Times New Roman';"> <strong>Just imagine a day without a laptop in your office or college.</strong></span></p>
<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><span lang="EN-US" style="mso-bidi-font-size: 12.0pt; mso-bidi-font-family: 'Times New Roman';"><ul><li> How would you be providing presentations?</li>
<li> How would you be providing presentations?</li>
<li> How would you be able to carry on with your work?</li>
<li> How would you be able to perform accurate calculations?</li>
<li> How would you be preparing the content for your project?</li>
<li> Most importantly, how would you be playing games?</li>
</ul>
</span></p>



<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><span lang="EN-US">The most important factor to consider while buying a laptop is that it must match with your personality. Laptops are available all over the world in various models as well as multiple sizes along with different specifications.</span></p>


<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><span lang="EN-US">Imagine yourself carrying a poorly designed laptop in the college. Would that be a good first impression?</span></p>


<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><span lang="EN-US">Now imagine yourself carrying a laptop that is stylish as well as attractively colored. How's that for a first impression?</span></p>



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
