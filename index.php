<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>HarvestBite Catering — Premium USA Event Catering Services</title>

<meta name="description" content="HarvestBite Catering offers premium USA-based wedding catering, corporate event catering, and private party catering with custom menus and professional chefs.">

<meta name="robots" content="index, follow">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="HarvestBite Catering — USA Premium Catering Services">
<meta property="og:description" content="Professional catering services for weddings, corporate events, and private celebrations across USA.">
<meta property="og:locale" content="en_US">

<!-- Canonical -->
<link rel="canonical" href="https://yourdomain.com/home.php">

<style>

/* ---------- Global Reset ---------- */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family: "Poppins", Arial, sans-serif;
    color:#0f172a;
    background:#ffffff;
}

/* ---------- Header Wrapper ---------- */
.site-header{
    width:100%;
    background:#ffffff;
    border-bottom:1px solid #e5e7eb;
    position:sticky;
    top:0;
    z-index:999;
}

/* ---------- Container ---------- */
.header-container{
    max-width:1200px;
    margin:auto;
    padding:14px 18px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:20px;
}

/* ---------- Branding ---------- */
.brand{
    display:flex;
    align-items:center;
    gap:10px;
    text-decoration:none;
}

.logo-icon{
    width:38px;
    height:38px;
    border-radius:12px;
    background:#fde68a;
    border:2px solid #facc15;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:18px;
}

.brand-name{
    font-size:20px;
    font-weight:700;
    letter-spacing:.3px;
}

.brand-name span{
    color:#ca8a04;
}

/* ---------- Navigation ---------- */
.navbar{
    display:flex;
    align-items:center;
    gap:24px;
}

.navbar a{
    text-decoration:none;
    color:#0f172a;
    font-size:14px;
    font-weight:500;
    transition:.25s;
}

.navbar a:hover{
    color:#ca8a04;
}

/* ---------- CTA Button ---------- */
.header-cta{
    padding:10px 16px;
    border-radius:10px;
    background:#ca8a04;
    color:#ffffff;
    border:none;
    cursor:pointer;
    font-size:14px;
    font-weight:600;
    transition:.25s;
}

.header-cta:hover{
    background:#92400e;
}

/* ---------- Mobile Menu Button ---------- */
.menu-toggle{
    display:none;
    font-size:26px;
    background:none;
    border:none;
    cursor:pointer;
}

/* ---------- Mobile Dropdown ---------- */
.mobile-nav{
    display:none;
    flex-direction:column;
    gap:14px;
    padding:14px 18px;
    background:#ffffff;
    border-top:1px solid #e5e7eb;
}

.mobile-nav a{
    text-decoration:none;
    color:#111827;
    font-size:15px;
}

.mobile-nav a:hover{
    color:#ca8a04;
}

/* ---------- Responsive ---------- */
@media(max-width:900px){

    .navbar{
        display:none;
    }

    .menu-toggle{
        display:block;
    }
}

@media(max-width:600px){
    .brand-name{
        font-size:18px;
    }
}


/* ===== HERO SECTION ===== */
.hero-section{
    background:#fff7ec;
    padding:70px 0;
}

.hero-wrapper{
    max-width:1200px;
    margin:auto;
    padding:0 18px;
    display:grid;
    grid-template-columns:1.2fr 1fr;
    align-items:center;
    gap:40px;
}

/* ----- LEFT CONTENT ----- */
.hero-content h1{
    font-size:36px;
    line-height:1.25;
    color:#111827;
    font-weight:800;
    margin-bottom:12px;
}

.hero-content p{
    color:#374151;
    font-size:15px;
    line-height:1.7;
    margin-bottom:18px;
}

/* ----- BUTTONS ----- */
.hero-actions{
    display:flex;
    gap:14px;
    margin-bottom:14px;
}

.primary-btn{
    padding:12px 18px;
    background:#ca8a04;
    color:#fff;
    border-radius:12px;
    font-weight:600;
    text-decoration:none;
    transition:.25s;
}

.primary-btn:hover{
    background:#92400e;
}

