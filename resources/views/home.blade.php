@extends('master')
@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="row banner">

            <div class="col-md-12">
            	@if (isset($errors) && $errors->any())
                		@foreach ($errors->all() as $error)
                    		<p class="alert alert-danger">{{ $error }}</p>
                		@endforeach
						@endif
                		@if (session('status'))
                    		<div class="alert alert-success">
                        	{{ session('status') }}
                    		</div>
                		@endif

                <!-- works -->
<div id="works"  class=" clearfix grid" > 
    <figure class="effect-ruby  wowload fadeInUp" >
        <img src="images/portfolio/1.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Bandung</h6>
            <p>Cooming Soon<br>
            <a href="images/portfolio/1.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/2.jpg" alt="img01 " width="200" height="200"/>
        <figcaption>
            <h6>Jakarta</h6>
            <p>April 2016<br>
            <a href="images/portfolio/2.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-milo  wowload fadeInUp">
        <img src="images/portfolio/3.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Surabaya</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/3.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-bubba  wowload fadeInUp">
        <img src="images/portfolio/4.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Tangerang</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/4.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-romeo  wowload fadeInUp">
        <img src="images/portfolio/5.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>BSD</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/5.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     
     <figure class="effect-layla  wowload fadeInUp">
        <img src="images/portfolio/6.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Yogyakarta</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/6.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-dexter  wowload fadeInUp">
        <img src="images/portfolio/7.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Klaten</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/7.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-sarah  wowload fadeInUp">
        <img src="images/portfolio/8.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Bintaro</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/8.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-zoe  wowload fadeInUp">
        <img src="images/portfolio/9.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Papua</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/9.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-chico  wowload fadeInUp">
        <img src="images/portfolio/10.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Sumatra</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/10.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/11.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Sulawesi</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/11.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/12.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Indonesia</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/12.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
    <figure class="effect-ruby  wowload fadeInUp" >
        <img src="images/portfolio/1.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Bandung</h6>
            <p>Cooming Soon<br>
            <a href="images/portfolio/1.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/2.jpg" alt="img01 " width="200" height="200"/>
        <figcaption>
            <h6>Jakarta</h6>
            <p>April 2016<br>
            <a href="images/portfolio/2.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-milo  wowload fadeInUp">
        <img src="images/portfolio/3.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Surabaya</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/3.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-bubba  wowload fadeInUp">
        <img src="images/portfolio/4.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Tangerang</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/4.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-romeo  wowload fadeInUp">
        <img src="images/portfolio/5.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>BSD</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/5.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     
     <figure class="effect-layla  wowload fadeInUp">
        <img src="images/portfolio/6.jpg" alt="img01" width="200" height="200"/>
        <figcaption>
            <h6>Yogyakarta</h6>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="images/portfolio/6.jpg" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>
     
</div>
<!-- works -->

<!-- Cirlce Starts -->
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Creative digital agency based on London</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa fa-paint-brush"></i> Design</h4>
    <p>Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs, lead by passionate and uber progressive team that lives and breathes design. Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs.</p>
    

  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4><i class="fa fa-code"></i> Frontend & Backend Development</h4>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>    
  </div>
  </div>

  <div class="process">
  <h3 class="text-center wowload fadeInUp">Process</h3>
  <ul class="row text-center list-inline  wowload bounceInUp">
      <li>
            <span><i class="fa fa-history"></i><b>Research</b></span>
        </li>
        <li>
            <span><i class="fa fa-puzzle-piece"></i><b>Plan</b></span>
        </li>
        <li>
            <span><i class="fa fa-database"></i><b>Develop</b></span>
        </li>
        <li>
            <span><i class="fa fa-magic"></i><b>Integration</b></span>
        </li>        
        <li>
            <span><i class="fa fa-cloud-upload"></i><b>Deliver</b></span>
        </li>
    </ul>
  </div>
</div>
<!-- #Cirlce Ends -->



<!-- About Starts -->
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-smile-o  fa-5x"></i><h4>24 EventOrganizers</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-rocket  fa-5x"></i><h4>75 Shops</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-cloud-download  fa-5x"></i><h4>454 Events</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-map-marker fa-5x"></i><h4>2 Offices</h4>
  </div>
</div>
</div>
</div>
</div>
<!-- About Ends -->

<div id="partners" class="container spacer ">
	<h2 class="text-center  wowload fadeInUp">Some of our happy clients</h2>
  <div class="clearfix">
    <div class="col-sm-6 partners  wowload fadeInLeft">
         <img src="images/partners/1.jpg" alt="partners">
         <img src="images/partners/2.jpg" alt="partners">
         <img src="images/partners/3.jpg" alt="partners">
         <img src="images/partners/4.jpg" alt="partners">
    </div>
    <div class="col-sm-6">


    <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight" data-ride="carousel">
    <div class="carousel-inner">  
      <div class="item active animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/1.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>      
      <span>Angel Smith - <b>eshop Canada</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/2.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
      <span>John Partic - <b>Crazy Pixel</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="images/team/3.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.</p>
      <span>Harris David - <b>Jet London</b></span>
      </div>
      </div>
  </div>

   <!-- Indicators -->
   	<ol class="carousel-indicators">
    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
  	</ol>
  	<!-- Indicators -->
  </div>



    </div>
  </div>
</div>




<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" >
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev"><</a>
    <a class="next">></a>
    <a class="close">X</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>
                
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
            </div>

        </div>
    </div>

@endsection