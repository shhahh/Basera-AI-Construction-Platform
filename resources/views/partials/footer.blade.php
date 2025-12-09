<!-- Footer -->
<footer class="bg-dark text-light pt-5 pb-3">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <h5 class="fw-bold mb-3">Basera Constructions & Tubewells</h5>
                <p>
                    Building dreams and providing reliable water solutions across the region.
                    With years of experience and a commitment to excellence, we are your trusted
                    partner for all construction and tubewell needs.
                </p>
            </div>
            <div class="col-lg-2 col-md-4">
                <h5 class="fw-bold mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-light text-decoration-none">About</a></li>
                    <li><a href="{{ route('services') }}" class="text-light text-decoration-none">Services</a></li>
                    <li><a href="{{ route('projects') }}" class="text-light text-decoration-none">Projects</a></li>
                    <li><a href="{{ route('contact') }}" class="text-light text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5 class="fw-bold mb-3">Contact Info</h5>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="bi bi-geo-alt-fill me-2"></i> Thakurpur Road, Near SBI ATM,
                    Shyampur Arkedia Grant, Prem Nagar,
                    Dehradun - 248001   </li>
                    <li class="mb-3"><i class="bi bi-telephone-fill me-2"></i> +91 8445761563</li>
                    <li class="mb-3"><i class="bi bi-envelope-fill me-2"></i> info@baseraconstructions<br>andtubewells.com</li>
                     <li class="mb-3"><i class="bi bi-receipt me-2"></i></i> 05ABFFB9410K1ZH</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5 class="fw-bold mb-3">Follow Us</h5>
                <div class="social-icons">
                   <div class="social-icons"><a href="#" class="facebook-icon me-3"><i class="bi bi-facebook fs-4"></i></a>
                     <a href="#" class="linkedin-icon me-3"><i class="bi bi-linkedin fs-4"></i></a>
                    <a href="#" class="instagram-icon me-3"><i class="bi bi-instagram fs-4"></i></a>
                    <a href="#" class="twitter-icon"><i class="bi bi-twitter fs-4"></i></a></div>
                </div>
            </div>
        </div>
        <hr class="mt-4 mb-3 bg-secondary">
        <div class="text-center">
            <p class="mb-0">&copy; <span id="currentYear"></span> Basera Constructions & Tubewells. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<script>
    // Current year automatically update hoga
    document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>