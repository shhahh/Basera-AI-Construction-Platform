@extends('layouts.app')

@section('title', 'Our Services - Basera Constructions & Tubewells')

<style>
    .card,
    .service-detail-card,
    .process-step,
    div
    {
        transition: all 0.3s ease !important;
    }

    .card:hover,
    .service-detail-card:hover,
    .process-step:hover {
        transform: translateY(-10px) !important;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15) !important;
    }
    
</style>


@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="display-4 fw-bold text-white">Our Services</h1>
            <p class="lead text-white">Comprehensive construction and water solutions for all your needs</p>
        </div>
    </section>

    <!-- Services Introduction -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold mb-4">What We Do Best</h2>
                    <p class="lead text-muted">
                        From groundbreaking to finishing touches, from drilling to maintenance, we provide 
                        end-to-end solutions for all your construction and water system needs. Our team of 
                        experienced professionals is dedicated to delivering excellence in every project.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Construction Services Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Construction Services</h2>
                <p class="lead text-muted">Building the future, one project at a time</p>
            </div>
            
            <div class="row g-4 mb-5">
                <div class="col-lg-6">
                    <div class="service-detail-card h-100 service-card">
                        <div class="service-detail-icon">
                            <i class="bi bi-house-door"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Residential Building</h3>
                        <p>
                            Transform your dream home into reality with our expert residential construction 
                            services. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Custom home design and construction</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Multi-family housing projects</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Villa and apartment complexes</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Quality materials and finishes</li>
                        </ul>
                        <div class="mt-4">
                            <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?w=800" 
                                 alt="Residential Construction" class="img-fluid rounded shadow-sm">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="service-detail-card h-100 service-card">
                        <div class="service-detail-icon">
                            <i class="bi bi-buildings"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Commercial Projects</h3>
                        <p>
                            Build your business infrastructure with our comprehensive commercial construction 
                            expertise. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Office buildings and corporate spaces</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Retail and shopping complexes</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Warehouses and industrial facilities</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Hospitality and mixed-use developments</li>
                        </ul>
                        <div class="mt-4">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800" 
                                 alt="Commercial Construction" class="img-fluid rounded shadow-sm">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="service-detail-card h-100 service-card">
                        <div class="service-detail-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Renovation and Remodeling</h3>
                        <p>
                            Breathe new life into existing structures with our renovation and remodeling services. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                            fugiat nulla pariatur.
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Interior and exterior renovations</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Space optimization and reconfiguration</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Modern upgrades and improvements</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Heritage building restoration</li>
                        </ul>
                        <div class="mt-4">
                            <img src="https://images.unsplash.com/photo-1448630360428-65456885c650?w=800" 
                                 alt="Renovation Projects" class="img-fluid rounded shadow-sm">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="service-detail-card h-100 service-card">
                        <div class="service-detail-icon">
                            <i class="bi bi-compass"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Structural Engineering</h3>
                        <p>
                            Ensure the safety and stability of your structures with our expert structural 
                            engineering services. Excepteur sint occaecat cupidatat non proident, sunt in 
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Structural design and analysis</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Foundation engineering</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Load-bearing calculations</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Safety inspections and assessments</li>
                        </ul>
                        <div class="mt-4">
                            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=800" 
                                 alt="Structural Engineering" class="img-fluid rounded shadow-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tubewell Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Tubewell & Water Services</h2>
                <p class="lead text-muted">Reliable water solutions for every need</p>
            </div>
            
            <div class="row g-4 mb-5">
                <div class="col-lg-6">
                    <div class="service-detail-card h-100 service-card">
                        <div class="service-detail-icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Site Survey & Analysis</h3>
                        <p>
                            Begin your water project with a comprehensive site survey and geological analysis. 
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Geological assessment and mapping</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Water table depth analysis</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Soil composition testing</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Optimal drilling location identification</li>
                        </ul>
                        <div class="mt-4">
                            <img src="/images/water-pro.png" 
                                 alt="Site Survey" class="img-fluid rounded shadow-sm">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="service-detail-card h-100 service-card">
                        <div class="service-detail-icon">
                            <i class="bi bi-droplet-half"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Tubewell Drilling & Boring</h3>
                        <p>
                            Access groundwater with our professional drilling and boring services using 
                            state-of-the-art equipment. Ut enim ad minim veniam, quis nostrud exercitation 
                            ullamco laboris nisi ut aliquip.
                             Access groundwater with our professional drilling and boring services using 
                            state-of-the-art equipment. Ut enim ad minim veniam, quis nostrud exercitation 
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Deep bore and shallow well drilling</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Modern drilling equipment and techniques</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Agricultural and residential installations</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Fast and efficient completion</li>
                        </ul>
                        <div class="mt-4">
                            <img src="{{ asset('images/borwell.jpg') }}" 
                                 alt="Tubewell Drilling" class="img-fluid rounded shadow-sm">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="service-detail-card h-100 service-card">
                        <div class="service-detail-icon">
                            <i class="bi bi-gear"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Pump Installation & Repair</h3>
                        <p>
                            Keep your water flowing with our expert pump installation and repair services. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
                            eu fugiat nulla pariatur.
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Submersible and surface pump installation</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Pump selection and sizing assistance</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Emergency repair services</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Performance testing and optimization</li>
                        </ul>
                        <div class="mt-4">
                            <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=800" 
                                 alt="Pump Installation" class="img-fluid rounded shadow-sm">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="service-detail-card h-100 service-card">
                        <div class="service-detail-icon">
                            <i class="bi bi-wrench"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Water System Maintenance</h3>
                        <p>
                            Protect your investment with regular maintenance and support services. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                            deserunt mollit anim id est laborum.
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Preventive maintenance programs</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Water quality testing</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> System cleaning and flushing</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> 24/7 emergency support available</li>
                        </ul>
                        <div class="mt-4">
                            <img src="https://images.unsplash.com/photo-1607400201889-565b1ee75f8e?w=800" 
                                 alt="Water System Maintenance" class="img-fluid rounded shadow-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Our Process</h2>
                <p class="lead text-muted">How we bring your projects to life</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="process-number">1</div>
                        <h5 class="fw-bold mt-3">Consultation</h5>
                        <p class="text-muted">We discuss your needs and vision for the project</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="process-number">2</div>
                        <h5 class="fw-bold mt-3">Planning</h5>
                        <p class="text-muted">Detailed planning and design based on your requirements</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="process-number">3</div>
                        <h5 class="fw-bold mt-3">Execution</h5>
                        <p class="text-muted">Professional execution with quality materials and expertise</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="process-number">4</div>
                        <h5 class="fw-bold mt-3">Delivery</h5>
                        <p class="text-muted">Timely completion and handover with full support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-4">Need a Custom Solution?</h2>
            <p class="lead mb-4">We're here to help with all your construction and water system needs</p>
            <!-- <a href="{{ route('contact') }}" class="btn btn-warning btn-lg">Request a Quote</a> -->
            <!-- <a class="btn btn-success btn-lg" href="{{ route('contact') }}">Request a Quote</a> -->
             <a class="btn btn-success btn-lg custom-hover" href="{{ route('contact') }}">
                      Request a Quote
                                     </a>

        </div>
    </section>
@endsection