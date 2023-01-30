@extends('client.dashboard.index')
@section('client_content')
            <section class="hero">
                <div class="container-fluid h-100">
                    <div class="row h-100">

                        <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container position-relative h-100">
                                        <div class="carousel-caption d-flex flex-column justify-content-center">
                                            <small class="small-title">Introducing Waso Strategy <strong class="text-warning">01/05</strong></small>

                                            <h1>Explore <span class="text-warning">new ideas</span> for your business</h1>

                                            <div class="d-flex align-items-center mt-4">
                                                <a class="custom-btn btn custom-link" href="#section_2">Get Started</a>

                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-image-wrap">
                                        <img src="../waso/images/slide/christina-wocintechchat-com-NDoVgcS_lZM-unsplash.jpg" class="img-fluid carousel-image" alt="">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="container position-relative h-100">
                                        <div class="carousel-caption d-flex flex-column justify-content-center">
                                            <small class="small-title">Supporting New Project <strong class="text-warning">01/05</strong></small>

                                            <h1>Strategic Planning for your <span class="text-warning">next project</span></h1>

                                            <div class="d-flex align-items-center mt-4">
                                                <a class="custom-btn btn custom-link" href="#section_2">Explore Capabilities</a>

                                                <a class="popup-youtube custom-icon d-flex ms-4" href="https://www.youtube.com/watch?v=VStvZjykQ00">
                                                    <i class="bi-play play-icon d-flex m-auto text-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-image-wrap">
                                        <img src="../waso/images/slide/jason-goodman-0K7GgiA8lVE-unsplash.jpg" class="img-fluid carousel-image" alt="">
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            @endsection
