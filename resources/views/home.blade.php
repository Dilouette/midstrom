@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="header">
    <div class="container header-container">
        <div class="col-md-6 header-title-section">
            <p class="header-subtitle">Shape Your Future</p>
            <h1 class="header-title"><span>Set yourself apart</span><br> from the crowd.</h1>
            <p class="header-title-text">Midstrom Ridge sets you on the path to earning a degree with higher global acceptance from the best destinations in the world. We’re a full service overseas education consultancy firm which means we’ve got you covered on all international study needs.</p>
            <div class="learn-more-btn-section">
                <a class="nav-link learn-more-btn btn-header" href="#about">Get Started Now</a>
            </div>
        </div>
        <div class="col-md-6 header-img-section">
            <img src="assets/images/hero-alt.svg">
        </div>
    </div>
</div>
<div class="header-bottom">
    <div class="container header-bottom-container">
        <div class="col-md-12 header-title-section">
            <h2 class="header-bottom-title">Our Partner Institutions</h2>
        </div>
        <div class="header-slider">
            <div class="owl-carousel owl-theme header-slider-section">
                <div class="item header-bottom-logo-section">
                    <img src="{{ asset('assets/images/partners/athlone-institute-of-technology.png') }}">
                </div>
                <div class="item header-bottom-logo-section">
                    <img src="{{ asset('assets/images/partners/dbs.png') }}">
                </div>
                <div class="item header-bottom-logo-section">
                    <img src="{{ asset('assets/images/partners/de-montfort.png') }}">
                </div>
                <div class="item header-bottom-logo-section">
                    <img src="{{ asset('assets/images/partners/difc-logo.png') }}">
                </div>
                <div class="item header-bottom-logo-section">
                    <img src="{{ asset('assets/images/partners/eu-business-school-logo.png') }}">
                </div>
                <div class="item header-bottom-logo-section">
                    <img src="{{ asset('assets/images/partners/gcu.png') }}">
                </div>
                <div class="item header-bottom-logo-section">
                    <img src="{{ asset('assets/images/partners/gloucestershire.png') }}">
                </div>
                <div class="item header-bottom-logo-section">
                    <img src="{{ asset('assets/images/partners/griffit.png') }}">
                </div>
                <div class="item header-bottom-logo-section">
                    <img src="{{ asset('assets/images/partners/hull.png') }}">
                </div>
                <div class="item header-bottom-logo-section">
                    <img src="{{ asset('assets/images/partners/into.png') }}">
                </div>
                <div class="item header-bottom-logo-section">
                    <img src="{{ asset('assets/images/partners/kpu.png') }}">
                </div>
                <div class="item header-bottom-logo-section">
                    <img src="{{ asset('assets/images/partners/limerick.png') }}">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="about"></div>
<div class="prevideo-section">
    <div class="container prevideo-container">
    </div>
</div>
<div class="video-section">
    <div class="container video-container">
        <div class="col-md-6 video-title-section">
            <p class="video-number"></p>
            <h2 class="video-title">Why choose us?</h2>
            <p>With more than ten years of knowledge and expertise in overseas education consultancy, we have an impressive track record of successfully helping students study courses in various universities across the globe!</p>
            <div class="learn-more-btn-section">
                <a class="nav-link learn-more-btn" href="#features">View our services</a>
            </div>
        </div>
        <div class="col-md-5 offset-1 col-sm-12">
            <div class="video-header-img">
                <img src="{{ asset('assets/images/anouncement.svg') }}">
            </div>
        </div>
    </div>
</div>
<div class="stats-section">
    <div class="container stats-container p-0">
        <div class="col-lg-3 col-md-6 col-xs-8 offset-xs-2 stats-card-section">
            <div class="stats-card">
                <h2>8,500</h2>
                <p>Happy Clients</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-8 offset-xs-2 stats-card-section">
            <div class="stats-card">
                <h2>9,470</h2>
                <p>Visa Processed</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-8 offset-xs-2 stats-card-section">
            <div class="stats-card">
                <h2>6,120</h2>
                <p>Admissons Granted</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-8 offset-xs-2 stats-card-section">
            <div class="stats-card">
                <h2>9800</h2>
                <p>Tickets Processed</p>
            </div>
        </div>
    </div>
</div>
<div class="about-section">
    <div class="container about-container">
        <div class="col-md-6 about-title-section">
            <p class="about-number"></p>
            <h2 class="about-title">Full service overseas education consultancy</h2>
            <p class="about-text">In a dynamic and global work environment, the boundaries and walls between countries, businesses and people are disappearing. Getting new skills and acquiring knowledge about new places and cultures has become mandatory. We are here to serve and we will go all the way to make sure you get more than you bargain</p>
            <div class="learn-more-btn-section mt-5">
                <a class="nav-link learn-more-btn" href="#innovate">Get Started</a>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <p class="about-text">
                <img src="{{ asset('assets/images/bibliophilia.svg') }}">
            </p>
        </div>
    </div>
