 @extends('layouts.app')

@section('title')
     @lang('site.blogs_title')
@stop

@section('content')
    <main>
    

    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5">@lang('site.blog4')</h3>
            <div class="row">
          <!-----
            ------->
        <div class="col-12">
    <p>Technology has evolved all around the corners of the world. Surviving in the 21st century without laptops and smartphones is impossible. Each and every person carries a laptop to the office or college for their  specific purposes.</p>
<h3 style="text-align:center">Just imagine a day without a laptop in your office or college.</h3>    
<br/>
<ul>
<li>How would you be providing presentations?</li>    
<li>How would you be able to carry on with your work?</li>    
<li>How would you be able to perform accurate calculations?</li>    
<li>How would you be preparing the content for your project?</li>    
<li>Most importantly, how would you be playing games?</li>    

</ul>
    <p>
You cannot imagine.
The most important factor to consider while buying a laptop is that it must match with your personality. Laptops are available all over the world in various models as well as multiple sizes along with different specifications.
Imagine yourself carrying a poorly designed laptop in the college. Would that be a good first impression?
Now imagine yourself carrying a laptop that is stylish as well as attractively colored. How's that for a first impression?
    
    
</p>
    <h3 style="text-align:center">Why Avita?</h3>    
    <p>We, here at Avita know the importance of carrying around a laptop that matches your personality. People in the office or college judge you by the laptop model you carry along with you. We believe in the wonder as well as the power of an individual. When it comes to us, we believe in providing the most innovative as well as technologically advanced and stylish product to our customers.</p>
    
        <h3 style="text-align:center">Avita Liber</h3>    
    <p>Available in various colors namely Angel Blue, Blossom Pink, Fragrant Lilac, Himalayan Blue, Peacock Green and Silver, Avita Liber is everything one could dream about. The laptop is slim as well as light weighted which would allow you to carry it anyplace without any strain on your arms or shoulders.  
What is the point of purchasing a laptop if it just does not match your requirements?
</p>
    
    
<h3 style="text-align:center">Let us explain the features of Avita Liber.</h3>  <ul>
    <li>Avita Liber is equipped with a high-end processor Core i5 along with 8GB RAM and 128GB SSD which ensures that the laptop does not compromise its quality irrespective of its thin build and lightweight. </li>
    <li>Multiple color options allow the user to select a laptop that suits his/her personality.</li>
    <li>The, as well as the thin build of the laptop, boosts the personality of the person carrying it along. Additionally, the light weight of the laptop prevent the users from loading strain on their arms or shoulders.</li>
    <li>The laptop is equipped with premium, oversized glass trackpad. Surrounded by an elegant diamond cut bevelling, 	the premium oversized trackpad allows for easy gesture controls.</li>
    <li>The feature to lock and unlock the laptop at the tip of a finger is the most comforting of them all.</li>
    <li>If you are buying this product, then you do not need to worry about battery life.</li>
    </ul>
      
      
<h3 style="text-align:center">Specifications of Avita Liber</h3> 
<table border="1" align="center" cellpadding="8">
    <tr>
        <th>Processor</th>
        <td>Core i5</td>
    </tr>
        <tr>
        <th>Ram</th>
        <td>8GB</td>
    </tr>
        <tr>
        <th>Storage</th>
        <td>128GB SSD</td>
    </tr>
        <tr>
        <th>Size</th>
        <td>0.59 inch</td>
    </tr>
        <tr>
        <th>Weight</th>
        <td>2.5 lbs</td>
    </tr>
</table><br/>
 <h3 style="text-align:center">Conclusion</h3>    
    <p>If you want a laptop that soothes your personality, Avita Liber is the one which has been built by professionals from all over the world by keeping the customer requirements in their minds. 
Just Go for it.</p>
<br/>
    
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
