<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>HarvestBite Catering — Premium USA Event Catering Services</title>

<meta name="description" content="HarvestBite Catering offers premium USA-based wedding catering, corporate event catering, and private party catering with custom menus and professional chefs.">
<link rel="icon" type="image/webp" sizes="16x16" href="c3.webp">
<link rel="preload" href="style.css" as="style">
<link rel="stylesheet" href="style.css">
 <link rel="preload" as="image" href="d3.webp">
</head>
<body>

<header class="site-header">

    <div class="header-container">

        <!-- Brand -->
        <a href="#" class="brand">
            <div class="logo-icon">🍽️</div>
            <div class="brand-name">
                Harvest<span>Bite</span> Catering
            </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#services">Catering Services</a>
            <a href="#menus">Food Menu</a>
            <a href="#gallery">Event Gallery</a>
            <a href="#contact">Contact</a>
        </nav>

        <!-- CTA -->
        <button class="header-cta">
            Get Quote (USA)
        </button>

        <!-- Mobile Menu Button -->
        <button class="menu-toggle" onclick="toggleMenu()">☰</button>

    </div>

    <!-- Mobile Navigation -->
    <div class="mobile-nav" id="mobileNav">
        <a href="#home" onclick="toggleMenu()">Home</a>
        <a href="#about" onclick="toggleMenu()">About Us</a>
        <a href="#services" onclick="toggleMenu()">Catering Services</a>
        <a href="#menus" onclick="toggleMenu()">Food Menu</a>
        <a href="#gallery" onclick="toggleMenu()">Event Gallery</a>
        <a href="#contact" onclick="toggleMenu()">Contact</a>
    </div>

</header>
  <section class="hero-section" id="home">

    <div class="hero-wrapper">

        <!-- Left Content -->
        <div class="hero-content">

            <h1>
                Premium Event Catering Across The USA —
                Freshly Crafted, Professionally Served
            </h1>

            <p>
                HarvestBite Catering delivers elegant culinary experiences for
                weddings, corporate gatherings, private parties and luxury events.
                From menu planning to full-service event catering — we handle it all.
            </p>

            <div class="hero-actions">
                <a href="#contact" class="primary-btn">Get Free Quote</a>
                <a href="#menus" class="outline-btn">View Menu Selection</a>
            </div>

            <div class="trust-box">
                <span>✔ Trusted by 1200+ USA Clients</span>
                <span>✔ Certified Professional Chefs</span>
            </div>

        </div>

        <!-- Right Illustration / Banner Image -->
       <div class="hero-image">
  <img
    src="d3.webp"
    width="1200"
    height="900"
    alt="Premium Catering Service USA"
    decoding="async"
    fetchpriority="high"
    loading="eager"
    style="max-width:100%;height:auto"
  >
</div>


    </div>

</section>


<section class="services-section" id="services">

    <div class="services-container">

        <div class="services-header">
            <h2>Professional Catering Services Across The USA</h2>
            <p>
                From formal corporate dining to elegant wedding receptions and
                private celebrations — our catering team delivers gourmet food,
                personalized menus and exceptional guest experience.
            </p>
        </div>

        <div class="services-grid">

            <!-- Corporate Catering -->
            <div class="service-card">
                <div class="service-image">
                    <img
                        src="c1.webp"
                        width="900"
                        height="600"
                        loading="lazy"
                        decoding="async"
                        alt="Corporate Catering USA"
                        style="max-width:100%;height:auto"
                    >
                </div>

                <h3>Corporate & Business Catering</h3>
                <p>
                    Ideal for executive meetings, conferences, training events,
                    office lunches and corporate receptions with professional service standards.
                </p>

                <ul class="service-list">
                    <li>✔ Conference & seminar catering</li>
                    <li>✔ Executive lunch arrangements</li>
                    <li>✔ Business event buffet setups</li>
                    <li>✔ Professional onsite serving staff</li>
                </ul>

                <a href="#contact" class="service-btn">
                    Book Corporate Catering
                </a>
            </div>

            <!-- Wedding Catering -->
            <div class="service-card">
                <div class="service-image">
                    <img
                        src="c2.webp"
                        width="900"
                        height="600"
                        loading="lazy"
                        decoding="async"
                        alt="Wedding Catering Services"
                        style="max-width:100%;height:auto"
                    >
                </div>

                <h3>Wedding & Reception Catering</h3>
                <p>
                    Elegant banquet-style wedding catering with customized menus,
                    premium presentation and full-service event coordination support.
                </p>

                <ul class="service-list">
                    <li>✔ Wedding dinner catering</li>
                    <li>✔ Reception & banquet catering</li>
                    <li>✔ Custom bride & groom menu planning</li>
                    <li>✔ Fine-dining presentation style</li>
                </ul>

                <a href="#contact" class="service-btn">
                    Schedule Wedding Consultation
                </a>
            </div>

            <!-- Private / Social Events -->
            <div class="service-card">
                <div class="service-image">
                    <img
                        src="c3.webp"
                        width="900"
                        height="600"
                        loading="lazy"
                        decoding="async"
                        alt="Private Event Catering USA"
                        style="max-width:100%;height:auto"
                    >
                </div>

                <h3>Private & Social Event Catering</h3>
                <p>
                    Designed for birthday celebrations, family gatherings,
                    holiday parties and upscale private dining experiences.
                </p>

                <ul class="service-list">
                    <li>✔ Birthday & anniversary catering</li>
                    <li>✔ Private home event catering</li>
                    <li>✔ Outdoor & backyard celebrations</li>
                    <li>✔ Premium buffet & live-station options</li>
                </ul>

                <a href="#contact" class="service-btn">
                    Plan Your Event Catering
                </a>
            </div>

        </div>

    </div>

