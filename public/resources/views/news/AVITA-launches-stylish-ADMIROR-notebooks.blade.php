 @extends('layouts.app')

@section('title')
     @lang('site.blogs_title')
@stop

@section('content')
    <main>
    

    <section class="focus-event top-nav-padding">
        <div class="container">
            <h3 class="section-title ls-0 my-5">#YouCanBe AVITA launches stylish ADMIROR notebooks</h3>
            <div class="row">
       <div class="col-12">
	   <h6>Architectural aesthetic-inspired designs and elevated performance on the go</h6>
   Taiwan, 27th May 2019 — Fashionable tech brand AVITA announces its plan to launch the stylish notebook series ADMIROR in second quarter this year. Bringing innovative technology, fashionable design and gothic architecture elements into one, ADMIROR is the perfect “fashion gadget” at work and for daily entertainment enjoyment. ADMIROR notebooks combine a number of professional features in a vibrant design resplendent in five color options. Breaking through the norm and shattering the dull image of traditional notebooks, ADMIROR seeks to become the ultimate fashionable daily companion for stylish users looking for a chic, highly portable and affordable premium notebook solution. 

#YouCanBe: Gothic architectural aesthetic in 5 colors with ULTRA Slim design
With the theme of “#YouCanbe”, AVITA continues to break the traditional market perception of lightweight notebooks with its new ADMIROR series, available in a range of color options that contrast the norm: “Blazing Brown” and “Flaming Copper”, as well as “Delight Pink”, “Pride Blue” and “Traveler Green”. The five colors create five unique overall characters to match the user’s own personal sense of self. 

As the ultimate gadget for fashionistas, AVITA ADMIROR combines hints of Gothic architecture portrayed via contemporary aesthetics, realizing a seamless and slim body design with the most delicately crafted details. It is designed with rounded corners and concealed hinges, taking inspirations from epoch-making architectural art, whilst applying innovative technology to bring a refreshingly extraordinary user appearance. The vault design, which is situated between the screen and the keyboard, further pushes its Gothic styling theme to the forefront.

AVITA ADMIROR also adopts ULTRA Slim design and a special metallic chassis. With its slimmest point at just 9mm thin and weighing from just 1.29kg, ADMIROR is extremely handy to carry as your always-on life partner. This series is also available in two different screen size options – 14-inch and 15.6-inch models, fulfilling the needs of a wide spectrum of user types.

 
#YouCanBe: High performance, supremely multi-functional: brings a whole new meaning to the “Fashion Gadget” market
As AVITA’s hero product series, ADMIROR’s ‘upgraded version’ elevated feature set includes a 4K ULTRA HD IPS display that offers natural color reproduction and rich color range, together with 4 ways passive boosters and 2 ways full range speakers to boost audio sound quality, bringing the best audio-visual experience at work or for movies and music enjoyment on-the-go. Its touchscreen allows users to freely navigate the web while its extra-large touch panel supports multi-touch control, significantly enhancing overall flexibility and accuracy. Its backlit keyboard also enhances the overall user experience enormously. ADMIROR’s battery life lasts for up to 10 hours, and it supports Windows Hello, a biometric identity and access control feature that incorporates fingerprint reading for strengthened privacy protection. To ensure a thoroughly lightweight design, ADMIROR is equipped with two USB-C ports, and an adapter * to meet users’ needs to charge devices whilst out and about, transfer data or connect to different devices to extend versatility.
*Adapter includes USB-C and USB, HDMI and 3.5mm headphone jack

ADMIROR builds on AVITA LIBER’s standout award pedigree: LIBER wins ‘Best Choice Award - Jury’s Special Award’
The AVITA LIBER series, which consists of 14 distinctive colors and 6 special print designs, received overwhelming consumer support and critical acclaim after its launch. As the first of AVITA’s new notebook series, AVITA LIBER changed public perception of what a notebook can do, winning ‘Best Choice Award - Jury’s Special Award’ in a further measure of its success, as AVITA continues to be the first choice innovator in “customized” notebook design.

Launch date and Suggested retail price: 
ADMIROR will be launched in Hong Kong in August 2019 and other countries later on. Suggested retail price to be released later.

###
About AVITA
AVITA is a consumer lifestyle brand found in the United States. In 2016, Nexstgo introduced AVITA to Asia, and since has been promoting the brand and making its products available to international consumers.The AVITA product series with ranges for PC, Smart home and IoT devices has three core values: Liberty, Diversity and Individualism for an exceptional and highly personal experience for the new generation of tech users.
www.avita.global 

About Nexstgo Company Limited
Established in 2016, Nexstgo Company Limited was co-founded by Mr. Wilson Leung, CEO, Alco Holdings Limited (SEHK: 0328), and Mr. Alex Chung, out of a shared passion and pursuit of quality tech-innovation. Nexstgo is committed to bringing new revolutionary experiences in technology through introducing a wide product range, which includes PC, Smart home, IoT, artificial intelligence and corporate solutions. Nexstgo is growing steadily in the Asia Pacific region. In August 2016, its Hong Kong headquarters and Taiwan Design Centre were set up. In just two years, the company has expanded its business to 12 areas, and is fully committed to the development of the Tech Market.
www.nexstgo.com 


For media queries, please contact:
SPRG
Veronica Li +852-9414-2862 / +852-2114-4945 / veronica.li@sprg.com.hk
Ian Yung +852-9035-5313 / +852-2114-4958 / ian.yung@sprg.com.hk

Nexstgo
Carol So +852-9016-1919 / carol.so@nexstgo.com

   
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
