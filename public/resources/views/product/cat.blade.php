@extends('layouts.app')

@section('title')
	@lang('title.where_to_buy')
@stop

@section('css') 

<style>

    input[type="radio"] {
      margin-top: -1px;
      vertical-align: middle;
    }

    .block {
      display: block;
   }

   .main{
    float: center;
   }


  .product-slider {
    padding: 45px; 
  }

.product-slider #carousel { 
  border: 2px solid #1089c0; 
  float: center;
  margin: 0; 
  height: 500px;
  
}

.product-slider #thumbcarousel { 
  margin: 12px 0 0; 
  padding: 0 45px; 
}

.product-slider #thumbcarousel .item { 
  text-align: center; 
}

.product-slider #thumbcarousel .item .thumb { 
  border: 2px solid #cecece; 
  width: 20%; 
  margin: 0 2%; 
  display: inline-block; 
  vertical-align: middle; 
  cursor: pointer; 
  max-width: 98px; 
}

.product-slider #thumbcarousel .item .thumb:hover { border-color: #1089c0; }

.product-slider .item img { width: 500px; height: 500px; }
.product-slider .thumb img { width: 50px; height: 50px; }

.carousel-control { color: #0284b8; text-align: center; text-shadow: none; font-size: 30px; width: 30px; height: 30px; line-height: 20px; top: 23%; }

.carousel-control:hover, .carousel-control:focus, .carousel-control:active { 
  color: #333; 
}

.carousel-caption, .carousel-control .fa {

   font: normal normal normal 30px/26px FontAwesome; 

 }

.carousel-control {

   background-color: rgba(0, 0, 0, 0);
   bottom: auto; font-size: 20px; 
   left: 0; 
   position: absolute; 
   top: 30%; 
   width: auto; 
 }

.carousel-control.right, .carousel-control.left { 
    background-color: rgba(0, 0, 0, 0); background-image: none; 
}

input {
    visibility:hidden;
}

input:checked +label img{

  border:1px solid #021a40;
}

	</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="screen" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="screen" />



@stop

@section('content')

<main class="top-nav-padding">

  <div class="nav-product-panel">
    <div class="container">
        <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <div class="product-nav-collapse">
            <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">  
                <li class="nav-item"><a class="nav-link py-1" href="/customMagus">Magus</a></li>
                <li class="nav-item"><a class="nav-link py-1" href="/customUSeries">U Series</a></li>
                <li class="nav-item"> <a class="nav-link py-1" href="/customVSeries">V series</a>
                    </li>
               
            </ul>
        </div>
    </div>
</div>

	
	 <div id="container" class="cf">   

	<div class="product-slider">

    <div class="row">

      <div class="col-md-2">
        <div class="colorSelector">

          <div class="row">

            <div class="col-md-2 text-left">

        <label class="block">
          <input type="radio" name="color" value="Angel Blue" checked>
          <img height="50px" width="50px" src="images/custom/colors/Angel Blue.jpg">
        </label>

        <label  class="block">
          <input type="radio" name="color" value="Avita Purple">
          <img height="50px" width="50px" src="images/custom/colors/Avita Purple.jpg">
        </label>

        <label  class="block">
          <input type="radio" name="color" value="Champagne Gold">
          <img height="50px" width="50px" src="images/custom/colors/Champagne Gold.jpg">
        </label>

        <label  class="block">
          <input type="radio" name="color" value="Cloud Silver">
          <img height="50px" width="50px" src="images/custom/colors/Cloud Silver.jpg">
        </label>

        <label  class="block">
          <input type="radio" name="color" value="Fragrant Lilac">
          <img height="50px" width="50px" src="images/custom/colors/Fragrant Lilac.jpg">
        </label>

        <label  class="block">
          <input type="radio" name="color" value="Matt Black">
          <img height="50px" width="50px" src="images/custom/colors/Matt Black.jpg">
        </label>

        <label  class="block">
          <input type="radio" name="color" value="Peacock Green">
          <img height="50px" width="50px" src="images/custom/colors/Peacock Green.jpg">
        </label>

        </div>

        <div class="col-md-2 text-right" style="margin-left: 50px">

        <label  class="block">
          <input type="radio" name="color" value="Pearl White">
          <img height="50px" width="50px" src="images/custom/colors/Pearl White.jpg">
        </label>

        <label  class="block">
          <input type="radio" name="color" value="Princess Pink">
          <img height="50px" width="50px" src="images/custom/colors/Princess Pink.jpg">
        </label>

        <label  class="block">
          <input type="radio" name="color" value="Shamrock Green">
          <img height="50px" width="50px" src="images/custom/colors/Shamrock Green.jpg">
        </label>

        <label  class="block">
          <input type="radio" name="color" value="Space Grey">
          <img height="50px" width="50px" src="images/custom/colors/Space Grey.jpg">
        </label>

        <label  class="block">
          <input type="radio" name="color" value="Sunflower Yellow">
          <img height="50px" width="50px" src="images/custom/colors/Sunflower Yellow.jpg">
        </label>

        <label  class="block">
          <input type="radio" name="color" value="Sunrise Orange">
          <img height="50px" width="50px" src="images/custom/colors/Sunrise Orange.jpg">
        </label>

        <label  class="block">
          <input type="radio" name="color" value="Urban Ruby">
          <img height="50px" width="50px" src="images/custom/colors/Urban Ruby.jpg">
        </label>

    </div>
      </div>

    </div>
      </div>

    <div class="col-md-8">
      
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active"> <img id="1a" height="500px"  style="margin-left:200px;margin-top:70px;" src="images/custom/yseries/Angel Blue/MAIN.jpg"> </div>
            <div class="item"> <img id="2a" height="500px" style="margin-left:200px;margin-top:70px;" src= "images/custom/yseries/Angel Blue/PTO1.jpg"> </div>
            <div class="item"> <img id="3a" height="500px" style="margin-left:200px;margin-top:70px;" src= "images/custom/yseries/Angel Blue/PTO2.jpg"> </div>
            <div class="item"> <img id="4a" height="500px" style="margin-left:200px;margin-top:70px;" src= "images/custom/yseries/Angel Blue/PTO3.jpg"> </div>
            
                 
          </div>
        </div>

        <div class="clearfix">
          <div id="thumbcarousel" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
              <div class="item active">
                <div data-target="#carousel" data-slide-to="0" class="thumb"><img height="50px" id="1b" src= "images/custom/yseries/Angel Blue/MAIN.jpg"></div>
                <div data-target="#carousel" data-slide-to="1" class="thumb"><img height="50px" id="2b" src= "images/custom/yseries/Angel Blue/PTO1.jpg"></div>
                <div data-target="#carousel" data-slide-to="2" class="thumb"><img height="50px" id="3b" src= "images/custom/yseries/Angel Blue/PTO2.jpg"></div>
                <div data-target="#carousel" data-slide-to="3" class="thumb"><img height="50px" id="4b" src= "images/custom/yseries/Angel Blue/PTO3.jpg"></div>
                
              </div>
              
            <!-- /carousel-inner --> 
            <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> </a> <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i> </a> </div>
            <!-- /thumbcarousel --> 
          
          </div>
        </div>

      </div> <!-- col ends-->

      <div class="col-md-2">

      <div class="patternSelector text-right " style="margin-top: 10px">

        <label class="block">
          
          <img height="75px" width="75px" src="images/custom/patterns/Batik in Champagne Gold.jpg">
          <input type="radio" name="pattern" value="Batik in Champagne Gold" checked>
        </label>

        <label  class="block">
          
          <img height="75px" width="75px" src="images/custom/patterns/Batik in Urban Ruby.jpg">
          <input type="radio" name="pattern" value="Batik in Urban Ruby">
        </label>

        <label  class="block">
          
          <img height="75px" width="75px" src="images/custom/patterns/Cherry Blossom.jpg">
          <input type="radio" name="pattern" value="Cherry Blossom Sakura">
        </label>

        <label  class="block">
          <img height="75px" width="75px" src="images/custom/patterns/Flowers in Sunflower.jpg">
          <input type="radio" name="pattern" value="Flowers in Sunflower Yellow">

        </label>

        <label  class="block">
         
          <img height="75px" width="75px" src="images/custom/patterns/Paisley in Lilac.jpg">
           <input type="radio" name="pattern" value="Paisley in Lilac">
        </label>

      </div>
        </div>

  </div> <!-- row ends-->
  
  </div>

 </div> 

		<div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

	</main>

@endsection

@section('js')

<script>


$(document).on('click', 'input[name="color"]',function(){

    var dir = "images/custom/yseries/";
    var colorName = $(this).val();
    var files = ['MAIN.jpg','PTO1.jpg','PTO2.jpg','PTO3.jpg'];

    fillSlider(dir,colorName,files);

  });

  $(document).on('click', 'input[name="pattern"]',function(){

    var dir = "images/custom/yseriespattern/";
    var colorName = $(this).val();

    var res = colorName.split(" ");
    var r = res[res.length -1];
    r = r.toLowerCase();

    var files = [ r + '.png', r + '_angle.png',r + '_close.png',r + '_front.png'];

    fillSlider(dir,colorName,files);

  });



  var fillSlider = function (dir,colorName,files) {

  
    
  $.each(files, function(index,value){

  var i = index+1;

  var img = $('#' + i.toString() + 'a');
  var img2 = $('#'+ i.toString() + 'b');

  img.attr('src', dir + colorName +"/"+ files[index]);
  img2.attr('src',dir + colorName +"/"+ files[index]);

  });

   
    
  }
    
</script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" ></script>


@endsection