</section>



<!-- ===== ABOUT CATERING COMPANY ===== -->
<section class="about-section" id="about">

    <div class="about-wrapper">

        <!-- Left Content -->
        <div class="about-content">

            <h2>About HarvestBite Catering</h2>

            <p class="about-intro">
                Based in the United States, HarvestBite Catering specializes in
                premium event catering tailored for weddings, corporate functions,
                executive meetings, private celebrations and large-scale events.
            </p>

            <p>
                Our culinary team focuses on authentic flavors, modern presentation
                and flawless guest experience — ensuring every event receives
                restaurant-quality food and professional service.
            </p>

            <div class="about-stats">

                <div class="stat-box">
                    <h3>12+</h3>
                    <span>Years of Catering Excellence</span>
                </div>

                <div class="stat-box">
                    <h3>1,200+</h3>
                    <span>Events Successfully Served</span>
                </div>

                <div class="stat-box">
                    <h3>50+</h3>
                    <span>Certified Culinary Professionals</span>
                </div>

            </div>

            <ul class="about-list">
                <li>✔ Full-service onsite event catering</li>
                <li>✔ Custom-designed menus for every occasion</li>
                <li>✔ Premium hygiene & food safety standards</li>
                <li>✔ Dedicated event coordination support</li>
            </ul>

            <a href="#services" class="about-btn">
                Explore Our Catering Services
            </a>

        </div>

        <!-- Right Image -->
        <div class="about-image">

            <img
                src="about.webp"
                alt="Professional Catering Team USA"
                
                <!-- prevent layout shift -->
                width="720"
                height="820"

                <!-- better decode -->
                decoding="async"

                <!-- below the fold image -->
                loading="lazy"
                fetchpriority="low"

                <!-- responsive hint -->
                sizes="(max-width: 768px) 100vw, 45vw"
            >
        </div>

    </div>

</section>


