/* ===================================
   Basera Constructions & Tubewells
   Custom JavaScript
   =================================== */

// Wait for DOM to load
document.addEventListener('DOMContentLoaded', function() {
    
    // ===================================
    // Current Year in Footer
    // ===================================
    const yearSpan = document.getElementById('currentYear');
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }

    // ===================================
    // Navbar Scroll Effect
    // ===================================
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow');
            } else {
                navbar.classList.remove('shadow');
            }
        });
    }

    // ===================================
    // Smooth Scroll for Anchor Links
    // ===================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // ===================================
    // Portfolio Filter Functionality
    // ===================================
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    if (filterButtons.length > 0 && portfolioItems.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');
                
                // Get filter value
                const filterValue = this.getAttribute('data-filter');
                
                // Filter portfolio items
                portfolioItems.forEach(item => {
                    const category = item.getAttribute('data-category');
                    
                    if (filterValue === 'all' || category === filterValue) {
                        item.classList.remove('hide');
                        setTimeout(() => {
                            item.style.display = 'block';
                        }, 10);
                    } else {
                        item.classList.add('hide');
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    }

    // ===================================
    // Contact Form Handling
    // ===================================
    const contactForm = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const service = document.getElementById('service').value;
            const message = document.getElementById('message').value;
            
            // Basic validation
            if (!name || !email || !phone || !service || !message) {
                showMessage('Please fill in all required fields.', 'danger');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showMessage('Please enter a valid email address.', 'danger');
                return;
            }
            
            // Phone validation (basic)
            const phoneRegex = /^[\d\s\+\-\(\)]+$/;
            if (!phoneRegex.test(phone)) {
                showMessage('Please enter a valid phone number.', 'danger');
                return;
            }
            
            // Simulate form submission
            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
            
            // Simulate API call with timeout
            setTimeout(() => {
                // Reset form
                contactForm.reset();
                
                // Show success message
                showMessage(
                    'Thank you for contacting us! We will get back to you within 24 hours.',
                    'success'
                );
                
                // Reset button
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
                
                // Log form data (in production, this would be sent to server)
                console.log('Form submitted:', {
                    name, email, phone, service, message
                });
            }, 1500);
        });
    }

    // Helper function to show form messages
    function showMessage(text, type) {
        if (formMessage) {
            formMessage.innerHTML = `
                <div class="alert alert-${type} alert-dismissible fade show" role="alert">
                    ${text}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            `;
            
            // Scroll to message
            formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            
            // Auto-dismiss after 5 seconds
            setTimeout(() => {
                const alert = formMessage.querySelector('.alert');
                if (alert) {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }
            }, 5000);
        }
    }

    // ===================================
    // Testimonial Carousel Auto-play
    // ===================================
    const testimonialCarousel = document.getElementById('testimonialCarousel');
    if (testimonialCarousel) {
        const carousel = new bootstrap.Carousel(testimonialCarousel, {
            interval: 5000,
            wrap: true,
            keyboard: true
        });
    }

    // ===================================
    // Scroll-to-Top Button (Optional)
    // ===================================
    const scrollToTopBtn = document.createElement('button');
    scrollToTopBtn.innerHTML = '<i class="bi bi-arrow-up"></i>';
    scrollToTopBtn.className = 'btn btn-primary position-fixed bottom-0 end-0 m-4 rounded-circle';
    scrollToTopBtn.style.display = 'none';
    scrollToTopBtn.style.width = '50px';
    scrollToTopBtn.style.height = '50px';
    scrollToTopBtn.style.zIndex = '1000';

    /* center the icon */
    scrollToTopBtn.style.display = 'none';
    scrollToTopBtn.style.justifyContent = 'center';
    scrollToTopBtn.style.alignItems = 'center';
    scrollToTopBtn.style.padding = '0';


    scrollToTopBtn.setAttribute('aria-label', 'Scroll to top');
    
    document.body.appendChild(scrollToTopBtn);
    
    // Show/hide scroll-to-top button
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            scrollToTopBtn.style.display = 'block';
        } else {
            scrollToTopBtn.style.display = 'none';
        }
    });
    
    // Scroll to top when button is clicked
    scrollToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // ===================================
    // Lazy Loading Images (Optional Enhancement)
    // ===================================
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                observer.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));

    // ===================================
    // Mobile Menu Close on Link Click
    // ===================================
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (navLinks.length > 0 && navbarCollapse) {
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                        toggle: false
                    });
                    bsCollapse.hide();
                }
            });
        });
    }

    // ===================================
    // Form Input Animation
    // ===================================
    const formInputs = document.querySelectorAll('.form-control, .form-select');
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            if (!this.value) {
                this.parentElement.classList.remove('focused');
            }
        });
    });

    // ===================================
    // Animate Elements on Scroll (Simple Version)
    // ===================================
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.service-card, .feature-box, .project-card');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            
            if (elementTop < window.innerHeight && elementBottom > 0) {
                element.classList.add('fade-in-up');
            }
        });
    };

    // Run on scroll
    window.addEventListener('scroll', animateOnScroll);
    
    // Run on load
    animateOnScroll();

    // ===================================
    // Accordion Auto-collapse (Optional)
    // ===================================
    const accordionItems = document.querySelectorAll('.accordion-button');
    accordionItems.forEach(item => {
        item.addEventListener('click', function() {
            // Add any custom accordion behavior here if needed
        });
    });

    // ===================================
    // Modal Event Listeners (Optional)
    // ===================================
    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => {
        modal.addEventListener('show.bs.modal', function() {
            // Actions when modal opens
            console.log('Modal opened:', modal.id);
        });
        
        modal.addEventListener('hidden.bs.modal', function() {
            // Actions when modal closes
            console.log('Modal closed:', modal.id);
        });
    });

    // ===================================
    // Preloader (Optional)
    // ===================================
    window.addEventListener('load', function() {
        const preloader = document.querySelector('.preloader');
        if (preloader) {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 300);
        }
    });

    // ===================================
    // Print Console Info
    // ===================================
    console.log('%cBasera Constructions & Tubewells', 'color: #0d6efd; font-size: 20px; font-weight: bold;');
    console.log('%cWebsite successfully loaded!', 'color: #ffc107; font-size: 14px;');
    console.log('%cFor inquiries: info@baseraconstructions.com', 'color: #6c757d; font-size: 12px;');

    // ===================================
    // Add Additional Modals (for portfolio items 2-12)
    // ===================================
    // This creates the remaining modals dynamically
    const portfolioData = [
        {
            id: 'modal2',
            title: 'Luxury Residential Villa',
            category: 'Residential Construction',
            image: 'https://images.unsplash.com/photo-1513694203232-719a280e022f?w=1200',
            description: 'A premium residential villa featuring modern amenities and elegant design.',
            details: ['Total Area: 8,000 sq ft', 'Completion Time: 12 months', 'Features: Pool, garden, smart home systems']
        },
        {
            id: 'modal3',
            title: 'Commercial Development',
            category: 'Mixed-Use Construction',
            image: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1200',
            description: 'Large-scale commercial development with retail and office spaces.',
            details: ['Total Area: 75,000 sq ft', 'Completion Time: 24 months', 'Features: Multi-level parking, elevators']
        },
        {
            id: 'modal5',
            title: 'Heritage Restoration',
            category: 'Renovation Project',
            image: 'https://images.unsplash.com/photo-1448630360428-65456885c650?w=1200',
            description: 'Careful restoration of a heritage building maintaining its original character.',
            details: ['Total Area: 15,000 sq ft', 'Completion Time: 10 months', 'Features: Preserved architecture, modern systems']
        },
        {
            id: 'modal6',
            title: 'Infrastructure Project',
            category: 'Heavy Construction',
            image: 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1200',
            description: 'Major infrastructure development using heavy machinery and advanced techniques.',
            details: ['Scope: Road and foundation work', 'Completion Time: 15 months', 'Features: Advanced machinery, safety protocols']
        },
        {
            id: 'modal7',
            title: 'Deep Bore Installation',
            category: 'Tubewell Drilling',
            image: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=1200',
            description: 'Deep bore tubewell installation for reliable water access.',
            details: ['Depth: 400 feet', 'Completion Time: 2 weeks', 'Features: High-yield water source, quality testing']
        },
        {
            id: 'modal8',
            title: 'High-Rise Apartment Complex',
            category: 'Residential Construction',
            image: 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1200',
            description: 'Modern high-rise apartment complex with luxury amenities.',
            details: ['Total Area: 120,000 sq ft', 'Completion Time: 30 months', 'Features: 12 floors, community facilities']
        },
        {
            id: 'modal9',
            title: 'Modern Interior Transformation',
            category: 'Interior Renovation',
            image: 'https://images.unsplash.com/photo-1484154218962-a197022b5858?w=1200',
            description: 'Complete interior renovation with contemporary design and furnishings.',
            details: ['Total Area: 5,000 sq ft', 'Completion Time: 4 months', 'Features: Open concept, modern fixtures']
        },
        {
            id: 'modal10',
            title: 'Industrial Pump System',
            category: 'Pump Installation',
            image: 'https://images.unsplash.com/photo-1621905252507-b35492cc74b4?w=1200',
            description: 'Industrial-grade pump system for large-scale water management.',
            details: ['Capacity: 5000 GPM', 'Completion Time: 3 weeks', 'Features: Automated controls, backup systems']
        },
        {
            id: 'modal11',
            title: 'Shopping Mall Construction',
            category: 'Commercial Construction',
            image: 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=1200',
            description: 'Large retail complex with multiple stores and entertainment facilities.',
            details: ['Total Area: 200,000 sq ft', 'Completion Time: 36 months', 'Features: Food court, cinema, parking']
        },
        {
            id: 'modal12',
            title: 'Corporate Office Remodel',
            category: 'Office Renovation',
            image: 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1200',
            description: 'Complete office renovation with modern workspace design.',
            details: ['Total Area: 25,000 sq ft', 'Completion Time: 6 months', 'Features: Collaboration spaces, ergonomic design']
        }
    ];

    // Function to create modal HTML
    function createModalHTML(data) {
        return `
            <div class="modal fade" id="${data.id}" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <img src="${data.image}" alt="${data.title}" class="img-fluid rounded mb-4">
                            <h3 class="fw-bold mb-3">${data.title}</h3>
                            <p class="text-muted mb-3"><strong>Category:</strong> ${data.category}</p>
                            <p>${data.description}</p>
                            <ul>
                                ${data.details.map(detail => `<li>${detail}</li>`).join('')}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    // Add missing modals to the page if they don't exist
    portfolioData.forEach(data => {
        if (!document.getElementById(data.id)) {
            const modalContainer = document.createElement('div');
            modalContainer.innerHTML = createModalHTML(data);
            document.body.appendChild(modalContainer.firstElementChild);
        }
    });

});

// ===================================
// Helper Functions
// ===================================

// Debounce function for performance
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function for scroll events
function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}


// Projects page have filtering functionality 
// Portfolio Filter Functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            
            portfolioItems.forEach(item => {
                if (filterValue === 'all') {
                    item.classList.remove('hide');
                    item.style.display = 'block';
                } else {
                    if (item.getAttribute('data-category') === filterValue) {
                        item.classList.remove('hide');
                        item.style.display = 'block';
                    } else {
                        item.classList.add('hide');
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                }
            });
        });
    });
});