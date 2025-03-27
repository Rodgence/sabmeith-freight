<?php
    include("includes/header.php");
?>

<style>
    /* Custom Styles for Freight Logistics Page */
    .service-header {
        color: #721c24;
        font-weight: 600;
        padding-bottom: 15px;
        border-bottom: 2px solid #721c24;
        margin-bottom: 25px;
    }
    
    .section-title {
        position: relative;
        display: inline-block;
        color: #721c24;
        margin-bottom: 30px;
        padding-bottom: 10px;
    }
    
    .section-title:after {
        content: '';
        position: absolute;
        width: 50%;
        height: 3px;
        background-color: #721c24;
        bottom: 0;
        left: 0;
    }
    
    .text-center .section-title:after {
        left: 25%;
    }
    
    .logistics-card {
        border-radius: 8px;
        overflow: hidden;
        transition: all 0.3s ease;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        height: 100%;
        border: none;
    }
    
    .logistics-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.12);
    }
    
    .logistics-card-img {
        height: 200px;
        object-fit: cover;
    }
    
    .logistics-card-body {
        padding: 20px;
        border-top: 3px solid #721c24;
    }
    
    .logistics-card-title {
        color: #721c24;
        font-weight: 600;
    }
    
    .gallery-item {
        height: 250px;
        overflow: hidden;
        border-radius: 8px;
        position: relative;
        margin-bottom: 20px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    .gallery-item:hover {
        transform: translateY(-5px);
    }
    
    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .gallery-item:hover img {
        transform: scale(1.05);
    }
    
    .gallery-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(114, 28, 36, 0.8);
        color: white;
        padding: 10px;
        font-weight: 500;
        text-align: center;
    }
    
    .feature-item {
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        transition: all 0.3s ease;
        background-color: #f9f9f9;
        border-left: 4px solid #721c24;
    }
    
    .feature-item:hover {
        transform: translateX(5px);
        background-color: #f2f2f2;
    }
    
    .feature-icon {
        font-size: 2.5rem;
        color: #721c24;
        margin-bottom: 15px;
    }
    
    .cta-section {
        background: linear-gradient(rgba(71, 27, 37, 0.9), rgba(71, 27, 37, 0.9)), url('img/logistics/1.png');
        background-size: cover;
        background-position: center;
        padding: 80px 0;
    }
    
    .stats-box {
        text-align: center;
        padding: 30px 20px;
        border-radius: 8px;
        background-color: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .stats-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .stats-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: #721c24;
        margin-bottom: 10px;
    }
    
    .stats-label {
        font-size: 1rem;
        color: #555;
    }
    
    .highlight-section {
        background-color: #f9f9f9;
        padding: 60px 0;
    }
    
    .img-container {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .img-container img {
        transition: transform 0.5s ease;
    }
    
    .img-container:hover img {
        transform: scale(1.05);
    }
    
    .custom-list {
        list-style: none;
        padding-left: 0;
        margin-top: 20px;
    }
    
    .custom-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 12px;
    }
    
    .custom-list li:before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #721c24;
        font-weight: bold;
    }
</style>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5" style="margin-bottom: 6rem; background: ;">
  <div class="container py-5">
    <h1 class="display-3 text-white mb-3 animated slideInDown">Freight Logistics</h1>
    <nav aria-label="breadcrumb" class="animated slideInDown">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a class="text-white" href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-white" href="service.php">Services</a>
        </li>
        <li class="breadcrumb-item text-white active" aria-current="page">
          Freight Logistics
        </li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->

<!-- Hero Section with Main Image -->
<section class="hero-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="gallery-item" style="height: 450px;">
          <img src="img/logistics/1.png" alt="Freight Logistics Operations" class="img-fluid">
          <div class="gallery-caption">
            <h3 class="m-0">Excellence in Freight Logistics</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Freight Logistics Content Start -->
