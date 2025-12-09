@extends('layouts.app')

@section('title', 'Contact Us - Basera Constructions & Tubewells')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="display-4 fw-bold text-white">Get In Touch</h1>
        <p class="lead text-white">We're here to answer your questions and discuss your project needs</p>
    </div>
</section>






<!-- =======================
     AI CHAT SECTION START
   ======================= -->
<section class="py-5 bg-light" id="ai-chat-section">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Left Side: Text Info -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h2 class="fw-bold text-primary">Need Quick Answers? 🤖</h2>
                <h4 class="mb-4">Chat with Basera AI Assistant</h4>
                <p class="lead text-muted">
                    Don't want to wait for a callback? Ask our AI about:
                </p>
                <ul class="list-unstyled text-muted">
                    <li class="mb-2">✅ Tubewell Installation Process</li>
                    <li class="mb-2">✅ House Construction Estimates</li>
                    <li class="mb-2">✅ Water Solution Services</li>
                </ul>
                <p class="small text-secondary mt-4">
                    *Shah's AI is trained on Basera Constructions' past projects and client reviews.
                </p>
            </div>

            <!-- Right Side: Chat Box Interface -->
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    
                    <!-- Chat Header -->
                    <div class="card-header bg-primary text-white p-3 d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <span class="fs-4 me-2">👷</span>
                            <div>
                                <h6 class="mb-0 fw-bold">Basera Virtual Assistant</h6>
                                <small style="font-size: 12px; opacity: 0.9;">● Online | Instant Reply</small>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Body (Messages) -->
                    <div id="inline-chat-messages" class="card-body bg-white" style="height: 400px; overflow-y: auto; scroll-behavior: smooth;">
                        <!-- Welcome Message -->
                        <div class="d-flex flex-column align-items-start mb-3">
                            <div class="p-3 bg-light text-dark rounded-3 shadow-sm" style="max-width: 85%; border-bottom-left-radius: 0;">
                                Hello! Welcome to <b>Basera Constructions</b>. <br>
                                I can help you with details about our Construction and Tubewell services. What would you like to know?
                            </div>
                            <small class="text-muted ms-1 mt-1" style="font-size: 11px;">Basera AI</small>
                        </div>
                    </div>

                    <!-- Chat Footer (Input) -->
                    <div class="card-footer bg-white p-3 border-top">
                        <div class="input-group">
                            <input type="text" id="inline-chat-input" class="form-control border-primary" placeholder="Type your question here..." aria-label="Type message">
                            <button class="btn btn-primary px-4" id="inline-send-btn">
                                Send ➤
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
     AI CHAT SECTION END
   ======================= -->

  <!-- Ai system for BaseraConstrction  -->

<!-- Floating Chat Button -->
<button id="chat-toggle-btn" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000; background: #007bff; color: white; border: none; border-radius: 50%; width: 60px; height: 60px; font-size: 30px; cursor: pointer; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
    💬
</button>

<!-- Chat Window (Hidden by default) -->
<div id="chat-window" style="display: none; position: fixed; bottom: 90px; right: 20px; z-index: 1000; width: 350px; height: 450px; background: white; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.3); border: 1px solid #ddd; flex-direction: column;">
    
    <!-- Header -->
    <div style="background: #007bff; color: white; padding: 15px; border-top-left-radius: 10px; border-top-right-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
        <h5 style="margin: 0; font-size: 16px;">Basera AI Support 🏗️</h5>
        <span id="close-chat" style="cursor: pointer; font-size: 20px;">&times;</span>
    </div>

    <!-- Messages Area -->
    <div id="chat-messages" style="flex: 1; padding: 15px; overflow-y: auto; background: #f9f9f9; font-size: 14px;">
        <div style="background: #e9ecef; color: black; padding: 8px 12px; border-radius: 15px; margin-bottom: 10px; display: inline-block;">
            Hello! Welcome to Basera Constructions. How can I help you regarding Construction or Tubewells? 💧🏠
        </div>
    </div>

    <!-- Input Area -->
    <div style="padding: 10px; border-top: 1px solid #ddd; display: flex; gap: 5px;">
        <input type="text" id="chat-input" placeholder="Ask about services..." style="flex: 1; padding: 8px; border: 1px solid #ccc; border-radius: 5px; outline: none;">
        <button id="send-btn-widget" style="background: #007bff; color: white; border: none; padding: 8px 15px; border-radius: 5px; cursor: pointer;">➤</button>
    </div>
</div>
  <!-- Ai system for BaseraConstrction end  -->