.outline-btn{
    padding:11px 18px;
    border-radius:12px;
    border:2px solid #ca8a04;
    color:#92400e;
    text-decoration:none;
    font-weight:600;
    background:#fff;
    transition:.25s;
}

.outline-btn:hover{
    background:#fef3c7;
}

/* ----- TRUST BADGES ----- */
.trust-box{
    display:flex;
    flex-wrap:wrap;
    gap:10px 16px;
    margin-top:6px;
    color:#065f46;
    font-size:13px;
    font-weight:600;
}

/* ----- RIGHT IMAGE ----- */
.hero-image img{
    width:100%;
    border-radius:18px;
    box-shadow:0 10px 28px rgba(0,0,0,.12);
    object-fit:cover;
}

/* ===== RESPONSIVE ===== */

/* Tablets */
@media(max-width:900px){

    .hero-wrapper{
        grid-template-columns:1fr;
        text-align:center;
    }

    .hero-actions{
        justify-content:center;
    }

    .trust-box{
        justify-content:center;
    }
}

/* Mobile */
@media(max-width:520px){

    .hero-content h1{
        font-size:28px;
    }

    .hero-section{
        padding:55px 0;
    }
}


/* ===== SERVICES SECTION ===== */
.services-section{
    background:#fff7ec;
    padding:70px 0;
}

.services-container{
    max-width:1200px;
    margin:auto;
    padding:0 18px;
}

/* ----- HEADER ----- */
.services-header{
    text-align:center;
    max-width:780px;
    margin:auto;
    margin-bottom:28px;
}

.services-header h2{
    font-size:30px;
    font-weight:800;
    color:#111827;
    margin-bottom:6px;
}

.services-header p{
    color:#4b5563;
    font-size:15px;
    line-height:1.7;
}

/* ----- GRID LAYOUT ----- */
.services-grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:24px;
}

/* ----- SERVICE CARD ----- */
.service-card{
    background:#ffffff;
    border-radius:18px;
    border:1px solid #fcd34d;
    box-shadow:0 10px 26px rgba(0,0,0,.06);
    padding:14px 14px 18px;
    display:flex;
    flex-direction:column;
}

/* Image */
.service-image img{
    width:100%;
    height:210px;
    object-fit:cover;
    border-radius:14px;
    margin-bottom:10px;
}

.service-card h3{
    font-size:20px;
    color:#92400e;
    margin-bottom:6px;
}

.service-card p{
    font-size:14px;
    color:#4b5563;
    line-height:1.6;
    margin-bottom:10px;
}

/* List */
.service-list{
    list-style:none;
    padding-left:0;
    margin-bottom:12px;
}

.service-list li{
    font-size:13px;
    margin-bottom:4px;
    color:#065f46;
    font-weight:600;
}

/* Button */
.service-btn{
    margin-top:auto;
    display:inline-block;
    padding:10px 16px;
    border-radius:12px;
    text-decoration:none;
    color:#ffffff;
    background:#ca8a04;
    font-weight:600;
    transition:.25s;
}

.service-btn:hover{
    background:#92400e;
}

/* ===== RESPONSIVE ===== */

/* Tablet */
@media(max-width:980px){
    .services-grid{
        grid-template-columns:repeat(2, 1fr);
    }
}

/* Mobile */
@media(max-width:600px){

    .services-section{
        padding:55px 0;
    }

    .services-grid{
        grid-template-columns:1fr;
    }

    .services-header h2{
        font-size:26px;
    }
}



/* ===== ABOUT SECTION ===== */
.about-section{
    background:#ffffff;
    padding:70px 0;
}

.about-wrapper{
    max-width:1200px;
    margin:auto;
    padding:0 18px;
    display:grid;
    grid-template-columns:1.1fr 1fr;
    gap:40px;
    align-items:center;
}

/* ----- CONTENT ----- */
.about-content h2{
    font-size:30px;
    color:#111827;
    font-weight:800;
    margin-bottom:8px;
}

.about-intro{
    font-weight:600;
    color:#374151;
    margin-bottom:6px;
}

.about-content p{
    color:#4b5563;
    line-height:1.7;
    font-size:15px;
    margin-bottom:10px;
}

