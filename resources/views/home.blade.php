@extends('layouts.app')

@section('title', 'Home - Basera Constructions & Tubewells')
<style>

    .hero-section h1 {
    color: #ffffff !important;
    text-shadow: 0 4px 10px rgba(0,0,0,0.45);
}

.hero-section p.lead {
    color: #f1f1f1 !important;
    text-shadow: 0 3px 8px rgba(0,0,0,0.5);
}

.hero-subtext {
    background: rgba(0, 0, 0, 0.75); /* darker box for readability */
    color: #fff !important;
    padding: 10px 22px;
    border-radius: 12px;
    backdrop-filter: blur(4px);

}

</style>
@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <h1 class="display-3 fw-bold text-dark mb-4" data-aos="fade-up">
                        Building Your Vision, From the Ground Up
                    </h1>
                    <p class="lead text-black mb-5 hero-subtext" data-aos="fade-up" data-aos-delay="100">
                        Your trusted partner in construction and tubewell solutions across the region
                    </p>
                    <div data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('services') }}" class="btn btn-primary btn-lg me-3 mb-3">View Our Services</a>
                        <a href="{{ route('contact') }}" class="btn btn-success btn-outline-success btn-lg mb-3" style="color: white; background-color">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Our Services</h2>
                <p class="lead text-muted">Quality Construction, Reliable Water Solutions</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card service-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-house-door-fill"></i>
                            </div>
                            <h4 class="card-title">General Construction</h4>
                            <p class="card-text text-muted">
                                We build homes, offices, and commercial spaces with precision and quality.
                                Our experienced team ensures every project meets the highest standards.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-droplet-fill"></i>
                            </div>
                            <h4 class="card-title">Tubewell Solutions</h4>
                            <p class="card-text text-muted">
                                Expert drilling, installation, and maintenance for reliable water access.
                                We provide sustainable water solutions for residential and agricultural needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-tools"></i>
                            </div>
                            <h4 class="card-title">Renovations</h4>
                            <p class="card-text text-muted">
                                Modernizing and transforming existing structures. We breathe new life
                                into old spaces with innovative design and quality craftsmanship.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Why Choose Us</h2>
                <p class="lead text-muted">What makes us stand out from the rest</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box text-center">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h5>Experienced Team</h5>
                        <p class="text-muted">Decades of combined expertise in construction and water solutions</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box text-center">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <h5>Quality Materials</h5>
                        <p class="text-muted">We use only the best materials to ensure durability and longevity</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box text-center">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <h5>On-Time Delivery</h5>
                        <p class="text-muted">Committed to completing projects within agreed timelines</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box text-center">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h5>Customer Satisfaction</h5>
                        <p class="text-muted">Your satisfaction is our top priority and measure of success</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Highlights Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Featured Projects</h2>
                <p class="lead text-muted">A glimpse of our recent work</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <a href="{{ route('projects') }}" class="text-decoration-none">
                        <div class="project-card">
                            <img src="/images/office.png"
                                alt="Office Building" class="img-fluid">
                            <div class="project-overlay">
                                <h5 class="text-white">Modern Office Complex</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="{{ route('projects') }}" class="text-decoration-none">
                        <div class="project-card">
                            <img src="{{ asset('images/residentialVilla.png') }}"
                                alt="Residential Villa" class="img-fluid">
                            <div class="project-overlay">
                                <h5 class="text-white">Luxury Residential Villa</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="{{ route('projects') }}" class="text-decoration-none">
                        <div class="project-card">
                            <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800"
                                alt="Construction Site" class="img-fluid">
                            <div class="project-overlay">
                                <h5 class="text-white">Commercial Development</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="{{ route('projects') }}" class="text-decoration-none">
                        <div class="project-card">
                            <img src="{{ asset('images/agritube.png') }}"
                                alt="Tubewell Installation" class="img-fluid">
                            <div class="project-overlay">
                                <h5 class="text-white">Agricultural Tubewell System</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="{{ route('projects') }}" class="text-decoration-none">
                        <div class="project-card">
                            <img src="https://images.unsplash.com/photo-1448630360428-65456885c650?w=800"
                                alt="Renovation Project" class="img-fluid">
                            <div class="project-overlay">
                                <h5 class="text-white">Heritage Restoration</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="{{ route('projects') }}" class="text-decoration-none">
                        <div class="project-card">
                            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800"
                                alt="Heavy Machinery" class="img-fluid">
                            <div class="project-overlay">
                                <h5 class="text-white">Infrastructure Project</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('projects') }}" class="btn btn-primary btn-lg">View All Projects</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">What Our Clients Say</h2>
                <p class="lead text-muted">Hear from those who trusted us with their projects</p>
            </div>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="testimonial-card text-center p-5">
                                    <i class="bi bi-quote text-primary display-4 mb-3"></i>
                                    <p class="lead mb-4">
                                        "Basera Constructions built our dream home exactly as we envisioned.
                                        Their attention to detail and commitment to quality is unmatched.
                                        We couldn't be happier with the results!"
                                    </p>
                                    <h5 class="mb-1">Rajesh Kumar</h5>
                                    <p class="text-muted">Selaqui, Dehradun</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="testimonial-card text-center p-5">
                                    <i class="bi bi-quote text-primary display-4 mb-3"></i>
                                    <p class="lead mb-4">
                                        "The tubewell installation was completed ahead of schedule and has been
                                        working perfectly for our agricultural needs. Professional service from
                                        start to finish!"
                                    </p>
                                    <h5 class="mb-1">Priya Sharma</h5>
                                    <p class="text-muted">Clement Town, Dehradun</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="testimonial-card text-center p-5">
                                    <i class="bi bi-quote text-primary display-4 mb-3"></i>
                                    <p class="lead mb-4">
                                        "Our office renovation transformed the entire workspace. The team was
                                        professional, efficient, and worked around our business schedule.
                                        Highly recommended!"
                                    </p>
                                    <h5 class="mb-1">Amit Verma</h5>
                                    <p class="text-muted">Rajpur Road, Dehradun</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
@endsection