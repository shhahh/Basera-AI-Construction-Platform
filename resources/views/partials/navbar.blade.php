<style>
.dropdown-hover:hover > .dropdown-menu {
    display: block;
}

/* Submenu parent */
.dropdown-submenu {
    position: relative;
}

.dropdown-item.active,
.dropdown-item:active {
    background-color: transparent !important;
    color: inherit !important;
}

.services-first-level > li {
    padding-left: 12px;
}

.services-first-level{
    margin-top: 6px;
}

.dropdown-submenu.open > a {
    background: #f5f7f5 !important;
}

/* DESKTOP ONLY */
@media (min-width: 992px) {
    .dropdown-submenu > .dropdown-menu {
        display: none;
        position: absolute;
        top: 8px;
        left: auto;
        right: 100%;
        margin-top: -1px;
        padding-left: 15px !important;
        margin-right: 0.1rem !important;
    }

    .dropdown-submenu:hover > .dropdown-menu {
        display: block;
    }
}

    /* MOBILE ONLY */
    @media (max-width: 991px) {
        .navbar .dropdown-menu {
            position: fixed !important;
            top: 76px !important;
            left: 0 !important;
            width: 100% !important;
            background: #fff !important;
            border: none !important;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            padding: 0 !important;
            /* overflow: hidden !important; */
            overflow-y: auto !important;
            overflow-x: hidden !important;
            max-height: calc(100vh - 80px) !important; /* full scrollable height */
        }

        .services-first-level {
            overflow-y: auto !important;
            max-height: calc(100vh - 100px) !important; 
            transition: padding-bottom 0.3s ease;
            padding-bottom: 20px;
        }

        .services-first-level > .dropdown-submenu > a {
            display: block;
            width: 100%;
            padding: 14px 45px 14px 20px !important;
            background: #fff;
            border-bottom: 1px solid #eee;
            position: relative;
        }

        .services-first-level > .dropdown-submenu > a.dropdown-toggle::after {
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-left: .3em solid transparent;
            content: "" !important;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
        }

        .services-first-level > .dropdown-submenu.open > a.dropdown-toggle::after {
            content: "›" !important;
            border: none !important;
            font-size: 18px;
            font-weight: 700;
            color: #000 !important;
        }

        .dropdown-submenu > .dropdown-menu li {
            margin: 0 !important;
            padding: 0 !important;
        }

        .dropdown-submenu > .dropdown-menu {
            position: relative !important;
            max-height: 400px !important;    /* fixed visible height */
            overflow-y: auto !important;   
            display: none !important;
            margin: 0 0 0 20px !important;
            width: calc(100% - 40px) !important;
            background: #fafafa !important;
            padding: 5px 0 5px 25px !important;
            border-left: 3px solid #ddd;
            border-radius: 5px;
        }
        .dropdown-submenu > .dropdown-menu a {
        white-space: normal !important;
        line-height: 1.3rem;
    }


        .dropdown-submenu.open > .dropdown-menu {
            display: block !important;
            margin-top: -4rem !important;
            margin-bottom: 5rem !important;
            overflow-x: auto !important;


        }

        .dropdown-submenu > .dropdown-menu a {
            padding: 10px 20px !important;
            border-bottom: 1px solid #eee;
            display: block;
        }

        
    }

    /* REMOVE BOOTSTRAP DEFAULT CARET (DESKTOP) */
    @media (min-width: 992px) {
        .services-first-level > .dropdown-submenu > a.dropdown-toggle::after {
            display: none !important;
        }
    }

    /* ADD CUSTOM < ARROW (DESKTOP) */
    @media (min-width: 992px) {
        .services-first-level > .dropdown-submenu > a.dropdown-toggle {
            position: relative;
            padding-right: 20px !important;
        }

        .services-first-level > .dropdown-submenu > a.dropdown-toggle::before {
            content: "<";
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 12px;
            font-weight: 700;
            color: #000 !important;
        }
    }

    

</style>

<nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top shadow-sm py-2">
    <div class="container-fluid">
        <a class="navbar-brand fw-bolder d-flex align-items-center " href="{{ route('home') }}">
            <img class="main-logo" src="{{ asset('images/logo.png') }}" alt="">
            Constructions  & Tubewells
        </a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                <a class="nav-link dropdown-toggle {{ request()->routeIs('services') ? 'active' : '' }}"
                href="#" id="servicesDropdown">
                Services
                </a>

                <ul class="dropdown-menu services-first-level" aria-labelledby="servicesDropdown">

                    <!-- Construction -->
                    <li class="dropdown-submenu dropdown-hover">
                        <a class="dropdown-item dropdown-toggle" href="#">
                            Construction
                        </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">
                                MDDA Approval
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">
                                Architectural Planning
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">
                                3D Elevation
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">
                                Interior Designing
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">
                                Structural Drawings
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">
                                Estimation and Costing
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">
                                Site Layout
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">
                                Site Supervision
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">
                                Surveying
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">
                                Concrete Testing
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">
                                Construction
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}"
                                href="{{ route('services') }}">
                                Loan Approval
                                </a>
                            </li>

                        </ul>
                    </li>


                    <!-- 1. Borewell & Drilling Services -->
                    <li class="dropdown-submenu dropdown-hover">
                        <a class="dropdown-item dropdown-toggle" href="#">
                            Borewell & Drilling Services
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">DTH (Down-The-Hole) Borewell Drilling</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">ODEX (Overburden Drilling with Eccentric Casing)</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Hard Rock & Alluvial Terrain Drilling</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Deep Borewell Drilling Solutions</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Residential Borewell Drilling</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Commercial & Industrial Borewell Drilling</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Agricultural Borewell & Irrigation Wells</a></li>

                        </ul>
                    </li>

                    <!-- 2. Tubewell Services -->
                    <li class="dropdown-submenu dropdown-hover">
                        <a class="dropdown-item dropdown-toggle" href="#">
                            Tubewell Services
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Tubewell Drilling & Installation</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Shallow & Deep Tubewell Boring</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">PVC, MS & Heavy-Duty Casing Pipe Installation</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Gravel Packing & Well Development</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Borewell Flushing & Cleaning</a></li>

                        </ul>
                    </li>

                    <!-- 3. Casing & Well Construction -->
                    <li class="dropdown-submenu dropdown-hover">
                        <a class="dropdown-item dropdown-toggle" href="#">
                            Casing & Well Construction
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">ODEX Casing Pipe Driving & Extraction</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Permanent & Temporary Casing Solutions</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Borewell Strengthening & Collapse Prevention</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Well Head Construction & Sealing</a></li>

                        </ul>
                    </li>

                    <!-- 4. Water Yield & Testing Services -->
                    <li class="dropdown-submenu dropdown-hover">
                        <a class="dropdown-item dropdown-toggle" href="#">
                            Water Yield & Testing Services
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Borewell Water Yield Testing</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Discharge Rate Measurement</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Water Level & Depth Assessment</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Trial Pumping Services</a></li>

                        </ul>
                    </li>

                    <!-- 5. Pump & Motor Services -->
                    <li class="dropdown-submenu dropdown-hover">
                        <a class="dropdown-item dropdown-toggle" href="#">
                            Pump & Motor Services
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Submersible Pump Installation</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Open Well & Borewell Pump Setup</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Pump Replacement & Up-gradation</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Motor Alignment & Commissioning</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Pump Maintenance & Repair</a></li>

                        </ul>
                    </li>

                    <!-- 6. Maintenance & Re-Drilling Services -->
                    <li class="dropdown-submenu dropdown-hover">
                        <a class="dropdown-item dropdown-toggle" href="#">
                            Maintenance & Re-Drilling Services
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Old Borewell Cleaning & Re-Drilling</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Borewell Deepening</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Borewell Recovery Services</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Low-Yield Borewell Solutions</a></li>

                        </ul>
                    </li>

                    <!-- 7. Site Preparation & Support Work -->
                    <li class="dropdown-submenu dropdown-hover">
                        <a class="dropdown-item dropdown-toggle" href="#">
                            Site Preparation & Support Work
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Borewell Site Survey & Feasibility Study</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Drilling in Restricted / Limited Access Areas</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Emergency Borewell Drilling Services</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Portable & Heavy Rig Deployment</a></li>

                        </ul>
                    </li>

                    <!-- 8. Water Solutions for Various Needs -->
                    <li class="dropdown-submenu dropdown-hover">
                        <a class="dropdown-item dropdown-toggle" href="#">
                            Water Solutions for Various Needs
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Domestic Water Supply Borewells</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Farm, Orchard & Tubewell Irrigation Solutions</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Factory & Industrial Water Supply</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Hotels, Schools & Commercial Complex Borewells</a></li>

                        </ul>
                    </li>



                </ul>
            </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-success btn-sm" href="{{ route('contact') }}">Get a Quote</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Scroll effect for navbar
    document.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 20) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    function isMobile() {
        return window.innerWidth < 992;
    }

    document.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        if (!navbar) return;
        navbar.classList.toggle("scrolled", window.scrollY > 20);
    });

    const servicesDropdown = document.getElementById('servicesDropdown');
    const navbarCollapse = document.getElementById('navbarNav');

    function ensureNavbarOpen() {
        if (!navbarCollapse || navbarCollapse.classList.contains('show')) return;
        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse) || 
                         new bootstrap.Collapse(navbarCollapse, { toggle: false });
        try { bsCollapse.show(); } catch (e) {}
    }

    if (servicesDropdown) {
        const servicesMenu = servicesDropdown.nextElementSibling;

        servicesDropdown.addEventListener('click', function(e) {
            if (!isMobile()) return;
            
            e.preventDefault();
            e.stopPropagation();

            const willShow = !servicesMenu.classList.contains('show');

            document.querySelectorAll('.navbar .dropdown-menu.show').forEach(m => m.classList.remove('show'));
            document.querySelectorAll('.dropdown-submenu.open').forEach(s => s.classList.remove('open'));

            if (willShow) {
                servicesMenu.classList.add('show');
                servicesDropdown.setAttribute('aria-expanded', 'true');
                ensureNavbarOpen();
            } else {
                servicesDropdown.setAttribute('aria-expanded', 'false');
            }
        });
    }

    document.querySelectorAll('.services-first-level > .dropdown-submenu > a.dropdown-toggle').forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            if (!isMobile()) return;

            const parentLi = this.parentElement;
            const submenu = this.nextElementSibling;
            if (!submenu) return;

            const isOpen = parentLi.classList.contains('open');

            document.querySelectorAll('.services-first-level > .dropdown-submenu').forEach(item => {
                if (item !== parentLi) {
                    item.classList.remove('open');
                    const menu = item.querySelector(':scope > .dropdown-menu');
                    if (menu) menu.classList.remove('show');
                }
            });

            parentLi.classList.toggle('open', !isOpen);
            submenu.classList.toggle('show', !isOpen);

            ensureNavbarOpen();
        });
    });

    document.addEventListener('click', function(e) {
        if (e.target.closest('.navbar')) return;
        
        document.querySelectorAll('.navbar .dropdown-menu.show').forEach(m => {
            m.classList.remove('show');
            const t = m.previousElementSibling;
            if (t) t.setAttribute('aria-expanded', 'false');
        });
        document.querySelectorAll('.dropdown-submenu.open').forEach(s => s.classList.remove('open'));
    });

    document.querySelectorAll('.dropdown-menu a:not(.dropdown-toggle)').forEach(link => {
        link.addEventListener('click', function() {
            if (!navbarCollapse || !navbarCollapse.classList.contains('show')) return;
            
            const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse) || 
                             new bootstrap.Collapse(navbarCollapse, { toggle: false });
            try { bsCollapse.hide(); } catch (e) {}

            document.querySelectorAll('.navbar .dropdown-menu.show').forEach(m => m.classList.remove('show'));
            document.querySelectorAll('.dropdown-submenu.open').forEach(s => s.classList.remove('open'));
        });
    });

    window.addEventListener('resize', function() {
        if (isMobile()) return;
        
        document.querySelectorAll('.navbar .dropdown-menu.show').forEach(m => m.classList.remove('show'));
        document.querySelectorAll('.dropdown-submenu.open').forEach(s => s.classList.remove('open'));
        document.querySelectorAll('#servicesDropdown, .dropdown-toggle').forEach(t => {
            try { t.setAttribute('aria-expanded', 'false'); } catch(e) {}
        });
    });
});
</script>