<section class="freight-content py-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-8">
        <h2 class="section-title">Comprehensive Freight Logistics Services</h2>
        <p class="lead">
          Sabmeith Freight Limited delivers precision-engineered logistics solutions designed to elevate your supply chain performance in today's interconnected global marketplace.
        </p>
        <p>
          Our comprehensive freight logistics services integrate seamlessly across transportation management, inventory optimization, strategic warehousing, distribution networks, and advanced supply chain consulting. We excel in transforming complex logistics challenges into streamlined operations that drive efficiency and growth.
        </p>
        <p>
          Every business has unique logistics requirements, which is why we develop tailored solutions that precisely align with your specific objectives, operational requirements, and financial parameters. Our collaborative approach ensures that your logistics strategy directly supports your broader business goals.
        </p>
      </div>
      <div class="col-lg-4">
        <div class="stats-box mb-4">
          <div class="stats-number">98%</div>
          <div class="stats-label">On-Time Delivery Rate</div>
        </div>
        <div class="stats-box mb-4">
          <div class="stats-number">24/7</div>
          <div class="stats-label">Shipment Monitoring</div>
        </div>
        <div class="stats-box">
          <div class="stats-number">100+</div>
          <div class="stats-label">Global Partners</div>
        </div>
      </div>
    </div>

    <!-- Services Grid Section -->
    <div class="row mb-5">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title">Our Freight Logistics Solutions</h2>
      </div>
      
      <div class="col-md-4 mb-4">
        <div class="logistics-card">
          <img src="img/logistics/2.png" alt="Transportation Management" class="card-img-top logistics-card-img">
          <div class="logistics-card-body">
            <h4 class="logistics-card-title">Transportation Management</h4>
            <p>Strategic coordination of shipments through optimized carrier selection, route planning, and load optimization to maximize efficiency and reduce costs.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4">
        <div class="logistics-card">
          <img src="img/logistics/3.png" alt="Warehousing & Distribution" class="card-img-top logistics-card-img">
          <div class="logistics-card-body">
            <h4 class="logistics-card-title">Warehousing & Distribution</h4>
            <p>Strategic storage solutions with advanced inventory management systems, ensuring optimal product placement and efficient order fulfillment.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4">
        <div class="logistics-card">
          <img src="img/logistics/4.png" alt="Supply Chain Consulting" class="card-img-top logistics-card-img">
          <div class="logistics-card-body">
            <h4 class="logistics-card-title">Supply Chain Consulting</h4>
            <p>Expert analysis and strategic recommendations to optimize your entire supply chain, identifying inefficiencies and implementing best practices.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-5 align-items-center">
      <!-- Left column (image) -->
      <div class="col-md-6">
        <div class="img-container">
          <img src="img/logistics/1.png" alt="Advanced Technology Solutions" class="img-fluid rounded mb-4 mb-md-0">
        </div>
      </div>
      <!-- Right column (text) -->
      <div class="col-md-6">
        <h3 class="service-header">Advanced Technology & Real-Time Visibility</h3>
        <p>
          Our competitive edge lies in our advanced technological infrastructure that provides unprecedented transparency throughout your supply chain. Our sophisticated tracking and monitoring systems deliver real-time visibility into shipment status and location, empowering you with actionable insights for proactive logistics management.
        </p>
        <p>
          We maintain continuous communication channels with our clients, providing automated notifications, customized reporting, and immediate responses to emerging situations. This transparency enables rapid decision-making and helps prevent potential disruptions before they impact your operations.
        </p>
        <ul class="custom-list">
          <li>Real-time GPS tracking and monitoring</li>
          <li>Automated status notifications</li>
          <li>Comprehensive performance analytics</li>
          <li>Customizable reporting dashboards</li>
          <li>Mobile access to critical logistics data</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Feature Highlights Section -->
<section class="highlight-section">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12 text-center">
        <h2 class="section-title">Why Choose Sabmeith Freight Logistics</h2>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4">
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-globe"></i>
          </div>
          <h4>Global Network</h4>
          <p>Access to an extensive network of carriers, agents, and partners worldwide, enabling seamless international operations.</p>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-cog"></i>
          </div>
          <h4>Customized Solutions</h4>
          <p>Tailored logistics strategies designed to address your specific industry challenges and business requirements.</p>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h4>Performance Optimization</h4>
          <p>Continuous analysis and refinement of logistics processes to drive efficiency improvements and cost reductions.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title">Our Logistics Operations</h2>
      </div>
    </div>
    
    <div class="row g-4">
      <div class="col-md-6">
        <div class="gallery-item" style="height: 300px;">
          <img src="img/logistics/2.png" alt="Logistics Operations Center" class="img-fluid">
          <div class="gallery-caption">Advanced Operations Center</div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="gallery-item" style="height: 300px;">
          <img src="img/forwading/3.png" alt="Transportation Fleet" class="img-fluid">
          <div class="gallery-caption">Modern Transportation Fleet</div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="gallery-item">
          <img src="img/logistics/3.png" alt="Warehouse Management" class="img-fluid">
          <div class="gallery-caption">Warehouse Management</div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="gallery-item">
          <img src="img/logistics/4.png" alt="Cargo Handling" class="img-fluid">
          <div class="gallery-caption">Precision Cargo Handling</div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="gallery-item">
          <img src="img/logistics/1.png" alt="Technology Solutions" class="img-fluid">
          <div class="gallery-caption">Technology-Driven Solutions</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call-to-Action Section Start -->
<section class="cta-section text-center text-white py-5">
  <div class="container">
    <h2 class="mb-3 text-light">Ready to Transform Your Freight Logistics?</h2>
    <p class="lead mb-4">
      Partner with Sabmeith Freight Limited to unlock new levels of efficiency, visibility, and performance across your supply chain.
    </p>
    <div class="row justify-content-center">
      <div class="col-md-5 col-lg-4 mb-3 mb-md-0">
        <a href="contact.php" class="btn btn-light btn-lg w-100">Contact Our Team</a>
      </div>
      <div class="col-md-5 col-lg-4">
        <a href="https://wa.me/255775999000" class="btn btn-outline-light btn-lg w-100">
          <i class="fab fa-whatsapp mr-2"></i> WhatsApp Inquiry
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Call-to-Action Section End -->

<!-- Testimonial Section -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8 text-center">
        <h2 class="section-title">What Our Clients Say</h2>
        <div class="testimonial p-4 mb-4" style="background-color: #f9f9f9; border-radius: 8px;">
          <p class="lead font-italic mb-3">
            "Sabmeith Freight Limited revolutionized our logistics operations, reducing transit times by 32% and cutting our freight costs significantly. Their technology-driven approach provides the visibility we always wanted but never had with previous providers."
          </p>
          <div class="testimonial-author">
            <p class="font-weight-bold mb-0">Operations Director</p>
            <p class="small text-muted">Manufacturing Industry</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
    include("includes/footer.php");
?>