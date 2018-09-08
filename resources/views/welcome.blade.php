@extends('layouts.HomeApp');
@section('content')
            <!-- jumbotron -->
        <div id="home" class="py-6 text-center text-light" style="background-image: url(https://a1pager.com/img/5b458893c2229-1531283603.jpg); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="h2 text-uppercase">Lorem ipsum dolor sit</h1>            <p class="lead">Mauris tincidunt, diam ut vulputate ullamcorper, risus.</p>            <a href="#about" class="btn btn-primary btn-lg">Learn More</a>            <a href="#contact" class="btn btn-primary btn-lg">Contact Us</a>
        </div>
    </div>


    <!-- about -->
            <div id="about" class="py-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="text-center text-uppercase mb-4-5">About Us</h2>
                        <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt, diam ut vulputate ullamcorper, risus risus hendrerit tellus, sed accumsan eros turpis eget odio. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                </div>
            </div>
        </div>

    <!-- features -->
            <div id="features" class="pt-5 pb-4 text-center bg-light">
            <div class="container">
                <h2 class="text-uppercase mb-4-5">Our Features</h2>
                <div class="row">
                                            <div class="col-md-3 mb-4">
                            <span class="fa-stack fa-3x mb-2">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-bolt fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4>Fast</h4>                            <p class="mb-0">Our company gets things done extremely quickly.</p>                        </div>
                                            <div class="col-md-3 mb-4">
                            <span class="fa-stack fa-3x mb-2">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="far fa-life-ring fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4>Safe</h4>                            <p class="mb-0">We strictly follow all safety rules and regulations.</p>                        </div>
                                            <div class="col-md-3 mb-4">
                            <span class="fa-stack fa-3x mb-2">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-dollar-sign fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4>Affordable</h4>                            <p class="mb-0">Our prices are competitive and fair for both of us.</p>                        </div>
                                            <div class="col-md-3 mb-4">
                            <span class="fa-stack fa-3x mb-2">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-heartbeat fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4>Caring</h4>                            <p class="mb-0">Customer support and satisfaction is very important to us.</p>                        </div>
                                    </div>
            </div>
        </div>

    <!-- image gallery -->
            <div id="images" class="pt-5 pb-4 ">
            <div class="container">
                <h2 class="text-center text-uppercase mb-4-5">Image Gallery</h2>
                <div class="row">
                                            <div class="col-md-3 mb-4">
                            <img src="https://a1pager.com/img/5b4588c137994-1531283649.jpg" class="w-100 rounded">
                        </div>
                                            <div class="col-md-3 mb-4">
                            <img src="https://a1pager.com/img/5b4588c15d881-1531283649.jpeg" class="w-100 rounded">
                        </div>
                                            <div class="col-md-3 mb-4">
                            <img src="https://a1pager.com/img/5b4588c186528-1531283649.jpeg" class="w-100 rounded">
                        </div>
                                            <div class="col-md-3 mb-4">
                            <img src="https://a1pager.com/img/5b4588c1a8e81-1531283649.jpeg" class="w-100 rounded">
                        </div>
                                    </div>
            </div>
        </div>
        <div id="images_modal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="https://a1pager.com/img/5b4588c137994-1531283649.jpg" class="w-100 rounded">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- staff -->
            <div id="staff" class="pt-5 pb-4 bg-light">
            <div class="container">
                <h2 class="text-center text-uppercase mb-4-5">Our Staff</h2>
                <div class="row">
                                            <div class="col-md-3 mb-4">
                            <img src="https://a1pager.com/img/default-staff-1.jpg" class="w-100 mb-3 rounded">
                            <div class="text-center">
                                <h4 class="mb-0">Joe</h4>                                <p class="text-secondary">Owner</p>                            </div>
                            <p class="mb-0">Joe makes sure that day-to-day operations run smoothly. He is our guiding light.</p>                        </div>
                                            <div class="col-md-3 mb-4">
                            <img src="https://a1pager.com/img/default-staff-2.jpg" class="w-100 mb-3 rounded">
                            <div class="text-center">
                                <h4 class="mb-0">Shannon</h4>                                <p class="text-secondary">Manager</p>                            </div>
                            <p class="mb-0">Shannon is in charge of production oversight and scheduling. Nothing gets done without her.</p>                        </div>
                                            <div class="col-md-3 mb-4">
                            <img src="https://a1pager.com/img/5b458938e2c2b-1531283768.jpeg" class="w-100 mb-3 rounded">
                            <div class="text-center">
                                <h4 class="mb-0">Lucas</h4>                                <p class="text-secondary">Head Chef</p>                            </div>
                            <p class="mb-0">Lucas produces all of the goods you know and love. From concept to final product.</p>                        </div>
                                            <div class="col-md-3 mb-4">
                            <img src="https://a1pager.com/img/5b458946ace7f-1531283782.jpeg" class="w-100 mb-3 rounded">
                            <div class="text-center">
                                <h4 class="mb-0">Mike</h4>                                <p class="text-secondary">Bartender</p>                            </div>
                            <p class="mb-0">Mike prepares all of the finest drinks so that you can enjoy your evening with us.</p>                        </div>
                                    </div>
            </div>
        </div>

    <!-- testimonials -->
            <div id="testimonials" class="py-5 text-center ">
            <div class="container">
                <h2 class="text-center text-uppercase mb-4-5">Testimonials</h2>
                <div id="carouselTestimonials" class="carousel slide" data-ride="carousel" data-interval="7500">
                    <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-8 offset-2">
                                        <img src="https://a1pager.com/img/default-test-1.jpg" class="mb-3 rounded-circle" height="100">
                                        <p class="lead font-italic">Fantastic, I am totally blown away by this company! Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>                                        <p class="mb-0">&ndash; Steve, New York</p>                                    </div>
                                </div>
                            </div>
                                                    <div class="carousel-item">
                                <div class="row">
                                    <div class="col-8 offset-2">
                                        <img src="https://a1pager.com/img/default-test-2.jpg" class="mb-3 rounded-circle" height="100">
                                        <p class="lead font-italic">10/10 I have recommended this company to everyone I know! Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>                                        <p class="mb-0">&ndash; Jane, Toronto</p>                                    </div>
                                </div>
                            </div>
                                                    <div class="carousel-item">
                                <div class="row">
                                    <div class="col-8 offset-2">
                                        <img src="https://a1pager.com/img/default-test-3.jpg" class="mb-3 rounded-circle" height="100">
                                        <p class="lead font-italic">This company provides the best service in the industry! Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>                                        <p class="mb-0">&ndash; Mikaela, Dubai</p>                                    </div>
                                </div>
                            </div>
                                            </div>
                    <a class="carousel-control-prev text-dark" href="#carouselTestimonials" role="button" data-slide="prev">
                        <i class="fa fa-lg fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control-next text-dark" href="#carouselTestimonials" role="button" data-slide="next">
                        <i class="fa fa-lg fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

    <!-- contact -->
    <div id="contact" class="pt-5 pb-4 bg-light">
        <div class="container">
            <h2 class="text-center text-uppercase mb-4-5">Contact Us</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <p>Please feel free to get in touch with us today!</p>                    <ul class="list-unstyled lead mb-0">
                                                    <li class="mb-2">
                                <a href="tel:+255 777 427450" class="text-decoration-none">
                                    <i class="fa fa-fw fa-phone"></i> +255 777 427450
                                </a>
                            </li>
                                                                            <li class="mb-2">
                                <a href="mailto:webmaster@forestspemba.org" class="text-decoration-none">
                                    <i class="fa fa-fw fa-envelope"></i> webmaster@forestspemba.org
                                </a>
                            </li>
                                                                            <li class="mb-2">
                                <a href="https://www.google.ca/maps?q=1+Yonge+St%2C+Toronto%2C+ON" target="_blank" class="text-decoration-none">
                                    <i class="fa fa-fw fa-map-marker-alt"></i>

