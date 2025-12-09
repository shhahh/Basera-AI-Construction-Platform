@extends('layouts.app')

@section('title', 'About Us - Basera Constructions & Tubewells')

<style>
    .card
    {
        transition: all 0.3s ease !important;
    }

    .card:hover {
        transform: translateY(-10px) !important;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15) !important;
    }

    .hover-lift {
        transition: all 0.3s ease !important;
    }

    .hover-lift:hover {
        transform: translateY(-10px) !important;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15) !important;
    }
    
    i:hover {
    transform: none !important;
    box-shadow: none !important;
}

</style>

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="display-5 fw-bold text-white">About Basera Constructions & Tubewells</h1>
            <p class="lead text-white">Building excellence since our inception</p>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center mb-2">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800" 
                         alt="Construction Team" class="img-fluid rounded shadow hover-lift">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Our Story</h2>
                    <p class="lead text-muted mb-4">
                        Basera Constructions & Tubewells was founded with a simple yet powerful vision: 
                        to provide top-quality construction services and reliable water solutions to 
                        communities across the region.
                    </p>
                    <p>
                        From designing modern structures to providing sustainable tubewell and water-supply 
                        systems, our journey has always been driven by one goal — to make construction and 
                        water access simpler, safer, and more efficient for every client. Our commitment to 
                        quality workmanship, timely delivery, and ethical practices has helped us complete 
                        numerous successful projects across the region.
                    </p>
                    <p>
                        With a skilled workforce, advanced machinery, and a strong customer-centric approach, 
                        we continue to expand our capabilities and set new benchmarks in the industry.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100 service-card">
                        <div class="card-body p-5">
                            <div class="mb-4">
                                <i class="bi bi-bullseye text-primary display-4"></i>
                            </div>
                            <h3 class="fw-bold mb-4">Our Mission</h3>
                            <p class="mb-3">
                                To deliver exceptional construction and water solution services that exceed 
                                client expectations through innovation, quality craftsmanship, and unwavering 
                                commitment to excellence.
                            </p>
                            <p>
                                 Building superior construction and tubewell solutions with uncompromised quality, 
                                advanced technology, and a deep commitment to customer satisfaction.
                                 We aim to create long-lasting structures, reliable water systems, and sustainable 
                                solutions that elevate communities and support growth for generations to come.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100 service-card">
                        <div class="card-body p-5">
                            <div class="mb-4">
                                <i class="bi bi-eye text-primary display-4"></i>
                            </div>
                            <h3 class="fw-bold mb-4">Our Vision</h3>
                            <p class="mb-3">
                                To be the most trusted and preferred construction and tubewell service 
                                provider in the region, recognized for our integrity, quality, and 
                                customer-centric approach.
                            </p>
                            <p>
                                To become the region’s most trusted and leading provider of construction and 
                                tubewell services — known for integrity, innovation, and excellence.
                                We envision a future where every home, business, and farm has access to safe, 
                                reliable, and affordable infrastructure, powered by modern engineering and 
                                ethical practices.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company History -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Our Journey</h2>
                <p class="lead text-muted">Years of experience building trust and excellence</p>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h4 class="fw-bold">Foundation & Early Years</h4>
                               <p>
                                    Our company began with a passion for honest work and quality construction. In the 
                                    early years, we focused primarily on residential and small-scale projects, building 
                                    trust through consistent workmanship and timely completion.
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h4 class="fw-bold">Expansion into Tubewell Services</h4>
                                <p>
                                As the demand for dependable water supply grew across the region, we expanded into 
                                tubewell drilling, installation, and maintenance. This step allowed us to serve both 
                                households and agricultural clients with essential water solutions.
                            </p>

                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h4 class="fw-bold">Commercial Projects & Growth</h4>
                                <p>
                                    Our reputation for excellence led to major commercial and industrial 
                                    projects.
                                    With increasing expertise and client confidence, we moved into large commercial, 
                                    industrial, and infrastructure projects. Our investment in advanced equipment and 
                                    skilled manpower enabled us to deliver high-precision and high-capacity work.
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="timeline-content">
                                <h4 class="fw-bold">Today & Beyond</h4>
                                <p>
                                    Today, Basera Constructions & Tubewells stands as a multi-disciplinary company with 
                                    hundreds of successful projects and strong client relationships. Our team continues 
                                    to innovate, adopt modern techniques, and upgrade equipment to meet evolving industry 
                                    needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Meet Our Team</h2>
                <p class="lead text-muted">Experienced professionals dedicated to your success</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600" 
                                     alt="Team Leader" class="img-fluid h-100 object-fit-cover">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body p-5 service-card">
                                    <h4 class="fw-bold mb-3">Leadership Team</h4>
                                    <p>
                                        Our leadership team brings decades of combined experience in civil construction, 
                                        engineering, and tubewell technology. Every leader is committed to ensuring the 
                                        highest standards of planning, execution, and customer support.
                                    </p>
                                    <p>
                                        We lead with integrity, transparency, and a deep understanding of what clients truly 
                                        need — durable quality, timely delivery, and dependable service. This vision drives 
                                        every department within our organization.
                                    </p>
                                    <p class="mb-0">
                                         With a strong focus on innovation and continuous improvement, our team ensures that every project reflects our commitment to excellence.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Our Core Values</h2>
                <p class="lead text-muted">The principles that guide everything we do</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="text-center p-4 card">
                        <div class="value-icon mb-3">
                            <i class="bi bi-shield-check text-primary display-4"></i>
                        </div>
                        <h5 class="fw-bold">Integrity</h5>
                        <p class="text-muted">
                            Honest and transparent in all our dealings with clients and partners
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center p-4 card">
                        <div class="value-icon mb-3">
                            <i class="bi bi-gem text-primary display-4"></i>
                        </div>
                        <h5 class="fw-bold">Excellence</h5>
                        <p class="text-muted">
                            Committed to delivering superior quality in every project we undertake
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center p-4 card">
                        <div class="value-icon mb-3">
                            <i class="bi bi-lightbulb text-primary display-4"></i>
                        </div>
                        <h5 class="fw-bold">Innovation</h5>
                        <p class="text-muted">
                            Embracing new technologies and methods to improve our services
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center p-4 card">
                        <div class="value-icon mb-3">
                            <i class="bi bi-heart text-primary display-4"></i>
                        </div>
                        <h5 class="fw-bold">Care</h5>
                        <p class="text-muted">
                            Treating every project with the attention and care it deserves
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-4">Ready to Start Your Project?</h2>
            <p class="lead mb-4">Let's build something great together</p>
            <!-- <a href="{{ route('contact') }}" class="btn btn-warning btn-lg">Get in Touch</a> -->
            <!-- <a class="btn btn-success btn-lg" href="{{ route('contact') }}">Get in Touch</a> -->
             <a class="btn btn-success btn-lg custom-hover" href="{{ route('contact') }}">Get in Touch</a>
        </div>
    </section>
@endsection