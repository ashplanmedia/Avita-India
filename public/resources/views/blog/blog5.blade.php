 @extends('layouts.app')

@section('title')
     @lang('site.blogs_title')
@stop

@section('content')
    <main>
    

    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5">@lang('site.blog5')</h3>
            <div class="row">
          <!-----
            ------->
        <div class="col-12">
    <p>People all over the world buy laptops for their personal use in offices or classes.</p> 
<p>The primary objective of the personal laptop is that people can carry it along with them any place they visit.</p>
<p>Various laptops are available all over the world with different specifications. </p>
<p>Some are light-weighted, and some of them weigh a ton!</p>

 <h3 style="text-align:center">Role of Laptops in Life of a Student or an Employee</h3>    
    <p>If you are a student, you will always be required to carry your laptop in your classes. </p>
<p>If you are an employee in a company, you would still be required to carry your laptops to the company to provide presentations and performing office work.</p> 
<p>In short, you will always require your laptop with you at all times during your working hours. </p>
<p>If your laptops are really heavy, you would be really troubled when you carry it from one place to another. </p>
<p>What is the point of personal laptops if they are just too heavy to be carried around?</p>

<h3 style="text-align:center">Problem with heavy laptops</h3>    
    <p>Carrying a heavy laptop would totally take a toll on your arms as well as shoulders. </p>
<p>Heavy laptops are known to kill mobility. The laptops weighing in the range of 7-8 pounds are really heavy to be carried around. </p>
<p>You would be really frustrated to carry your personal laptops from one place to another. </p>
<p>Heavy laptops are not really slim, and hence, they would occupy all the space in your backpack. </p>
<p>Sometimes, your backpack would be at risk of being torn due to the heavy weight of the laptop.</p>


<h3 style="text-align:center">Light-weight laptops</h3>    
    <p>The main point that must be taken into consideration is that when you are looking for a good laptop, you must go for a laptop that weights between 5-6 pounds. </p>
<p>The laptops that weigh in the range of 5-6 pounds are really good to be carried around at all times without stressing any weight on your arms or shoulders. </p>
<p>Advantages of a lightweight laptop:</p>
<ul>
    <li>Lightweight laptops are totally slim.</li>
    <li>Lightweight laptops would not be occupying any additional space in your backpack. </li>
<li>Additionally, your backpack would not be at risk of being torn apart.</li>
    <li>Light weighted laptop adds style to your personality.</li>
    <li>They are considered the best option for your business travel.</li>
</ul>
    
<strong>It is a myth that lightweight laptops are less powerful than heavy weighted laptops. Lightweight laptops can work as efficiently as the heavy weighted laptops. Though small or slim in size, their computation power is really great comparatively.<br/></strong>

<p>Lightweight laptops are available in various models with different specifications in the market. </p>

<p>They are really famous for their gorgeous slim build. </p>

<p>Other people are attracted to your laptop as they are really attractive in appearance and can perform really well.</p>


<h3 style="text-align:center">Conclusion</h3>    
    <p>It is really important to carefully analyze the size and weight of the laptop while buying one.</p>
      <p>A heavy laptop would really be frustrating sometimes.</p>
        <p>Hence, you must always think of choosing a lightweight laptop if they fall in your specified budget.</p>

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