Location
Plot 56 Minyenyeni
P.O. Box 177
Wete, Pemba, Zanzibar
Tanzania
                                </a>
                            </li>
                                                                            <li>
                                <i class="fa fa-fw fa-clock"></i> 9am-5pm Monday-Friday
                            </li>
                                            </ul>
                </div>
                <div class="col-md-8 mb-4">
                                            <iframe src="https://www.google.ca/maps?q=1+Yonge+St%2C+Toronto%2C+ON&output=embed" width="100%" height="240" frameborder="0" allowfullscreen></iframe>
                                    </div>
            </div>
        </div>
    </div>

    <!-- social -->
            <div id="social" class="pt-5 pb-4 bg-primary">
            <div class="container">
                <h2 class="text-center text-uppercase text-light mb-4-5">Like &amp; Follow Us</h2>
                <div class="row justify-content-center">
                                                                        <div class="col-auto mb-4">
                                <a href="https://www.facebook.com/COMMUNITYFORESTSPEMBA" class="text-light" target="_blank">
                                    <i class="fab fa-3x fa-facebook"></i>
                                </a>
                            </div>
                                                                                                <div class="col-auto mb-4">
                                <a href="https://instagram.com/mycompany" class="text-light" target="_blank">
                                    <i class="fab fa-3x fa-instagram"></i>
                                </a>
                            </div>
                                                                                                <div class="col-auto mb-4">
                                <a href="https://twitter.com/mycompany" class="text-light" target="_blank">
                                    <i class="fab fa-3x fa-twitter"></i>
                                </a>
                            </div>
                                                                                                                                                                                                </div>
            </div>
        </div>
@endsection