<!-- ===== FOOD MENU SHOWCASE ===== -->
<section class="menu-section" id="menus">

    <div class="menu-container">

        <!-- Section Header -->
        <div class="menu-header">
            <h2>Our Signature Catering Menu Selection</h2>
            <p>
                Every dish is thoughtfully prepared by our culinary team — combining
                fresh ingredients, authentic flavors and elegant presentation,
                perfectly suited for weddings, corporate events and private gatherings.
            </p>
        </div>

        <!-- Menu Grid -->
        <div class="menu-grid">

            <!-- Appetizers -->
            <div class="menu-card">
                <div class="menu-image">

                    <img
                        src="d1.webp"
                        alt="Event Appetizers Catering"

                        width="720"
                        height="640"

                        loading="lazy"
                        decoding="async"
                        fetchpriority="low"

                        sizes="(max-width: 768px) 100vw, 32vw"
                    >
                </div>

                <h3>Gourmet Appetizers & Starters</h3>

                <p>
                    Bite-sized selections designed for cocktail receptions,
                    pre-event gatherings and formal welcome arrangements.
                </p>

                <ul class="menu-list">
                    <li>• Artisan cheese & fruit platters</li>
                    <li>• Signature bruschetta & crostini</li>
                    <li>• Herb-roasted appetizer bites</li>
                    <li>• Premium charcuterie selections</li>
                </ul>

                <span class="menu-tag">Perfect for Corporate & Wedding Receptions</span>
            </div>

            <!-- Main Course -->
            <div class="menu-card">
                <div class="menu-image">

                    <img
                        src="d2.webp"
                        alt="Premium Catering Main Course USA"

                        width="720"
                        height="640"

                        loading="lazy"
                        decoding="async"
                        fetchpriority="low"

                        sizes="(max-width: 768px) 100vw, 32vw"
                    >
                </div>

                <h3>Premium Entrées & Main Course</h3>

                <p>
                    A refined selection of multi-cuisine entrées crafted to suit
                    formal dining, banquet dinners and large-scale events.
                </p>

                <ul class="menu-list">
                    <li>• Classic American & Continental menu</li>
                    <li>• Premium vegetarian & gourmet options</li>
                    <li>• Slow-cooked chef-special recipes</li>
                    <li>• Custom event-specific food planning</li>
                </ul>

                <span class="menu-tag">Available in Buffet & Plated Service Style</span>
            </div>

            <!-- Desserts -->
            <div class="menu-card">
                <div class="menu-image">

                    <img
                        src="banner.webp"
                        alt="Dessert Catering Service USA"

                        width="720"
                        height="640"

                        loading="lazy"
                        decoding="async"
                        fetchpriority="low"

                        sizes="(max-width: 768px) 100vw, 32vw"
                    >
                </div>

                <h3>Signature Desserts & Sweet Table</h3>

                <p>
                    Elegant dessert arrangements curated for wedding receptions,
                    social celebrations and luxury catering experiences.
                </p>

                <ul class="menu-list">
                    <li>• Premium dessert bar & pastries</li>
                    <li>• Chocolate & fruit-based selections</li>
                    <li>• Crafted mini dessert assortments</li>
                    <li>• Custom celebration dessert menus</li>
                </ul>

                <span class="menu-tag">Premium Presentation & Display Styling</span>
            </div>

        </div>

        <!-- Call to Action -->
        <div class="menu-cta">
            <a href="#contact" class="menu-btn">
                Request Full Catering Menu
            </a>
        </div>

    </div>

</section>

<!-- ===== USA SERVICE LOCATIONS ===== -->
<section class="location-section" id="locations">

    <div class="location-container">

        <!-- Section Header -->
        <div class="location-header">
            <h2>Serving Events Across Major Cities in The United States</h2>
            <p>
                HarvestBite Catering provides professional full-service event catering
                across multiple states and metropolitan regions — ensuring consistent
                quality, experienced staff and reliable event coordination support.
            </p>
        </div>

        <!-- Locations Grid -->
        <div class="location-grid">

            <div class="location-card">
                <h3>New York Metropolitan Area</h3>
                <ul>
                    <li>• New York City</li>
                    <li>• Brooklyn & Queens</li>
                    <li>• Long Island & Staten Island</li>
                    <li>• Jersey City & Newark</li>
                </ul>
                <span class="loc-badge">High-Volume Event Region</span>
            </div>

            <div class="location-card">
                <h3>California & West Coast</h3>
                <ul>
                    <li>• Los Angeles & Orange County</li>
                    <li>• San Diego</li>
                    <li>• San Francisco Bay Area</li>
                    <li>• Sacramento Region</li>
                </ul>
                <span class="loc-badge">Corporate & Wedding Catering Hub</span>
            </div>

            <div class="location-card">
                <h3>Texas & Southern States</h3>
                <ul>
                    <li>• Dallas – Fort Worth</li>
                    <li>• Houston & Austin</li>
                    <li>• San Antonio</li>
                    <li>• Arlington & Plano</li>
                </ul>
                <span class="loc-badge">Large-Scale Event Coverage</span>
            </div>

            <div class="location-card">
                <h3>Midwest & Central Region</h3>
                <ul>
                    <li>• Chicago Metropolitan Area</li>
                    <li>• Minneapolis – Saint Paul</li>
                    <li>• Kansas City</li>
                    <li>• St. Louis</li>
                </ul>
                <span class="loc-badge">Corporate & Convention Catering</span>
            </div>

            <div class="location-card">
                <h3>Florida & Southeastern Region</h3>
                <ul>
                    <li>• Miami & Fort Lauderdale</li>
                    <li>• Orlando</li>
                    <li>• Tampa Bay</li>
                    <li>• Jacksonville</li>
                </ul>
                <span class="loc-badge">Destination Event Services</span>
            </div>

            <div class="location-card">
                <h3>Nationwide Event Requests</h3>
                <ul>
                    <li>• Traveling Event Catering Support</li>
                    <li>• Multi-city corporate events</li>
                    <li>• Large-capacity weddings</li>
                    <li>• Private luxury events</li>
                </ul>
                <span class="loc-badge">Available On Special Request</span>
            </div>

        </div>

        <!-- CTA -->
        <div class="location-cta">
            <a href="#contact" class="location-btn">
                Check Availability in Your City
            </a>
        </div>

    </div>

