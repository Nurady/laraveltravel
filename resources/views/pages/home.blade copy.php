@extends('layouts.app')

@section('title')
    NOMADS
@endsection

@section('content')
    <!-- Header-Hero -->
    <header>
        <div class="container">
            <h1>Explore the Beautiful World<br>As Easy One Click</h1>
            <p class="mt-3">You will see beautiful moment <br> you never see before</p>
            <a href="#popular" class="btn btn-get-started px-4 mt-4">Get Started</a>
        </div>      
    </header>
    <!-- Akhir Header-Hero -->

    <!-- Main -->
    <main>
        <div class="container">
            <section class="stats" id="stats">
                <div class="row justify-content-center">
                    <div class="col-3 col-md-2 stats-detail">
                        <h2>20K</h2>
                        <p>Members</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail">
                        <h2>12</h2>
                        <p>Countries</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail">
                        <h2>3K</h2>
                        <p>Hotels</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail">
                        <h2>7</h2>
                        <p>Partners</p>
                    </div>
                </div>               
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try<br>before in this world</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popular-content">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-tavel text-center d-flex flex-column" style="background-image: url('frontend/images/popular7.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">WEST SUMBAWA</div>
                            <div class="travel-button mt-auto">
                                <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-tavel text-center d-flex flex-column" style="background-image: url('frontend/images/popular2.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">SUMBAWA</div>
                            <div class="travel-button mt-auto">
                                <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-tavel text-center d-flex flex-column" style="background-image: url('frontend/images/popular6.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">WEST SUMBAWA</div>
                            <div class="travel-button mt-auto">
                                <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-tavel text-center d-flex flex-column" style="background-image: url('frontend/images/popular5.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">SUMBAWA</div>
                            <div class="travel-button mt-auto">
                                <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </section>

        <section class="section-network">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Network</h2>
                        <p>Companies are trusted us <br> more than just a trip</p>
                    </div>
                    <div class="col-md-2 text-center align-self-center">
                        <img src="{{url('frontend/images/ana.png')}}" class="img-partner">                       
                    </div>  
                    <div class="col-md-2 text-center align-self-center">
                        <img src="{{url('frontend/images/disney.png')}}" class="img-partner">                       
                    </div> 
                    <div class="col-md-2 text-center align-self-center">
                        <img src="{{url('frontend/images/shangri-la.png')}}" class="img-partner">                       
                    </div> 
                    <div class="col-md-2 text-center align-self-center">
                        <img src="{{url('frontend/images/visa.png')}}" class="img-partner">                       
                    </div>                   
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Moments were giving them<br>the best experience</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="section section-testimonial-content" id="testimonial-content">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{url('frontend/images/user_pic1.png')}}" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Angga Rizki</h3>
                                <p class="testimonial">
                                    “ The trip was amazing and I saw something beautiful in that Island that makes me want to learn more “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To West Sumbawa
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{url('frontend/images/user_pic2.png')}}" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shayna</h3>
                                <p class="testimonial">
                                    “ The trip was amazing and
                                    I saw something beautiful in
                                    that Island that makes me
                                    want to learn more “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Moyo Island
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{url('frontend/images/user_pic3.png')}}" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shabrina</h3>
                                <p class="testimonial">
                                    “ I loved it when the waves was shaking harder — I was scared too “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Trophical Beach
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Akhir Main -->
@endsection