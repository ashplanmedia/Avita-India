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
                        <img src="/images/blog/blog5.jpeg" class="img-responsive" />
                    </div>
                  
               
                <div class="event-desc-block pb-5">
                        <p class="event-desc-content">
                            </p><p class="MsoNormal" style="text-align: center; line-height: 20.0pt; mso-line-height-rule: exactly;" align="center"><strong><span lang="EN-US" style="font-size: 18.0pt; mso-bidi-font-family: 'Times New Roman';">@lang('site.blog1')</span></strong></p>
<p class="MsoNormal" style="line-height: 16pt; text-align: center;"><span lang="EN-US" style="mso-bidi-font-size: 12.0pt; mso-bidi-font-family: 'Times New Roman';"><em style="text-align: center;"><span lang="EN-US"> What’s the best thing technology does?</span></em></span></p>
<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><span lang="EN-US" style="mso-bidi-font-size: 12.0pt; mso-bidi-font-family: 'Times New Roman';"> It brings people together.</span></p>
<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><span lang="EN-US" style="mso-bidi-font-size: 12.0pt; mso-bidi-font-family: 'Times New Roman';"> So, here you are spending your time on our blog post, trying to find the best answers to your queries.</span></p>
<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><span lang="EN-US" style="mso-bidi-font-size: 12.0pt; mso-bidi-font-family: 'Times New Roman';"> This is not just a ‘One way street’.</span></p>
<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><span lang="EN-US" style="mso-bidi-font-size: 12.0pt; mso-bidi-font-family: 'Times New Roman';"> What’s happening right now is a communication between you and our creation.</span></p>
<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><span lang="EN-US" style="mso-bidi-font-size: 12.0pt; mso-bidi-font-family: 'Times New Roman';">And an effective communication is one of the most basic developments that build your college life.</span></p>
And that’s exactly where technology steps in.</span></p>
<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><span lang="EN-US" style="mso-bidi-font-size: 12.0pt; mso-bidi-font-family: 'Times New Roman';">Today, we will take you through our guide to help you sail through one of the most difficult decisions every student has to take in his college life – buying a Student Laptop.</span></p>
<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><span lang="EN-US" style="mso-bidi-font-size: 12.0pt; mso-bidi-font-family: 'Times New Roman';">So, without any further ado, let’s dive in.</span></p>
<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><strong><u><span lang="EN-US"><br>What are the Key features Students should look in a laptop?</span></u></strong></p>  
<p class="MsoNormal" style="text-align: justify; text-justify: inter-ideograph; line-height: 16.0pt; mso-line-height-rule: exactly;"><strong><u><span lang="EN-US"><br>Weight</span></u></strong><span lang="EN-US" style="mso-bidi-font-size: 12.0pt; mso-bidi-font-family: 'Times New Roman'; color: #212121; mso-font-kerning: 0pt;">  Weight is determined largely by screen size -- each added inch brings added ounces of plastic and metal to support it. 
What's the sweet-spot for laptop weight? Most buying guides say it's about 4 lbs, give or take.  </span></p>




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