/* ----- STATS ----- */
.about-stats{
    display:flex;
    flex-wrap:wrap;
    gap:18px;
    margin:12px 0 10px;
}

.stat-box{
    background:#fff7ec;
    border:1px solid #fcd34d;
    border-radius:14px;
    padding:12px 16px;
    min-width:140px;
}

.stat-box h3{
    font-size:22px;
    color:#92400e;
    margin-bottom:2px;
}

.stat-box span{
    font-size:12px;
    color:#6b7280;
    font-weight:600;
}

/* ----- BULLET LIST ----- */
.about-list{
    margin:8px 0 12px;
    padding-left:12px;
    list-style:none;
}

.about-list li{
    font-size:14px;
    color:#065f46;
    margin-bottom:4px;
    font-weight:600;
}

/* ----- CTA BUTTON ----- */
.about-btn{
    display:inline-block;
    margin-top:6px;
    padding:11px 18px;
    border-radius:12px;
    background:#ca8a04;
    color:#fff;
    text-decoration:none;
    font-weight:600;
    transition:.25s;
}

.about-btn:hover{
    background:#92400e;
}

/* ----- IMAGE ----- */
.about-image img{
    width:100%;
    border-radius:18px;
    box-shadow:0 10px 28px rgba(0,0,0,.12);
    object-fit:cover;
}

/* ===== RESPONSIVE ===== */

/* Tablet */
@media(max-width:900px){
    .about-wrapper{
        grid-template-columns:1fr;
        text-align:center;
    }

    .about-stats{
        justify-content:center;
    }

    .about-list{
        text-align:left;
        margin:auto;
        max-width:420px;
    }
}

/* Mobile */
@media(max-width:520px){
    .about-section{
        padding:55px 0;
    }

    .about-content h2{
        font-size:26px;
    }
}


/* ===== MENU SECTION ===== */
.menu-section{
    background:#ffffff;
    padding:70px 0;
}

.menu-container{
    max-width:1200px;
    margin:auto;
    padding:0 18px;
}

/* ----- HEADER ----- */
.menu-header{
    text-align:center;
    max-width:780px;
    margin:auto;
    margin-bottom:28px;
}

.menu-header h2{
    font-size:30px;
    font-weight:800;
    color:#111827;
    margin-bottom:6px;
}

.menu-header p{
    color:#4b5563;
    font-size:15px;
    line-height:1.7;
}

/* ----- GRID ----- */
.menu-grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:24px;
}

/* ----- CARD ----- */
.menu-card{
    background:#fff7ec;
    border:1px solid #fcd34d;
    border-radius:18px;
    box-shadow:0 10px 26px rgba(0,0,0,.06);
    padding:14px 14px 18px;
    display:flex;
    flex-direction:column;
}

.menu-image img{
    width:100%;
    height:210px;
    object-fit:cover;
    border-radius:14px;
    margin-bottom:10px;
}

.menu-card h3{
    font-size:20px;
    color:#92400e;
    margin-bottom:6px;
}

.menu-card p{
    font-size:14px;
    color:#4b5563;
    line-height:1.6;
    margin-bottom:10px;
}

/* ----- LIST ----- */
.menu-list{
    list-style:none;
    padding-left:0;
    margin-bottom:10px;
}

.menu-list li{
    font-size:13px;
    color:#374151;
    margin-bottom:4px;
}

/* ----- TAG ----- */
.menu-tag{
    font-size:12px;
    color:#065f46;
    font-weight:700;
    margin-top:auto;
}

/* ----- CTA BUTTON ----- */
.menu-cta{
    margin-top:26px;
    text-align:center;
}

.menu-btn{
    display:inline-block;
    padding:11px 18px;
    border-radius:12px;
    background:#ca8a04;
    color:#ffffff;
    font-weight:600;
    text-decoration:none;
    transition:.25s;
}

.menu-btn:hover{
    background:#92400e;
}

/* ===== RESPONSIVE ===== */

/* Tablet */
@media(max-width:980px){
    .menu-grid{
        grid-template-columns:repeat(2, 1fr);
    }
}

/* Mobile */
@media(max-width:600px){

    .menu-section{
        padding:55px 0;
    }

    .menu-grid{
        grid-template-columns:1fr;
    }

    .menu-header h2{
        font-size:26px;
    }
}


