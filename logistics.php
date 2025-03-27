<?php
    include("includes/header.php");
?>

<style>
    /* Custom Styles for Logistics Page */
    .service-header {
        color: #721c24;
        font-weight: 600;
        padding-bottom: 15px;
        border-bottom: 2px solid #721c24;
        margin-bottom: 25px;
    }
    
    .section-heading h2 {
        position: relative;
        color: #721c24;
        display: inline-block;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }
    
    .section-heading h2:after {
        content: '';
        position: absolute;
        width: 50%;
        height: 3px;
        background-color: #721c24;
        bottom: 0;
        left: 0;
    }
    
    .custom-list {
        list-style: none;
        padding-left: 0;
    }
    
    .custom-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 8px;
    }
    
    .custom-list li:before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #721c24;
        font-weight: bold;
    }
    
    .logistics-card {
        border: none;
        border-radius: 8px;
        overflow: hidden;
        transition: all 0.3s ease;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }
    
    .logistics-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.12);
    }
    
    .logistics-card-img {
        height: 220px;
        object-fit: cover;
    }
    
    .logistics-card-body {
        padding: 20px;
        border-top: 4px solid #721c24;
    }
    
    .logistics-card-title {
        color: #721c24;
        font-weight: 600;
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
    
    .feature-box {
        padding: 25px;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        height: 100%;
        transition: all 0.3s ease;
        border-left: 4px solid #721c24;
    }
    
    .feature-box:hover {
        transform: translateX(5px);
        background-color: #f2f2f2;
    }
    
    .feature-icon {
        font-size: 2.5rem;
        color: #721c24;
        margin-bottom: 15px;
    }
    
    .highlight-section {
        background-color: #f9f9f9;
        padding: 60px 0;
        position: relative;
    }
    
    .gallery-item {
        height: 250px;
        overflow: hidden;
        border-radius: 8px;
        position: relative;
        margin-bottom: 20px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .gallery-item:hover img {
        transform: scale(1.1);
    }
    
    .gallery-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 10px 15px;
        background: rgba(114, 28, 36, 0.8);
        color: white;
        font-weight: 500;
    }
    
    .btn-primary {
        background-color: #721c24;
        border-color: #721c24;
    }
    
    .btn-primary:hover {
        background-color: #5a171d;
        border-color: #5a171d;
    }
    
    .cta-section {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/logistics/1.png');
        background-size: cover;
        background-position: center;
        padding: 80px 0;
    }
</style>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5" style="margin-bottom: 6rem; background: ;">
  <div class="container py-5 text-center">
    <h1 class="display-3 text-white mb-3">Logistics</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a class="text-white" href="service.php">Services</a></li>
        <li class="breadcrumb-item text-white active" aria-current="page">Logistics</li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->

<!-- Main Content Section -->
<section class="content-section py-5">
  <div class="container">
    <!-- Introduction -->
    <div class="row mb-5">
      <div class="col-lg-8">
        <div class="section-heading">
          <h2>Comprehensive Logistics Solutions</h2>
        </div>
        <p class="lead">
          Sabmeith Freight Limited offers comprehensive transport and logistics services tailored to meet the diverse needs of businesses across various industries. With a commitment to excellence and reliability, we ensure seamless transportation and efficient management of goods throughout the supply chain.
        </p>
        <p>
          Our integrated approach to logistics combines advanced technology, industry expertise, and a dedicated team to deliver exceptional service that enhances operational efficiency and drives business growth.
        </p>
      </div>
      <div class="col-lg-4">
        <div class="img-container">
          <img src="img/logistics/1.png" alt="Logistics Overview" class="img-fluid rounded">
        </div>
      </div>
    </div>

    <!-- Our Logistics Services Cards -->
    <div class="row mb-5">
      <div class="col-12">
        <div class="section-heading text-center">
          <h2 class="mb-4">Our Logistics Services</h2>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="logistics-card">
          <img src="img/logistics/2.png" alt="Transportation Services" class="card-img-top logistics-card-img">
          <div class="logistics-card-body">
            <h4 class="logistics-card-title">Transportation</h4>
            <p>Efficient transportation solutions for all types of cargo with our modern fleet and experienced drivers, ensuring timely delivery across multiple regions.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="logistics-card">
          <img src="img/logistics/3.png" alt="Warehousing Services" class="card-img-top logistics-card-img">
          <div class="logistics-card-body">
            <h4 class="logistics-card-title">Warehousing</h4>
            <p>Secure storage facilities with inventory management systems to keep your goods safe and accessible, with real-time tracking capabilities.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="logistics-card">
          <img src="img/logistics/4.png" alt="Supply Chain Management" class="card-img-top logistics-card-img">
          <div class="logistics-card-body">
            <h4 class="logistics-card-title">Supply Chain Solutions</h4>
            <p>End-to-end supply chain management services that optimize operations, reduce costs, and improve customer satisfaction.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Energy & Mining Logistics Section -->
    <div class="row align-items-center mb-5">
      <div class="col-md-6">
        <div class="img-container">
          <img src="img/images/3.jpg" alt="Sabmeith Freight Trucks" class="img-fluid" />
        </div>
      </div>
      <div class="col-md-6">
        <h3 class="service-header">Energy &amp; Mining Logistics</h3>
        <p>
          As a <strong>GCLA (Government Chemist Laboratory Agency) registered and certified transporter</strong>, Sabmeith Freight Limited specializes in providing comprehensive logistics solutions for the energy and mining sectors.
        </p>
        <p>
          We understand the unique challenges involved in transporting mining materials and equipment. Our specialized services include:
        </p>
        <ul class="custom-list">
          <li>Transportation of mining reagents and chemicals</li>
          <li>Handling of hazardous materials with strict safety protocols</li>
          <li>Delivery of equipment and machinery to remote mining sites</li>
          <li>Transport of extracted minerals and raw materials</li>
          <li>Containerized cargo handling for mining operations</li>
        </ul>
        <p>
          Our team is trained to handle various types of cargo specific to the mining industry, with full compliance to regulatory requirements while maintaining the highest safety standards throughout the transportation process.
        </p>
      </div>
    </div>

    <!-- Logistics Features Section -->
    <div class="highlight-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-12 text-center">
            <div class="section-heading">
              <h2>Why Choose Sabmeith Logistics</h2>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="fas fa-truck"></i>
              </div>
              <h4>Modern Fleet</h4>
              <p>Our well-maintained fleet of vehicles ensures reliable transportation with minimal downtime, equipped with tracking systems for real-time monitoring.</p>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="fas fa-shield-alt"></i>
              </div>
              <h4>Safety Compliance</h4>
              <p>We adhere to strict safety protocols and regulations, ensuring the secure transportation of goods, particularly for hazardous materials.</p>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="fas fa-clock"></i>
              </div>
              <h4>Timely Delivery</h4>
              <p>Our commitment to punctuality ensures that your goods arrive at their destination on schedule, helping you maintain operational efficiency.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Visibility & Control Section -->
    <div class="row align-items-center py-5">
      <div class="col-md-6 order-md-2">
        <div class="img-container">
          <img src="img/images/sab/1.png" alt="Tracking and Monitoring" class="img-fluid" />
        </div>
      </div>
      <div class="col-md-6 order-md-1">
        <h3 class="service-header">Visibility &amp; Control</h3>
        <p>
          At Sabmeith Freight Limited, we understand the importance of visibility and control in logistics operations. That's why we offer advanced tracking and monitoring systems, providing real-time updates on the status and location of shipments.
        </p>
        <p>
          This transparency enables our clients to make informed decisions and respond quickly to changing circumstances, ensuring a smooth and reliable flow of goods across the supply chain.
        </p>
        <ul class="custom-list mt-3">
          <li>Real-time shipment tracking</li>
          <li>Automated status notifications</li>
          <li>Comprehensive reporting tools</li>
          <li>Mobile access to shipping information</li>
          <li>Proactive alert systems for potential delays</li>
        </ul>
      </div>
    </div>

    <!-- Photo Gallery -->
    <div class="row mt-5">
      <div class="col-12 mb-4">
        <div class="section-heading text-center">
          <h2>Our Logistics in Action</h2>
        </div>
      </div>
      
      <div class="col-md-8">
        <div class="gallery-item" style="height: 400px;">
          <img src="img/logistics/1.png" alt="Logistics Operations" class="img-fluid">
          <div class="gallery-caption">Comprehensive Logistics Operations</div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="gallery-item">
          <img src="img/logistics/2.png" alt="Warehouse Management" class="img-fluid">
          <div class="gallery-caption">Warehouse Management</div>
        </div>
        
        <div class="gallery-item mt-4">
          <img src="img/logistics/3.png" alt="Fleet Operations" class="img-fluid">
          <div class="gallery-caption">Fleet Operations</div>
        </div>
      </div>
    </div>

  </div><!-- /.container -->
</section>

<!-- Call-to-Action Section -->
<section class="cta-section text-white text-center">
  <div class="container">
    <h2 class="mb-3 text-light">Ready to Optimize Your Logistics?</h2>
    <p class="mb-4 lead">
      Contact us today to learn how our logistics solutions can enhance efficiency, reduce costs, and empower your business to thrive in a competitive market.
    </p>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <a href="https://wa.me/255775999000" class="btn btn-light btn-lg w-100 mb-2">
          <i class="fab fa-whatsapp mr-2"></i> Chat on WhatsApp
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="contact.php" class="btn btn-outline-light btn-lg w-100">
          <i class="fas fa-envelope mr-2"></i> Contact Us
        </a>
      </div>
    </div>
  </div>
</section>

<?php
    include("includes/footer.php");
?>