</section>

<!-- ===== TESTIMONIALS SECTION ===== -->
<section class="testimonials-section" id="reviews">
  <div class="container">

    <div class="section-header">
      <h2>What Our Clients Say</h2>
      <p>Trusted by families, corporate teams, and wedding planners across the USA</p>
    </div>

    <div class="testimonial-grid">

      <!-- Testimonial 1 -->
      <div class="testimonial-card">
        <div class="testimonial-top">
          <div>
            <h3>Michael Reynolds</h3>
            <span>Corporate Lunch Event • New York</span>
          </div>
        </div>

        <p class="testimonial-text">
          “The food quality, presentation, and service were outstanding. Our
          executive team was highly impressed — easily the best catering
          partner we’ve worked with in the US.”
        </p>

        <div class="rating">★★★★★</div>
      </div>

      <!-- Testimonial 2 -->
      <div class="testimonial-card">
        <div class="testimonial-top">
          <div>
            <h3>Sophia Carter</h3>
            <span>Wedding Catering • California</span>
          </div>
        </div>

        <p class="testimonial-text">
          “From tasting to final execution, everything was flawless.
          Our guests loved the menu — elegant, fresh, and full of flavor.”
        </p>

        <div class="rating">★★★★★</div>
      </div>

      <!-- Testimonial 3 -->
      <div class="testimonial-card">
        <div class="testimonial-top">
          <div>
            <h3>Jonathan Lee</h3>
            <span>Private Home Event • Texas</span>
          </div>
        </div>

        <p class="testimonial-text">
          “Professional team, punctual service and delicious food.
          They handled our backyard celebration beautifully — highly recommended.”
        </p>

        <div class="rating">★★★★★</div>
      </div>

    </div>
  </div>
</section>

<!-- ===== PRICING & PACKAGES SECTION ===== -->
<section class="pricing-section" id="pricing">
  <div class="container">

    <div class="section-header">
      <h2>Pricing & Catering Packages</h2>
      <p>Flexible catering plans crafted for events of every size and style</p>
    </div>

    <div class="pricing-grid">

      <!-- Package 1 -->
      <div class="price-card">
        <h3>Private Gathering</h3>
        <p class="package-tag">Ideal for small home & family events</p>

        <div class="price">$499 <span>/ event</span></div>

        <ul class="package-features">
          <li>Up to 25 Guests</li>
          <li>Customized Menu Selection</li>
          <li>On-site Food Setup</li>
          <li>Professional Catering Staff</li>
          <li>Disposable Serveware Included</li>
        </ul>

        <a href="#contact" class="price-btn">Book This Package</a>
      </div>

      <!-- Package 2 -->
      <div class="price-card featured">
        <div class="badge">Most Popular</div>

        <h3>Wedding & Reception</h3>
        <p class="package-tag">Perfect for luxury wedding celebrations</p>

        <div class="price">$1,499 <span>/ event</span></div>

        <ul class="package-features">
          <li>Up to 120 Guests</li>
          <li>Premium Multi-Course Menu</li>
          <li>Live Buffet & Presentation</li>
          <li>Serving Team & Event Manager</li>
          <li>Elegant Table Setup</li>
        </ul>

        <a href="#contact" class="price-btn highlight">Get Custom Quote</a>
      </div>

      <!-- Package 3 -->
      <div class="price-card">
        <h3>Corporate Events</h3>
        <p class="package-tag">Designed for meetings & office catering</p>

        <div class="price">$899 <span>/ event</span></div>

        <ul class="package-features">
          <li>Up to 60 Guests</li>
          <li>Breakfast / Lunch / Dinner Menu</li>
          <li>Food Delivery & Setup</li>
          <li>Disposable Cutlery Included</li>
          <li>On-time Service Guarantee</li>
        </ul>

        <a href="#contact" class="price-btn">Request Booking</a>
      </div>

    </div>

    <p class="pricing-note">
      * Final pricing may vary based on menu selection, travel distance, and event duration.
    </p>

  </div>