/* ===== LOCATION SECTION ===== */
.location-section{
    background:#fff7ec;
    padding:70px 0;
}

.location-container{
    max-width:1200px;
    margin:auto;
    padding:0 18px;
}

/* ----- HEADER ----- */
.location-header{
    text-align:center;
    max-width:820px;
    margin:auto;
    margin-bottom:28px;
}

.location-header h2{
    font-size:30px;
    font-weight:800;
    color:#111827;
    margin-bottom:6px;
}

.location-header p{
    color:#4b5563;
    font-size:15px;
    line-height:1.7;
}

/* ----- GRID ----- */
.location-grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:22px;
}

/* ----- CARD ----- */
.location-card{
    background:#ffffff;
    border:1px solid #fcd34d;
    border-radius:18px;
    padding:14px 16px 16px;
    box-shadow:0 10px 26px rgba(0,0,0,.06);
    display:flex;
    flex-direction:column;
}

.location-card h3{
    font-size:18px;
    color:#92400e;
    margin-bottom:6px;
}

.location-card ul{
    list-style:none;
    padding-left:0;
    margin-bottom:10px;
}

.location-card ul li{
    font-size:13px;
    color:#374151;
    margin-bottom:3px;
}

/* ----- BADGE ----- */
.loc-badge{
    margin-top:auto;
    font-size:12px;
    color:#065f46;
    font-weight:700;
}

/* ----- CTA BUTTON ----- */
.location-cta{
    text-align:center;
    margin-top:26px;
}

.location-btn{
    display:inline-block;
    padding:11px 18px;
    border-radius:12px;
    background:#ca8a04;
    color:#ffffff;
    text-decoration:none;
    font-weight:600;
    transition:.25s;
}

.location-btn:hover{
    background:#92400e;
}

/* ===== RESPONSIVE ===== */

/* Tablet */
@media(max-width:980px){
    .location-grid{
        grid-template-columns:repeat(2, 1fr);
    }
}

/* Mobile */
@media(max-width:600px){

    .location-section{
        padding:55px 0;
    }

    .location-grid{
        grid-template-columns:1fr;
    }

    .location-header h2{
        font-size:26px;
    }
}

/* ===== TESTIMONIALS SECTION ===== */

.testimonials-section {
  padding: 70px 0;
  background: #f7f9fb;
  font-family: "Poppins", sans-serif;
}

.testimonials-section .container {
  max-width: 1200px;
  margin: auto;
  padding: 0 16px;
}

.section-header {
  text-align: center;
  margin-bottom: 45px;
}

.section-header h2 {
  font-size: 32px;
  margin-bottom: 8px;
  color: #222;
}

.section-header p {
  color: #555;
  font-size: 15px;
}

/* Grid Layout */
.testimonial-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 22px;
}

/* Testimonial Card */
.testimonial-card {
  background: #fff;
  border-radius: 16px;
  padding: 20px;
  border: 1px solid #e5e7eb;
  box-shadow: 0 8px 22px rgba(0,0,0,0.05);
  transition: 0.3s ease;
}

.testimonial-card:hover {
  transform: translateY(-4px);
}

/* Top Profile Section */
.testimonial-top {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 12px;
}

.testimonial-top img {
  width: 64px;
  height: 64px;
  border-radius: 50%;
  border: 2px solid #ddd;
}

.testimonial-top h3 {
  margin: 0;
  font-size: 16px;
  color: #111;
}

.testimonial-top span {
  font-size: 13px;
  color: #777;
}

/* Review Text */
.testimonial-text {
  font-size: 14px;
  line-height: 1.6;
  color: #444;
  margin-top: 6px;
}

/* Star Rating */
.rating {
  margin-top: 12px;
  color: #ffb703;
  font-size: 18px;
  letter-spacing: 1px;
}

/* ===== Responsive Design ===== */

@media (max-width: 992px) {
  .testimonial-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .testimonial-grid {
    grid-template-columns: 1fr;
  }

  .section-header h2 {
    font-size: 26px;
  }
}



/* ===== PRICING SECTION ===== */

.pricing-section {
  padding: 70px 0;
  background: #ffffff;
  font-family: "Poppins", sans-serif;
}

.pricing-section .container {
  max-width: 1200px;
  margin: auto;
  padding: 0 16px;
}

.section-header {
  text-align: center;
  margin-bottom: 45px;
}

.section-header h2 {
  font-size: 32px;
  color: #111;
  margin-bottom: 8px;
}

.section-header p {
  color: #555;
  font-size: 15px;
}

/* Grid */
.pricing-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 22px;
}

/* Price Card */
.price-card {
  background: #f8fafc;
  border-radius: 18px;
  border: 1px solid #e5e7eb;
  padding: 22px;
  box-shadow: 0 10px 24px rgba(0,0,0,0.05);
  transition: 0.3s ease;
  position: relative;
}

.price-card:hover {
  transform: translateY(-4px);
}

.price-card h3 {
  margin: 0;
  font-size: 20px;
  color: #111;
}

.package-tag {
  font-size: 13px;
  color: #777;
  margin: 6px 0 12px;
}

/* Price Style */
.price {
  font-size: 32px;
  font-weight: 700;
  color: #111;
  margin-bottom: 12px;
}

.price span {
  font-size: 13px;
  color: #666;
}

/* Feature List */
.package-features {
  list-style: none;
  padding: 0;
  margin: 0 0 14px;
}

.package-features li {
  font-size: 14px;
  color: #333;
  padding: 6px 0;
  border-bottom: 1px dashed #ddd;
}

/* Buttons */
.price-btn {
  display: block;
  text-align: center;
  padding: 10px;
  border-radius: 10px;
  background: #111827;
  color: #fff;
  text-decoration: none;
  font-size: 14px;
  transition: 0.3s;
}

.price-btn:hover {
  opacity: 0.9;
}

.highlight {
  background: #2563eb;
}

/* Featured (Middle Card) */
.featured {
  background: #ffffff;
  border: 2px solid #2563eb;
}

.badge {
  position: absolute;
  top: -10px;
  right: 14px;
  padding: 6px 10px;
  background: #2563eb;
  color: white;
  border-radius: 8px;
  font-size: 11px;
}

/* Note */
.pricing-note {
  text-align: center;
  margin-top: 18px;
  font-size: 13px;
  color: #666;
}

/* ===== Responsive ===== */

@media (max-width: 992px) {
  .pricing-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .pricing-grid {
    grid-template-columns: 1fr;
  }

  .section-header h2 {
    font-size: 26px;
  }
}


/* ===== QUOTE FORM SECTION ===== */

.quote-section {
  padding: 70px 0;
  background: #f7f9fb;
  font-family: "Poppins", sans-serif;
}

.quote-section .container {
  max-width: 1100px;
  margin: auto;
  padding: 0 16px;
}

.section-header {
  text-align: center;
  margin-bottom: 35px;
}

.section-header h2 {
  font-size: 30px;
  color: #111;
  margin-bottom: 6px;
}

.section-header p {
  color: #555;
  font-size: 14px;
}

.quote-wrapper {
  background: #ffffff;
  border-radius: 18px;
  border: 1px solid #e5e7eb;
  padding: 22px;
  box-shadow: 0 10px 24px rgba(0,0,0,0.05);
}

/* Form Layout */
.quote-form {
  width: 100%;
}

.form-row {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 14px;
  margin-bottom: 10px;
}

.form-group label {
  font-size: 13px;
  color: #444;
}

.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  padding: 10px;
  border-radius: 10px;
  border: 1px solid #d1d5db;
  background: #f9fafb;
  font-size: 14px;
  outline: none;
}

.form-group textarea {
  resize: none;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  border-color: #2563eb;
}

/* Button */
.submit-btn {
  width: 100%;
  padding: 12px;
  margin-top: 6px;
  border-radius: 10px;
  border: none;
  background: #111827;
  color: #fff;
  font-size: 14px;
  cursor: pointer;
  transition: 0.3s;
}

.submit-btn:hover {
  opacity: 0.9;
}

/* Success Message */
.success-msg {
  margin-top: 10px;
  font-size: 13px;
  color: #0a7a27;
}

/* Responsive */
@media (max-width: 768px) {
  .form-row {
    grid-template-columns: 1fr;
  }

  .section-header h2 {
    font-size: 24px;
  }
}


/* ===== SITE FOOTER ===== */
.site-footer {
  background: #111827;
  color: #d1d5db;
  font-family: "Poppins", sans-serif;
  padding: 50px 16px 25px;
}

.footer-container {
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: 1.5fr 1fr 1fr 1.2fr;
  gap: 28px;
  flex-wrap: wrap;
}

/* Branding */
.footer-logo {
  font-size: 26px;
  font-weight: 800;
  color: #fcd34d;
  margin-bottom: 10px;
}

.footer-logo span {
  color: #fff;
}

.footer-desc {
  font-size: 14px;
  line-height: 1.6;
  color: #d1d5db;
}

/* Quick Links */
.footer-links h4,
.footer-contact h4,
.footer-newsletter h4 {
  font-size: 16px;
  color: #fcd34d;
  margin-bottom: 12px;
}

.footer-links ul {
  list-style: none;
  padding: 0;
}

.footer-links ul li {
  margin-bottom: 8px;
}

.footer-links ul li a {
  color: #d1d5db;
  text-decoration: none;
  font-size: 14px;
  transition: 0.3s;
}

.footer-links ul li a:hover {
  color: #fcd34d;
}

/* Contact Info */
.footer-contact p {
  font-size: 14px;
  margin-bottom: 6px;
}

.footer-contact a {
  color: #d1d5db;
  text-decoration: none;
}

.footer-contact a:hover {
  color: #fcd34d;
}

/* Newsletter */
.footer-newsletter form {
  display: flex;
  flex-direction: column;
}

.footer-newsletter input[type="email"] {
  padding: 10px;
  border-radius: 10px;
  border: none;
  margin-bottom: 8px;
  outline: none;
}

.footer-newsletter button {
  padding: 10px;
  border-radius: 10px;
  border: none;
  background: #fcd34d;
  color: #111827;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s;
}

.footer-newsletter button:hover {
  background: #fff176;
}

.success-msg {
  margin-top: 6px;
  font-size: 13px;
  color: #22c55e;
}

/* Footer Bottom */
.footer-bottom {
  text-align: center;
  border-top: 1px solid #374151;
  padding-top: 15px;
  margin-top: 25px;
  font-size: 13px;
  color: #9ca3af;
}

/* Responsive */
@media (max-width: 992px) {
  .footer-container {
    grid-template-columns: 1fr 1fr;
  }
}

@media (max-width: 600px) {
  .footer-container {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .footer-newsletter form {
    align-items: center;
  }

  .footer-newsletter input[type="email"] {
    width: 80%;
  }

  .footer-newsletter button {
    width: 50%;
  }
}

</style>

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

<main>

<!-- ===== HERO / BANNER SECTION ===== -->
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
            <img src="d3.webp"
                 alt="Premium Catering Service USA">
        </div>

    </div>

</section>

<!-- ===== CATERING SERVICES SECTION ===== -->
<section class="services-section" id="services">

    <div class="services-container">

        <!-- Section Header -->
        <div class="services-header">
            <h2>Professional Catering Services Across The USA</h2>
            <p>
                From formal corporate dining to elegant wedding receptions and
                private celebrations — our catering team delivers gourmet food,
                personalized menus and exceptional guest experience.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="services-grid">

            <!-- Corporate Catering -->
            <div class="service-card">
                <div class="service-image">
                    <img src="c1.webp"
                         alt="Corporate Catering USA">
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
                    <img src="c2.webp"
                         alt="Wedding Catering Services">
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
                    <img src="c3.webp"
                         alt="Private Event Catering USA">
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
            <img src="about.webp"
                 alt="Professional Catering Team USA">
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
                    <img src="d1.webp"
                         alt="Event Appetizers Catering">
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
                    <img src="d2.webp"
                         alt="Premium Catering Main Course USA">
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
                    <img src="banner.webp"
                         alt="Dessert Catering Service USA">
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

</main>

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


