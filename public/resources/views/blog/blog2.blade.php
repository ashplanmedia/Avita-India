 @extends('layouts.app')

@section('title')
     @lang('site.blogs_title')
@stop

@section('content')
    <main>
    

    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5">@lang('site.blog2')</h3>
            <div class="row">
          <!-----
            ------->
        <div class="col-12">
  <p>Weight is one of the most important health concerns people face today. 
Most of us have heard the warnings that several common causes of early death, such as heart disease, stroke, type 2 Diabetes, and even certain types of cancer are linked to obesity. 
While weight management involves a whole lifestyle of good habits, one integral piece is weighing yourself. 
You need a smart scale!
When you're not happy with your body or your weight or your progress in managing it, stepping on the scale sucks. 
We want to convince you that getting a smart bathroom scale, one that's wirelessly connected to an app that helps you track your weight, is not only going to help monitor all the pounds in your household, but also has the potential to make your whole family happier about doing it.</p>

<h3>What is a Smart Scale?</h3>
<p>A smart body scale is an electronic bathroom scale that measures weight and other body composition metrics, and then sends them wirelessly to an app or online service that automatically records the data.</p>

<h3>What Do Smart Scales Do?</h3>
<p>The primary job of a smart scale is to record your weight and other metrics in an app that lets you see your history of weight change over time.
Multiple people can use the same scale, making them perfect for a health-conscious family. 
Most scales differentiate each person based on their prior readings. 

If one family member weighs around 160 pounds and the other weighs 140, the scale quickly figures out who is who. 
If two people have close readings, the scale or app usually asks the person being weighed at the moment to confirm his or her identity. 
A smart scale helps a family organize their health initiatives because it makes the tracking effortless. 
No one ever has to write down the details of the weigh-in because the tracking happens automatically. 
The most you have to do is make sure the scale's batteries are still going strong.
</p>
<h3>What are the benefits of Using a Smart Scale?</h3>
<p>Beyond tracking weight, there are other benefits to using a smart scale:</p>
<ol>
    <li>You don't have to look! Stepping on the scale sometimes sucks. When you use a smart scale, you don't have to look if you don't want to. The weight will still be recorded in your app, and you or your doctor can look later. Long-term trends are at least as important as the daily numbers.
</li>
<li>Pregnancy and post-pregnancy weight-tracking is much easier. A lot of people don't like facing the numbers of their weight, but imagine how much worse it could be if your body's hormones are fluctuating during or after a pregnancy. This also disables the body composition features, which pregnant women (as well as people with implanted devices, such as pacemakers) are often told not to use.
</li>
<li>Smart scales can increase motivation. If you and your family like technology, incorporating a smart scale might actually make it fun to start tracking weight, or at least motivate them to start. Having a new toy in the house could give everyone the boost they need to start stepping on the scale every day.
</li>
<li>Kids can learn good habits. If everyone steps on the scale every day and there's a record to prove it, kids will pick up on what it means to create a habit out of their weight-management practices, and creating good habits is key.</li>

<li>They typically pair with fitness trackers. If you already use a fitness tracker, buying the companion smart scale will give you much more insight into how your activities, sleep, and food intake affect your weight.</li></ol>
<p>We hope these benefits push you forward to get yourself a smart scale.
If you are looking forward to buy one, don’t forget to check out the brand new AVITA Smart Scale!
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