</section>

<!-- ===== QUOTE / BOOKING FORM SECTION ===== -->
<section class="quote-section" id="quote">
  <div class="container">

    <div class="section-header">
      <h2>Request a Catering Quote</h2>
      <p>Share your event details and our team will get back to you shortly</p>
    </div>

    <div class="quote-wrapper">

      <form id="quoteForm" class="quote-form">

        <div class="form-row">
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" required placeholder="Enter your name">
          </div>

          <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" required placeholder="Enter your email">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label>Phone Number</label>
            <input type="tel" name="phone" required placeholder="Enter phone number">
          </div>

          <div class="form-group">
            <label>Event Type</label>
            <select name="event_type" required>
              <option value="">Select Event Type</option>
              <option>Wedding Catering</option>
              <option>Corporate Event</option>
              <option>Private / Home Party</option>
              <option>Birthday / Celebration</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label>Event Location (City & State)</label>
            <input type="text" name="location" required placeholder="Example: Dallas, Texas">
          </div>

          <div class="form-group">
            <label>Guests Count</label>
            <input type="number" name="guests" required placeholder="Approx guests count">
          </div>
        </div>

        <div class="form-group">
          <label>Event Message / Requirements</label>
          <textarea name="message" rows="3" placeholder="Tell us about your event"></textarea>
        </div>

        <button type="submit" class="submit-btn">Submit Request</button>

        <!-- Success Message -->
        <p id="formSuccess" class="success-msg" style="display:none;">
          ✔ Thanks for submitting — our team will contact you soon.
        </p>

      </form>

    </div>

  </div>
</section>

<!-- ===== SITE FOOTER ===== -->
<footer class="site-footer">
  <div class="footer-container">

    <!-- Branding -->
    <div class="footer-branding">
      <div class="footer-logo">
        Harvest<span>Bite</span> Catering
      </div>
      <p class="footer-desc">
        Delivering premium catering experiences across the USA — weddings, corporate events,
        private parties, and social gatherings with style and flavor.
      </p>
    </div>

    <!-- Quick Links -->
    <div class="footer-links">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="#about">About Us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#menus">Menus</a></li>
        <li><a href="#locations">Locations</a></li>
        <li><a href="#reviews">Testimonials</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#quote">Booking</a></li>
      </ul>
    </div>

    <!-- Contact Info -->
    <div class="footer-contact">
      <h4>Contact Us</h4>
      <p>Email: <a href="mailto:info@harvestbite.com">info@harvestbite.com</a></p>
      <p>Phone: <a href="tel:+1234567890">+1 234 567 890</a></p>
      <p>Address: 123 Culinary Ave, New York, NY, USA</p>
    </div>

    <!-- Newsletter Subscription -->
    <div class="footer-newsletter">
      <h4>Subscribe for Updates</h4>
      <form id="footerNewsletter">
        <input type="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
        <p id="newsletterSuccess" class="success-msg" style="display:none;">
          ✔ Thanks for subscribing!
        </p>
      </form>
    </div>

  </div>

  <div class="footer-bottom">
    <p>© 2025 HarvestBite Catering. All Rights Reserved.</p>
  </div>
</footer>




<!-- Newsletter JS -->
<script>
document.getElementById("footerNewsletter").addEventListener("submit", function(e){
  e.preventDefault();
  document.getElementById("newsletterSuccess").style.display = "block";
  this.reset();
  setTimeout(()=>{document.getElementById("newsletterSuccess").style.display = "none";},4000);
});
</script>

<!-- Submit + Reset JS -->
<script>
document.getElementById("quoteForm").addEventListener("submit", function(e){
  e.preventDefault();

  // show success message
  document.getElementById("formSuccess").style.display = "block";

  // reset form
  this.reset();

  // hide message after few seconds (optional)
  setTimeout(() => {
    document.getElementById("formSuccess").style.display = "none";
  }, 4000);
});
</script>

<script>
function toggleMenu(){
    const menu = document.getElementById("mobileNav");
    menu.style.display = (menu.style.display === "flex") ? "none" : "flex";
}
</script>


</body>
</html>











