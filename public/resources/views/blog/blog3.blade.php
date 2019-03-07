 @extends('layouts.app')

@section('title')
     @lang('title.blogs_title')
@stop

@section('content')
    <main>
    

    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5">@lang('site.blog3')</h3>
            <div class="row">
          <!-----
            ------->
        <div class="col-12">
  <p>After years of education, it is finally time for you to become a graduate. It is finally time for you to learn what you have craved your entire life. You take admission in a college and go through a ton of syllabus.</p>
<h4>But the question stands, "What now?"</h4>

<p>In order to succeed in life, you need to come up with unique, innovative ideas and apply them in real life. Competition is at an all-time high.</p> 	
<h4>You must know that it is now or never. </h4>
<p>You must understand the importance of being creative during your college days for you to succeed. College days are considered to be the best days in the life of a person during which the person holds the highest probability of success.
</p><br/>
<h3 style="text-align:center;"> Why are College days the best days to be Creative?</h3>
<br/>
<p>It is essential for the students to be creative while they are in college. Let us know why. </p> 
<ul>
    <li><strong>Friends:</strong> During the college days, the students come in touch with various people who hold expertise in different fields. If you are an IT student, you will come across people who are great with Web Development. Some would be experts in Application Development. This helps to build a team of experts and develop something miraculous efficiently. </li> 
      <li><strong>Mentors:</strong> During the college days, along with different professional friends, you would meet some great professionals who would motivate you to reach great heights and help you with your dreams. You would require thorough guidance the entire time. Such kind of guidance would be provided by various professionals around you. You just need to seek the correct moment.</li> 
      <li><strong>Technology:</strong> Additionally, your college would be equipped with various instruments and technologies which would help you to become creative and get the job done. College management staff are really excited to provide facilities for students who can really become creative and invent innovative stuff.  </li> 
      <li><strong>Opportunities: </strong>Various business tycoons visit the college in order to check out the innovative gadgets developed by students. If they really like your project, you would be further encouraged to carry on with the project as they would really be interested in funding your program . Proper funding would just allow you to reach greater heights in your life.</li> 
      </ul>
  <p>With the help of a laptop, you would just be able to develop any software as well as the technology of your dream. You just would need a decent internet connection. With the help of your expertise in a particular field as well as experts in various fields and proper guidance, you would totally be equipped with everything that is required to develop yourself and stand unique from the crowd.</p>
  
 <h3 style="text-align:center;">Conclusion</h3>
<p>College days are really crucial in a person's life. Students in college must always try to seek out for opportunities and grab them whenever possible. Students would be provided with various opportunities in their college life which they would not be able to grab in their entire life. Hence, it is really important for the students to correctly analyze the opportunities and grab them to reach great heights.
Hence, it is really important for you to be creative in your college days.
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