</div>
<div id="services"></div>
<div class="features-section">
    <div class="container features-container">
        <div class="col-md-12 features-title-section">
            <p class="features-subtitle">What We Offer</p>
            <h2 class="features-title">Our Services</h2>
        </div>
        <div class="col-md-4 col-sm-12 mb-5">
            <div class="ft-1">
                <h3>Student Advisory</h3>
                <p class="features-text">We consider your unique circumstances to make sure you get the best advice on course of study and study destination</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-5">
            <div class="ft-2">
                <h3>Admission Processing</h3>
                <p class="features-text">We process your application to your institution of choice. We work towards a quick turnaround admission period of 5- 10 days.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-5">
            <div class="ft-3">
                <h3>Visa Processing</h3>
                <p class="features-text">We spare you the ambiguity and confusion by ensuring that your visa application is top quality with the best chance of approval.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-5">
            <div class="ft-4">
                <h3>Accommodation Service</h3>
                <p class="features-text">We believe a right accommodation helps you settle in well for your studies. We help you secure a decent accommodation at a good price.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-5">
            <div class="ft-5">
                <h3>Pre Depature Briefing</h3>
                <p class="features-text">A new environment can be confusing. We prepare you on how to find your way around and settle in quickly so you can hit the ground running.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mb-5">
            <div class="ft-6">
                <h3>Tours & Summer School</h3>
                <p class="features-text">Get new skills or learn about new places and cultures. Our partners across the globe are eager to receive students from Nigeria next summer.</p>
            </div>
        </div>
        <div class="offset-md-4 col-md-4 col-sm-12 mb-5">
            <div class="ft-2">
                <h3>Travel & Ticketing</h3>
                <p class="features-text">We will book your ticket and give you a whole lot of travel information and briefings that would make you settle in quickly and function properly during your stay.</p>
            </div>
        </div>
    </div>
</div>
<div id="cta"></div>
<div class="cta-section">
    <div class="container cta-container">
        <div class="col-md-9 cta-title-section">
            <h2 class="cta-title">Ready To <span>Jumpstart</span> Your Career?<br> Start Your Application Today!</h2>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="learn-more-btn-section justify-content-end">
                <a class="nav-link learn-more-btn btn-header w-100" href="#contact"><i class="fa fa-rocket"
                        aria-hidden="true"></i> Start Now</a>
            </div>
        </div>
    </div>
</div>
<div id="testimonials"></div>
<div class="testimonials-section">
    <div class="container testimonials-container">
        <div class="col-md-12 testimonials-title-section">
            <p class="testimonials-subtitle">Our Clients Love Us</p>
            <h2 class="testimonials-title">Testimonials</h2>
        </div>
        <div class="col-md-4">
            <div class="testimonials-img">
                <img src="{{ asset('assets/images/testimonial.svg') }}">
            </div>
        </div>
        <div class="col-md-7 offset-md-1">
            <div class="testimonials-card">
                <h3>Julia Hollywood</h3>
                <p class="testimonials-role">Chief executive officer</p>
                <p class="testimonials-text">Duis felis nulla, porttitor et ex a, porttitor rhoncus ex. Sed tellus
                    turpis, finibus in elit rhoncus, varius cursus enim. Sed tempus sapien in.</p>
            </div>
        </div>
        <!-- Second Row -->
        <div class="col-md-12">
            <div class="testimonials-divider"></div>
        </div>
        <div class="col-md-7">
            <div class="testimonials-card">
                <h3>Florence Anderson</h3>
                <p class="testimonials-role">Marketing director</p>
                <p class="testimonials-text">Duis felis nulla, porttitor et ex a, porttitor rhoncus ex. Sed tellus
                    turpis, finibus in elit rhoncus, varius cursus enim. Sed tempus sapien in.</p>
            </div>
        </div>
        <div class="col-md-4 offset-md-1">
            <div class="testimonials-img">
                <img src="{{ asset('assets/images/testimonial.svg') }}">
            </div>
        </div>
    </div>
</div>
<div id="faq"></div>
<div class="faq-section">
    <div class="container faq-container">
        <div class="col-md-12 faq-title-section">
            <p class="faq-subtitle">We're here to help</p>
            <h2 class="faq-title">Frequently asked questions</h2>
        </div>
        <div class="col-md-8">
            <div class="faq-accordion">
                <button class="accordion">
                    1. Question One?
                </button>
                <div class="panel"><p>
                    Use this section to answer some of your customers most frequently asked questions in a compact and concise manner. There's plenty of space for you to add more questions.
                </p></div>
                <button class="accordion">
                    2. Question Two?
                </button>
                <div class="panel"><p>
                    Use this section to answer some of your customers most frequently asked questions in a compact and concise manner. There's plenty of space for you to add more questions.
                </p></div>
                <button class="accordion">
                    3. Question Three?
                </button>
                <div class="panel"><p>
                    Use this section to answer some of your customers most frequently asked questions in a compact and concise manner. There's plenty of space for you to add more questions.
                </p></div>
                <button class="accordion">
                    4. Question Four?
                </button>
                <div class="panel"><p>
                    Use this section to answer some of your customers most frequently asked questions in a compact and concise manner. There's plenty of space for you to add more questions.
                </p></div>
                <button class="accordion">
                    5. Question Five?
                </button>
            </div>
        </div>
        <div class="col-md-4">
            <p class="faq-text">
            <img src="assets/images/faq.svg" width="100%">
            </p>
        </div>
    </div>
</div>
<div id="contact"></div>
<div class="contact-section">
    <div class="container contact-container">
        <div class="col-md-9 contact-title-section">
            <h2 class="contact-title">Questions not listed above? Send us a message and we'll get back to you</h2>
        </div>
        <div class="col-md-3">
            <div class="learn-more-btn-section">
                <a class="nav-link learn-more-btn btn-header w-100" href="mailto:info@midstromridge.com"><i
                        class="fa fa-paper-plane" aria-hidden="true"></i> Contact Us</a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection

