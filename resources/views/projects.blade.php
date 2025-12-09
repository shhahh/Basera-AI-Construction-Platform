@extends('layouts.app')

@section('title', 'Our Projects - Basera Constructions & Tubewells')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="display-4 fw-bold text-white">Our Project Portfolio</h1>
            <p class="lead text-white">Showcasing our excellence in construction and water solutions</p>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="py-5">
        <div class="container">
            <!-- Filter Buttons -->
            <div class="text-center mb-5">
                <div class="btn-group flex-wrap" role="group">
                    <button type="button" class="btn btn-outline-primary filter-btn active" data-filter="all">
                        All Projects
                    </button>
                    <button type="button" class="btn btn-outline-primary filter-btn" data-filter="construction">
                        Construction
                    </button>
                    <button type="button" class="btn btn-outline-primary filter-btn" data-filter="tubewells">
                        Tubewells
                    </button>
                    <button type="button" class="btn btn-outline-primary filter-btn" data-filter="renovations">
                        Renovations
                    </button>
                </div>
            </div>

            <!-- Portfolio Grid -->
            <div class="row g-4" id="portfolioGrid">
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="construction">
                    <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#modal1">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800" 
                             alt="Modern Office Building" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h5 class="text-white fw-bold">Modern Office Complex</h5>
                                <p class="text-white-50">Commercial Construction</p>
                                <i class="bi bi-plus-circle-fill text-white fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="construction">
                    <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#modal2">
                        <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?w=800" 
                             alt="Residential Villa" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h5 class="text-white fw-bold">Luxury Residential Villa</h5>
                                <p class="text-white-50">Residential Construction</p>
                                <i class="bi bi-plus-circle-fill text-white fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="construction">
                    <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#modal3">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800" 
                             alt="Construction Site" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h5 class="text-white fw-bold">Commercial Development</h5>
                                <p class="text-white-50">Mixed-Use Construction</p>
                                <i class="bi bi-plus-circle-fill text-white fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="tubewells">
                    <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#modal4">
                        <img src="https://images.unsplash.com/photo-1632778149955-e80f8ceca2e8?w=800" 
                             alt="Tubewell Installation" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h5 class="text-white fw-bold">Agricultural Tubewell System</h5>
                                <p class="text-white-50">Tubewell Installation</p>
                                <i class="bi bi-plus-circle-fill text-white fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="renovations">
                    <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#modal5">
                        <img src="https://images.unsplash.com/photo-1448630360428-65456885c650?w=800" 
                             alt="Renovation Project" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h5 class="text-white fw-bold">Heritage Restoration</h5>
                                <p class="text-white-50">Renovation Project</p>
                                <i class="bi bi-plus-circle-fill text-white fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="construction">
                    <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#modal6">
                        <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800" 
                             alt="Heavy Machinery" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h5 class="text-white fw-bold">Infrastructure Project</h5>
                                <p class="text-white-50">Heavy Construction</p>
                                <i class="bi bi-plus-circle-fill text-white fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 7 -->
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="tubewells">
                    <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#modal7">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800" 
                             alt="Water Drilling" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h5 class="text-white fw-bold">Deep Bore Installation</h5>
                                <p class="text-white-50">Tubewell Drilling</p>
                                <i class="bi bi-plus-circle-fill text-white fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 8 -->
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="construction">
                    <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#modal8">
                        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=800" 
                             alt="High Rise Building" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h5 class="text-white fw-bold">High-Rise Apartment Complex</h5>
                                <p class="text-white-50">Residential Construction</p>
                                <i class="bi bi-plus-circle-fill text-white fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 9 -->
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="renovations">
                    <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#modal9">
                        <img src="https://images.unsplash.com/photo-1484154218962-a197022b5858?w=800" 
                             alt="Interior Renovation" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h5 class="text-white fw-bold">Modern Interior Transformation</h5>
                                <p class="text-white-50">Interior Renovation</p>
                                <i class="bi bi-plus-circle-fill text-white fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 10 -->
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="tubewells">
                    <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#modal10">
                        <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=800" 
                             alt="Pump Installation" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h5 class="text-white fw-bold">Industrial Pump System</h5>
                                <p class="text-white-50">Pump Installation</p>
                                <i class="bi bi-plus-circle-fill text-white fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 11 -->
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="construction">
                    <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#modal11">
                        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800" 
                             alt="Retail Complex" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h5 class="text-white fw-bold">Shopping Mall Construction</h5>
                                <p class="text-white-50">Commercial Construction</p>
                                <i class="bi bi-plus-circle-fill text-white fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 12 -->
                <div class="col-md-6 col-lg-4 portfolio-item" data-category="renovations">
                    <div class="portfolio-card" data-bs-toggle="modal" data-bs-target="#modal12">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800" 
                             alt="Office Renovation" class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h5 class="text-white fw-bold">Corporate Office Remodel</h5>
                                <p class="text-white-50">Office Renovation</p>
                                <i class="bi bi-plus-circle-fill text-white fs-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Modals -->
    <!-- Modal 1 -->
    <div class="modal fade" id="modal1" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1200" 
                         alt="Modern Office Building" class="img-fluid rounded mb-4">
                    <h3 class="fw-bold mb-3">Modern Office Complex</h3>
                    <p class="text-muted mb-3"><strong>Category:</strong> Commercial Construction</p>
                    <p>
                        A state-of-the-art office complex featuring modern architecture and sustainable design 
                        principles. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. The project includes advanced HVAC 
                        systems, energy-efficient lighting, and contemporary workspace solutions.
                    </p>
                    <ul>
                        <li>Total Area: 50,000 sq ft</li>
                        <li>Completion Time: 18 months</li>
                        <li>Features: Smart building systems, green spaces, parking facilities</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="modal fade" id="modal4" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="https://images.unsplash.com/photo-1632778149955-e80f8ceca2e8?w=1200" 
                         alt="Tubewell Installation" class="img-fluid rounded mb-4">
                    <h3 class="fw-bold mb-3">Agricultural Tubewell System</h3>
                    <p class="text-muted mb-3"><strong>Category:</strong> Tubewell Installation</p>
                    <p>
                        Comprehensive tubewell installation for agricultural irrigation covering multiple acres. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. The system provides 
                        reliable water access for year-round farming operations with efficient pump mechanisms.
                    </p>
                    <ul>
                        <li>Depth: 350 feet</li>
                        <li>Completion Time: 3 weeks</li>
                        <li>Features: High-capacity submersible pump, automated controls</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-4">Have a Project in Mind?</h2>
            <p class="lead mb-4">Let's discuss how we can bring your vision to life</p>
            <!-- <a href="{{ route('contact') }}" class="btn btn-warning btn-lg">Start Your Project</a> -->
             <a class="btn btn-success btn-lg custom-hover" href="{{ route('contact') }}">Start Your Project</a>
        </div>
    </section>
@endsection