@extends('layouts.User.user_design')
@section('content')

<div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>The Best <br>Medical Services</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                        <a href="#" class="button gradient-bg">Read More</a>
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->

                <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>The Best <br>Medical Services</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                        <a href="#" class="button gradient-bg">Read More</a>
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->

                <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>The Best <br>Medical Services</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                        <a href="#" class="button gradient-bg">Read More</a>
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->
            </div><!-- .swiper-wrapper -->

            <div class="pagination-wrap position-absolute w-100">
                <div class="swiper-pagination d-flex flex-row flex-md-column"></div>
            </div><!-- .pagination-wrap -->
        </div><!-- .hero-slider -->
    </header><!-- .site-header -->

    <div class="homepage-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Opening Hours</h2>

                        <ul class="p-0 m-0">
                            <li>Monday - Thursday <span>8.00 - 19.00</span></li>
                            <li>Friday <span>8.00 - 18.30</span></li>
                            <li>Saturday <span>9.30 - 17.00</span></li>
                            <li>Sunday <span>9.30 - 15.00</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                    <div class="emergency-box">
                        <h2 class="d-flex align-items-center">Emergency</h2>

                        <div class="call-btn button gradient-bg">
                            <a class="d-flex justify-content-center align-items-center" href="#"><img src="images/emergency-call.png"> +34 586 778 8892</a>
                        </div>

                        <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem maximus mauris sceler isque, at rutrum nulla.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 mt-5 mt-lg-0">
                    <div class="appointment-box">
                        <h2 class="d-flex align-items-center">Finda A Docotor</h2>

                        <form class="d-flex flex-wrap justify-content-between">

                        <input type="text" placeholder="Name">

                            <select class="select-department">
                                <option value="value1">Select Department</option>
                                <option value="value2">Select Department 1</option>
                                <option value="value3">Select Department 2</option>
                            </select>
                                                                    
                            <input class="button gradient-bg" type="submit" value="Find">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="our-departments">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="our-departments-wrap">
                        <h2>Our Departments</h2>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/cardiogram.png" alt="">

                                        <h3>Cardioology</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/stomach-2.png" alt="">

                                        <h3>Gastroenterology</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/blood-sample-2.png" alt="">

                                        <h3>Medical Lab</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/teeth.png" alt="">

                                        <h3>Dental Care</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/stretcher.png" alt="">

                                        <h3>Surgery</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/scanner.png" alt="">

                                        <h3>Neurology</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-md-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/bones.png" alt="">

                                        <h3>Orthopaedy</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-lg-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/blood-donation-2.png" alt="">

                                        <h3>Pediatry</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="images/glasses.png" alt="">

                                        <h3>Ophthalmology</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="#">read more</a>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Pacient’s Testimonials</h2>
                </div>
            </div>
        </div>

        <!-- Swiper -->
        <div class="testimonial-slider">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="testimonial-bg-shape">
                            <div class="swiper-container testimonial-slider-wrap">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo.</p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-footer">
                                            <figure class="user-avatar">
                                                <img src="{{ url('images/user-1.jpg') }}" alt="">
                                            </figure><!-- .user-avatar -->

                                            <h3 class="testimonial-user">Russell Stephens <span>University in UK</span></h3>
                                        </div><!-- .entry-footer -->
                                    </div><!-- .swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo.</p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-footer">
                                            <figure class="user-avatar">
                                                <img src="{{ url('images/user-2.jpg') }}" alt="">
                                            </figure><!-- .user-avatar -->

                                            <h3 class="testimonial-user">Russell Stephens <span>University in UK</span></h3>
                                        </div><!-- .entry-footer -->
                                    </div><!-- .swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo.</p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-footer">
                                            <figure class="user-avatar">
                                                <img src="images/user-3.jpg" alt="">
                                            </figure><!-- .user-avatar -->

                                            <h3 class="testimonial-user">Russell Stephens <span>University in UK</span></h3>
                                        </div><!-- .entry-footer -->
                                    </div><!-- .swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="entry-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo.</p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-footer">
                                            <figure class="user-avatar">
                                                <img src="images/user-4.jpg" alt="">
                                            </figure><!-- .user-avatar -->

                                            <h3 class="testimonial-user">Russell Stephens <span>University in UK</span></h3>
                                        </div><!-- .entry-footer -->
                                    </div><!-- .swiper-slide -->
                                </div><!-- .swiper-wrapper -->

                                <div class="swiper-pagination-wrap">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="swiper-pagination position-relative flex justify-content-center align-items-center"></div>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div><!-- .container -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .testimonial-slider -->
    </section><!-- .testimonial-section -->

    <div class="the-news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>The News</h2>

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-1.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>The latest in Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-2.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>All you need to know about pills</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-3.png" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Marketing and Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="subscribe-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <h2>Subscribe to our newsletter</h2>

                    <form>
                        <input type="email" placeholder="E-mail address">
                        <input class="button gradient-bg" type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
 
@endsection