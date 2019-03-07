@extends('layouts.app')

@section('title')
    @lang('title.whats_new')
@stop

@section('content')
<main>

    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5">@lang('site.blogs_title')</h3>
            <div class="row">
          <!-----
            ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
   <a href="/blog1"> <p>AVITA’s Guide to Buying the Perfect Student Laptop</p></a><br/>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avitain.ashplanmedia.com/images/demo/promo-01-en.jpg" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 1st March, 2019</div>
        <div class="event-status coming_soon ml-auto"></strong>Category:</strong> Laptop Buying Guide</div>
            </figcaption>
        </figure>
      
            </div>

        </div>
<!-----
------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
    <a href="/blog2"> <p>What are the benefits of smart scale?</p><br/>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avitain.ashplanmedia.com/images/demo/promo-01-en.jpg" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 22rd Feburary, 2019</div>
        <div class="event-status coming_soon ml-auto"></strong>Category:</strong> Smart Scale</div>
            </figcaption>
        </figure>
      
            </div>

        </div>
           </div>
           
           
                       <div class="row">
          <!-----
            ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
    <a href="/blog3"> <p>Why is College the RIGHT time to become Creative? </p><br/>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avitain.ashplanmedia.com/images/demo/promo-01-en.jpg" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 15th Feburary, 2019</div>
        <div class="event-status coming_soon ml-auto"></strong>Category:</strong> Creative Laptops</div>
            </figcaption>
        </figure>
      
            </div>

        </div>
<!-----
------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
<a href="/blog4"> <p>Avita Liber: Technology to keep YOU high on Fashion</p><br/>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avitain.ashplanmedia.com/images/demo/promo-01-en.jpg" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 08th Feburary, 2019</div>
        <div class="event-status coming_soon ml-auto"></strong>Category:</strong> Avita Liber</div>
            </figcaption>
        </figure>
      
            </div>

        </div>
             </div>
      <div class="row">
          <!-----
            ------->
        <div class="col-12 col-md-6">
            <div class="event-item mb-5">
   <a href="/blog5">  <p>Why should your Personal Laptop be Light Weighted?</p><br/>
            <figure>
            <div class="image-wrap">
                <img style="width: 100%; height:100%;" src="http://avitain.ashplanmedia.com/images/demo/promo-01-en.jpg" />
            </div>
            <figcaption class="d-flex event-caption coming_soon px-4 py-1">
        <div class="event-date"><i class="fa fa-calendar-o mr-3" aria-hidden="true"></i><strong>Date:</strong> 1st Feburary, 2019</div>
        <div class="event-status coming_soon ml-auto"></strong>Category:</strong> Personal Laptops</div>
            </figcaption>
        </figure>
      
            </div>

        </div>
<!-----
------->
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
        $('#news-month-option').change( function(event) {

            window.location = '{{$country}}/news/'+ $(this).val() ;
        })
    </script>
@endsection


@section('css')

    <style>

        .status {
            color: #ffffff;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            background-color: #692c90;
        }


        .status.in_progress { background-color: #65318f; }
        .status.coming_soon { background-color: #a270c9; }
        .status.finished    { background-color: #a1a1a1; }

        .status-sm {

            display: inline;
            font-size: 0.8rem;
            padding: 3px 1rem;
        }

        .status-md {

            min-width: 160px;

        }
    </style>
@endsection
