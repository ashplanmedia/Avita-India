 @extends('layouts.app')

@section('title')
     @lang('site.blogs_title')
@stop

@section('content')
    <main>
    

    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5">@lang('site.blog1')</h3>
            <div class="row">
          <!-----
            ------->
        <div class="event-desc-block pb-5">
    <ul style="list-style-type: none;">
        <li>  What’s the best thing technology does?<br/></li>
        <li> It brings people together.<br/></li>
        <li> So, here you are spending your time on our blog post, trying to find the best answers to your queries.<br/></li>
        <li>This is not just a ‘One way street’.<br/></li>
        <li>What’s happening right now is a communication between you and our creation.<br/></li>
        <li>And an effective communication is one of the most basic developments that build your college life.<br/></li>
        <li>And that’s exactly where technology steps in. <br/></li>
        <li>Today, we will take you through our guide to help you sail through one of the most difficult decisions every student has to take in his college life – buying a Student Laptop. <br/></li>
        <li>So, without any further ado, let’s dive in.<br/></li>
        </ul>
    <h2>What are the Key features Students should look in a laptop?</h2>
<h3>Weight</h3> <p>Weight is determined largely by screen size -- each added inch brings added ounces of plastic and metal to support it. 
What's the sweet-spot for laptop weight? Most buying guides say it's about 4 lbs, give or take.</p>
<h3>Screen Size</h3>
<p class="MsoNormal" style="text-align: center; line-height: 20.0pt; mso-line-height-rule: exactly;" align="center">First, know that improving display technology (HD, Full HD, 4K, etc.) has enabled impressive view ability in all laptops. 
Students who mostly read and write can utilize smaller screens while those whose learning involves more visual or creative activities can benefit from larger ones.</p>
<h3>Battery Life</h3>
<p class="MsoNormal" style="text-align: center; line-height: 20.0pt; mso-line-height-rule: exactly;" align="center">These days, if a laptop manufacturer isn't offering battery life of 8-12+ hours, you should probably keep looking.</br>
Consider these factors:</p>
<ul>
    <li>How big is it?</li> 
	<li>How will you use it?</li> 
	<li>Where will you use it?</li> 
	</ul>
<h3>Processor, RAM, and Storage</h3>
<p>Storage is less important today. RAM shopping is easy: 4 GB is the minimum, 8 GB is considered typical, and the ability to add more RAM chips is a useful option. 
But it is processor (CPU) power that truly matters from an educational/work product perspective, since it determines how much your laptop can accomplish for you (and how fast).</p>

<h3>Graphic Capabilities</h3>
<p class="MsoNormal" style="text-align: center; line-height: 20.0pt; mso-line-height-rule: exactly;" align="center">You'll have to choose between systems with integrated graphics or ones with dedicated graphics cards, which are placed separately on the motherboard and are typically more powerful. 
Most student users will be satisfied with integrated graphics, but dedicated GPUs might be best for those who intend to also play advanced computer games or whose course of study (such as engineering, videography, etc.) involves the creation or rendering of complex images or artwork.</p>

<h3>Ports and Accessories</h3>
<p>When it comes to USBs, the more the better, especially with all of the peripherals, such as smartphones, that a student might need to plug in. 
The same goes for external connection options (HDMI, DVI-D, USB Type-C); the more you have, the greater your flexibility. </p>
<h3>Wireless Connectivity</h3>
<p class="MsoNormal" style="text-align: center; line-height: 20.0pt; mso-line-height-rule: exactly;" align="center">Once an option, screaming fast wireless is now essential in student laptop -- not just for research but for lifestyle activities such as movie streaming and social media. 
The latest wireless standard to look for is 802.11ac, which has a theoretical maximum of 1300 megabits per second (Mbps), approx. three times that of the previous consumer standard, 802.11n.</p>
<h3>Durability</h3>
<p class="MsoNormal" style="text-align: center; line-height: 20.0pt; mso-line-height-rule: exactly;" align="center">Laptops with added features for hard use or rugged environments are already popular in industrial settings and are quickly moving into the student market, too. 
Models with spill-proof keyboards (in which any small amounts of liquid are directed away from the interior electrical components) are ideal for students and available in every price category. 
More expensive models might use magnesium alloy like the AVITA Liber to protect against short drops or falls, and some laptops (and laptop cases) are put through military-level durability tests (MIL-SPEC 810G, for example).
<h3>Technical Support</h3>
<p class="MsoNormal" style="text-align: center; line-height: 20.0pt; mso-line-height-rule: exactly;" align="center">Depending on the student's technical know-how, the quality and availability of technical support from the laptop manufacturer could be an important factor, so consider checking the online forums where these matters are discussed. 
If you truly need a new student laptop to last 4-5 years, consider the cost-benefit value of any extended warranty that might be offered.
There you go.
These were the top factors every student should consider when buying a student laptop.</p>

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
