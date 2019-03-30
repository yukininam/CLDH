@extends('layouts.User.user_design')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>


    <section class="content container-fluid">

    <div id="my_carousel" class="carousel slide">

	  <ol class="carousel-indicators">
  		  <li data-target = "#my_carousel" data-slide-to = "0" class="active"></li>
  		  <li data-target = "#my_carousel" data-slide-to = "1"></li>
 		  <li data-target = "#my_carousel" data-slide-to = "2"></li>
 		  <li data-target = "#my_carousel" data-slide-to = "3"></li>
 		  <li data-target = "#my_carousel" data-slide-to = "4"></li>
	  </ol>

 	 <div class="carousel-inner i">

    		<div class = "item active">
        		<img src="{{url('images/Naruto/Untitled-1.jpg')}}" alt ="Reload" class ="img-responsive" />
        			<div class="carousel-caption">
        				<h2>Lorem ipsum</h2>
        				<footer>Lorem ipsum </footer>
      				</div>
    		</div>

   		  	<div class = "item">
   	     		<img src="{{url('images/Naruto/Untitled-2.jpg')}}" alt ="Reload" class ="img-responsive" />
        			<div class="carousel-caption">
        				<h2>Lorem ipsum</h2>
        				<footer>Lorem ipsum </footer>
      				</div>
    	  	</div>

   		   	<div class = "item">
        		<img src="{{url('images/Naruto/Untitled-3.jpg')}}" alt ="Reload" class ="img-responsive" />
        			<div class="carousel-caption">
     		   			<h2>Lorem ipsum</h2>
    	    			<footer>Lorem ipsum</footer>
    	  			</div>
    	  	</div>

    	  	<div class = "item">
        		<img src="{{url('images/Naruto/Untitled-4.jpg')}}" alt ="Reload" class ="img-responsive" />
        			<div class="carousel-caption">
     		   			<h2>Lorem ipsum</h2>
    	    			<footer>Lorem ipsum</footer>
    	  			</div>
    	  	</div>

			<div class = "item">
        		<img src="{{url('images/Naruto/Untitled-5.jpg')}}" alt ="Reload" class ="img-responsive" />
        			<div class="carousel-caption">
     		   			<h2>Lorem ipsum</h2>
    	    			<footer>Lorem ipsum</footer>
    	  			</div>
    	    </div>


  		</div>

    	<a class="carousel-control left" href="#my_carousel" data-slide = "prev">
   			<span class="icon-prev left"></span>
  		</a>

  		<a class="carousel-control right" href="#my_carousel" data-slide = "next">
    		<span class="icon-next right"></span>
  		</a>
	</div>


    </section>

  </div>

@endsection