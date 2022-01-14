@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="header">
    <div class="container header-container">
        <div class="col-md-6 header-title-section">
            <p class="header-subtitle">Shape Your Future</p>
            <h1 class="header-title"><span>Set yourself apart</span><br> from the crowd.</h1>
            <p class="header-title-text text-justify">Midstrom Ridge sets you on the path to earning a degree with higher global acceptance from the best destinations in the world. We’re a full service overseas education consultancy firm which means we’ve got you covered on all international study needs.</p>
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
            <p class="text-justify">With more than ten years of experience and expertise in overseas education consultancy, we have an impressive track record of successfully helping a great number of students study courses in various Universities across the globe.</p>
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
            <p class="about-text text-justify">In a dynamic and global work environment, the boundaries and walls between countries, businesses and people are disappearing.</p>
            <p class="about-text text-justify">Getting new skills and integrating into new places and cultures are important. We are here to serve and we will go all the way to make sure you get more than you bargain.</p>
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
                <p class="features-text">We spare you the ambiguity and waste of precious time by ensuring your visa application is top quality with the best chance of approval.</p>
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
        {{-- <div class="offset-md-4 col-md-4 col-sm-12 mb-5">
            <div class="ft-2">
                <h3>Travel & Ticketing</h3>
                <p class="features-text">We will book your ticket and give you a whole lot of travel information and briefings that would make you settle in quickly and function properly during your stay.</p>
            </div>
        </div> --}}
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
                <h3>Felix Awosope</h3>
                <p class="testimonials-role mb-0">MSc. Project Management</p>
                <p class="testimonials-role">University of Northampton, United Kingdom<br><small>(with work placement)</small></p>
                <p class="testimonials-text">I had doubts about getting help for my study abroad travel plan initially but a family friend introduced me to Midstrom Ridge overseas education consultant and I was not disappointed at all. </p>
            </div>
        </div>
        <!-- Second Row -->
        <div class="col-md-12">
            <div class="testimonials-divider"></div>
        </div>
        <div class="col-md-7">
            <div class="testimonials-card">
                <h3>Oluwaseyi Kolawole</h3>
                <p class="testimonials-role mb-0">M.Sc. Professional Nursing</p>
                <p class="testimonials-role">University of Hertfordshire, United Kingdom</p>
                <p class="testimonials-text">I cannot but appreciate Midstrom Ridge for all their efforts from getting an admission with 10years study gap to the CAS processing to the Visa processing, it was an amazing journey with them not forgetting that I am yet to meet any of the staff physically all was done virtually. </p>
            </div>
        </div>
        <div class="col-md-4 offset-md-1">
            <div class="testimonials-img">
                <img src="{{ asset('assets/images/testimonial.svg') }}">
            </div>
        </div>
        <!-- Third Row -->
        <div class="col-md-12">
            <div class="testimonials-divider"></div>
        </div>
        <div class="col-md-4">
            <div class="testimonials-img">
                <img src="{{ asset('assets/images/testimonials/david-afolabi.png') }}">
            </div>
        </div>
        <div class="col-md-7 offset-md-1">
            <div class="testimonials-card">
                <h3>David Afolabi</h3>
                <p class="testimonials-role mb-0">MSc. Computing (Software Engineering)</p>
                <p class="testimonials-role">University of Northampton</p>
                <p class="testimonials-text">I started everything like a joke but they were there for me whenever I needed information, from my admission process and through my visa application including my trip to the UK. My admission process was really a smooth one. No other agency does it better than Midstrom Ridge.</p>
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
                    1. How do I get an admission??
                </button>
                <div class="panel">
                    <p>To get an admission, an application has to be made after meeting the admission requirement for the University of your choice</p>
                    <p>You will provide us with the required information and upload your documents. This information and documents  will be assessed by the University, and an offer or admission letter sent to you if you meet the requirement.</p>
                </div>
                <button class="accordion">
                    2. Can I work while I study?
                </button>
                <div class="panel">
                    <p>Yes you can, depending on your study destination.</p>
                    <p>Countries like the United Kingdom, Ireland, USA Canada and Australia allows students to work up to 20 hours a week during school session and 40 hours a week during holidays.</p>
                </div>
                <button class="accordion">
                    3. What are the requirements for admission?
                </button>
                <div class="panel">
                    <p>You will need to meet the course requirement which includes assessment of your past studies and qualification.</p>
                    <p>
                        Apart from the course or school specific requirements, generally, you would need the following documents for your admission;
                    </p>
                    <p><strong>For Masters Degree:</strong></p>
                    <ul>
                        <li>B.Sc. Certificate</li>
                        <li>B.Sc. Transcript</li>
                        <li>CV / Resume</li>
                        <li>Personal Statement</li>
                        <li>O'level result</li>
                        <li>International Passport data page</li>
                        <li>2 reference letters (1 work, 1 academic)</li>
                        <li>English test result (for few selected programes)</li>
                    </ul>

                    <p><strong>For B.Sc / Foundation:</strong></p>
                    <ul>
                        <li>O'level result / certificate</li>
                        <li>CV / Resume</li>
                        <li>Personal Statement</li>
                        <li>English test (if required)</li>
                        <li>International Passport data page.</li>
                    </ul>

                    <p><strong>For PHD:</strong></p>
                    <ul>
                        <li>M.Sc. Certificate</li>
                        <li>M.Sc. Transcript</li>
                        <li>B.Sc. Certificate</li>
                        <li>B.Sc. Transcript</li>
                        <li>Research Proposal</li>
                        <li>CV</li>
                        <li>International Passport data page.</li>
                        <li>2 Reference Letters (Academic and Work)</li>
                    </ul>
                    <p class="alert alert-info">Please note that this requirements are subject to school or country specific requirements.</p>
                </div>
                <button class="accordion">
                    4. What will it cost me in terms of Tuition fees ?
                </button>
                <div class="panel">
                    <p>Tuition fees vary based on Course, University, and Country.</p>
                    <p>Science and Engineering courses are higher in  tuition fees than business and Art based courses. This is understandable when you consider Laboratory equipments and facilities required to teach such courses.</p>
                    <p>Countries Like Canada and US are usually more expensive due to the duration of courses. It will take you 4 years to complete a bachelor's degree and 2 years to complete a Master's degree compared to the United Kingdom which requires 3 years for Bachelor's and 1 year for Master's degree respectively.</p>
                    <p>Also note that highly rated Universities are very competitive  and attract premium tuition fees. Generally, the average tuition fees are as follows</p>
                    <ul>
                        <li>United Kingdom - £10,000 to £18,000 Per Annum</li>
                        <li>United States - $15,000 to $25,000 per annum</li>
                        <li>Ireland - €10,000 to €17,000 per annum</li>
                        <li>Canada - $15,000 to $20,000 (CAD USD) per annum.</li>
                    </ul>
                    <p class="alert alert-info">For more specific tuition fees, you can ask us directly, we would be happy to answer your queries.</p>
                </div>
                <button class="accordion">
                    5. What will it cost me in terms of Accommodation?
                </button>
                <div class="panel">
                    <p>Cost of accomodation, irrespective of country is dependent on your choice of comfort and Location.</p>
                    <p>For instance, If your school of choice is located within a major city like London or Washington DC, you can expect prices of accomodation to be high and reflective of that premium location. If you are taking an on campus accomodation or a private accomodation, it will also have a bearing on cost.</p>
                    <p>Similarly, your choice in terms of number of rooms, size of room, shared facilities, and services availaible  will determine the amount you will pay for accomodation.</p>
                    <p>In the United Kingdom, a single ensuite room can cost you £80 to £150 per week.</p>
                    <p>You will have to choose what best suits you according to your budget.</p>
                </div>
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