<!-- Contact Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="card border-0 shadow">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="fw-bold mb-4">Send Us a Message</h3>

                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        @endif

                        @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <strong>Please fix the following errors:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                        id="phone" name="phone" value="{{ old('phone') }}" required>
                                    @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="service" class="form-label">Service of Interest *</label>
                                    <select class="form-select @error('service') is-invalid @enderror"
                                        id="service" name="service" required>
                                        <option value="">Select a service</option>
                                        <option value="residential" {{ old('service') == 'residential' ? 'selected' : '' }}>Residential Construction</option>
                                        <option value="commercial" {{ old('service') == 'commercial' ? 'selected' : '' }}>Commercial Construction</option>
                                        <option value="renovation" {{ old('service') == 'renovation' ? 'selected' : '' }}>Renovation & Remodeling</option>
                                        <option value="structural" {{ old('service') == 'structural' ? 'selected' : '' }}>Structural Engineering</option>
                                        <option value="tubewell-drilling" {{ old('service') == 'tubewell-drilling' ? 'selected' : '' }}>Tubewell Drilling</option>
                                        <option value="pump-installation" {{ old('service') == 'pump-installation' ? 'selected' : '' }}>Pump Installation</option>
                                        <option value="water-maintenance" {{ old('service') == 'water-maintenance' ? 'selected' : '' }}>Water System Maintenance</option>
                                        <option value="site-survey" {{ old('service') == 'site-survey' ? 'selected' : '' }}>Site Survey & Analysis</option>
                                        <option value="other" {{ old('service') == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('service')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Your Message *</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror"
                                        id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                    @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">
                                        <i class="bi bi-send me-2"></i> Send Message
                                    </button>
                                </div>

                                <div class="col-12 mt-3 text-center">
                                    <p class="fw-bold mb-2">Want to confirm your booking with advance?</p>

                                    <a href="{{ url('/pay') }}" class="btn btn-success btn-lg w-100">
                                        <i class="bi bi-currency-rupee me-2"></i> Pay ₹500 Advance
                                    </a>

                                    <small class="text-muted d-block mt-2">
                                        Secure online payment via Razorpay
                                    </small>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-5">
                <h3 class="fw-bold mb-4">Contact Information</h3>

                <div class="contact-info-box mb-4">
                    <div class="d-flex align-items-start">
                        <div class="contact-icon me-3">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">Our Office</h5>
                            <p class="text-muted mb-0">
                                123 Construction Road<br>
                                Muzaffarnagar, Uttar Pradesh<br>
                                India - 251001
                            </p>
                        </div>
                    </div>
                </div>

                <div class="contact-info-box mb-4">
                    <div class="d-flex align-items-start">
                        <div class="contact-icon me-3">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">Call Us</h5>
                            <p class="text-muted mb-1">+91 9876543210</p>
                            <p class="text-muted mb-0">+91 9876543211</p>
                        </div>
                    </div>
                </div>

                <div class="contact-info-box mb-4">
                    <div class="d-flex align-items-start">
                        <div class="contact-icon me-3">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">Email Us</h5>
                            <p class="text-muted mb-1">info@baseraconstructions.com</p>
                            <p class="text-muted mb-0">projects@baseraconstructions.com</p>
                        </div>
                    </div>
                </div>

                <div class="contact-info-box mb-4">
                    <div class="d-flex align-items-start">
                        <div class="contact-icon me-3">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">Business Hours</h5>
                            <p class="text-muted mb-1">Monday - Saturday: 9:00 AM - 6:00 PM</p>
                            <p class="text-muted mb-0">Sunday: Closed</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-4">
                    <h5 class="fw-bold mb-3">Follow Us</h5>
                    <div class="social-links">
                        <a href="#" class="btn btn-outline-primary btn-sm me-2 mb-2">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm me-2 mb-2">
                            <i class="bi bi-linkedin me-1"></i> LinkedIn
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm me-2 mb-2">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm mb-2">
                            <i class="bi bi-twitter me-1"></i> Twitter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">Find Us on the Map</h3>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps?q=30.31265,78.03143&z=15&output=embed"
                width="100%"
                height="450"
                style="border:0; border-radius: 10px;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Frequently Asked Questions</h2>
            <p class="lead text-muted">Quick answers to common questions</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What services do you provide?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We specialize in both construction and tubewell services, including residential and
                                commercial construction, renovations, structural engineering, tubewell drilling,
                                pump installation, and water system maintenance.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How long does a typical project take?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Project timelines vary based on scope and complexity. Residential projects typically
                                take 6-12 months, commercial projects 12-24 months, and tubewell installations 2-4
                                weeks. We provide detailed timelines during the consultation phase.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Do you provide free quotes?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! We offer free, no-obligation quotes for all our services. Simply contact us
                                with your project details, and we'll schedule a site visit to provide an accurate
                                estimate.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What areas do you serve?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We primarily serve Muzaffarnagar and surrounding areas in Uttar Pradesh. For
                                large-scale projects, we're happy to discuss work in neighboring regions.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Are you licensed and insured?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we are fully licensed and insured. We maintain all necessary certifications
                                and insurance coverage to protect both our clients and our team throughout every
                                project.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Ready to Get Started?</h2>
        <p class="lead mb-4">Contact us today for a free consultation and quote</p>
        <a href="tel:+919876543210" class="btn btn-success btn-lg custom-hover">
            <i class="bi bi-telephone-fill me-2"></i> Call Now
        </a>
    </div>
</section>



<!-- =======================
     AI CHAT SECTION start Js
   ======================= -->
   
<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log("Basera AI Script Loaded! 🚀"); // Console mein check karna

        const chatInput = document.getElementById('inline-chat-input');
        const sendBtn = document.getElementById('inline-send-btn');
        const messagesContainer = document.getElementById('inline-chat-messages');

        // Check karo ki elements mile ya nahi
        if (!chatInput || !sendBtn) {
            console.error("Error: Chat Input ya Button HTML mein nahi mila!");
            return;
        }

        // Message UI par dikhane ka function
        function appendMessage(text, sender) {
            const wrapper = document.createElement('div');
            wrapper.className = `d-flex flex-column align-items-${sender === 'user' ? 'end' : 'start'} mb-3`;

            const bubble = document.createElement('div');
            bubble.className = `p-3 rounded-3 shadow-sm ${sender === 'user' ? 'bg-primary text-white' : 'bg-light text-dark'}`;
            bubble.style.maxWidth = '85%';
            if (sender === 'user') bubble.style.borderBottomRightRadius = '0';
            else bubble.style.borderBottomLeftRadius = '0';

            bubble.innerHTML = text;
            wrapper.appendChild(bubble);

            // Time/Label
            const label = document.createElement('small');
            label.className = 'text-muted mt-1 mx-1';
            label.style.fontSize = '11px';
            label.innerText = sender === 'user' ? 'You' : 'Basera AI';
            wrapper.appendChild(label);

            messagesContainer.appendChild(wrapper);
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        // Send Logic
        async function sendMessage() {
            const message = chatInput.value.trim();
            
            // Agar khali hai toh return
            if (!message) {
                console.log("Empty message, nothing sent.");
                return;
            }

            console.log("Sending Message: " + message); // Debugging

            // 1. User message UI pe
            appendMessage(message, 'user');
            chatInput.value = '';

            // 2. Typing Indicator
            const typingDiv = document.createElement('div');
            typingDiv.id = 'typing-indicator';
            typingDiv.className = 'text-muted ms-2 mb-3';
            typingDiv.style.fontSize = '12px';
            typingDiv.innerHTML = '<i>Basera AI is typing...</i>';
            messagesContainer.appendChild(typingDiv);
            messagesContainer.scrollTop = messagesContainer.scrollHeight;

            try {
                // CSRF Token (Case 3 wala jugad)
                const token = "{{ csrf_token() }}"; 

                // 3. Backend Call
                const response = await fetch("{{ route('send.chat') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': token
                    },
                    body: JSON.stringify({ message: message })
                });

                const data = await response.json();
                
                // Typing Hatao
                if(document.getElementById('typing-indicator')) {
                    document.getElementById('typing-indicator').remove();
                }

                if (data.status === 'success') {
                    appendMessage(data.reply, 'ai');
                } else {
                    console.error("Server Error:", data);
                    appendMessage("⚠️ Error: " + (data.reply || "Connection Failed"), 'ai');
                }

            } catch (error) {
                if(document.getElementById('typing-indicator')) document.getElementById('typing-indicator').remove();
                appendMessage("❌ System Error. Check Console (F12).", 'ai');
                console.error("Fetch Error:", error);
            }
        }

        // --- 🔥 IMPROVED EVENT LISTENERS 🔥 ---

        // 1. Button Click
        sendBtn.addEventListener('click', function(e) {
            e.preventDefault(); // Page refresh roko
            sendMessage();
        });

        // 2. Enter Key (Keydown is better than keypress)
        chatInput.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault(); // Form submit/Refresh roko
                console.log("Enter Key Pressed!"); // Console m dikhega
                sendMessage();
            }
        });
    });
</script>
<!-- =======================
     AI CHAT SECTION END js
   ======================= -->
@endsection