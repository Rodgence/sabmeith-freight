<?php
    include("includes/header.php");
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5" style="margin-bottom: 6rem; background: ;">
  <div class="container py-2 text-center">
    <h1 class="display-3 text-white mb-3">Inquiry</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item">
          <a class="text-white" href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-white" href="service.php">Services</a>
        </li>
        <li class="breadcrumb-item text-white active" aria-current="page">
          Inquiry
        </li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->

<!-- Inquiry Content Start -->
<section class="inquiry-content py-1">
  <div class="container">
    <!-- Introduction or Description -->
    <div class="row mb-5">
      <div class="col-12">
        <h2 class="mb-4 text-center">We’d Love to Hear from You</h2>
        <p class="text-center">
          Have questions about our services or need a custom solution? Fill out the form below, and our team at
          <strong>Sabmeith Freight Limited</strong> will get back to you promptly. We’re here to help you streamline
          logistics, optimize costs, and grow your business.
        </p>
      </div>
    </div>

    <!-- Inquiry Form -->
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="bg-light p-4 rounded shadow-sm">
          <form action="#" method="POST">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="name" class="form-label">Your Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                  placeholder="Enter your name"
                  required
                />
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Your Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter your email"
                  required
                />
              </div>
              <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input
                  type="tel"
                  class="form-control"
                  id="phone"
                  name="phone"
                  placeholder="+255"
                  required
                />
              </div>
              <div class="col-md-6">
                <label for="service" class="form-label">Select a Service</label>
                <select class="form-select" id="service" name="service" required>
                  <option value="" selected disabled>-- Choose an option --</option>
                  <option value="Logistics">Logistics</option>
                  <option value="Clearing & Forwarding">Clearing &amp; Forwarding</option>
                  <option value="Freight Logistics">Freight Logistics</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="col-12">
                <label for="message" class="form-label">Inquiry Details</label>
                <textarea
                  class="form-control"
                  id="message"
                  name="message"
                  rows="5"
                  placeholder="Please describe your inquiry..."
                  required
                ></textarea>
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary px-5 py-2">
                  Submit Inquiry
                </button>
              </div>
            </div>
          </form>
        </div><!-- /.bg-light -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>
<!-- Inquiry Content End -->

<!-- Call-to-Action Section -->
<section class="py-5 bg-primary text-white text-center">
  <div class="container">
    <h2 class="mb-3 text-light text-center">Need Immediate Assistance?</h2>
    <p class="mb-4 text-center">
      You can also reach us directly via WhatsApp for faster response.
    </p>
    <a href="https://wa.me/255775999000" class="btn btn-light btn-lg">
      Message Us on WhatsApp
    </a>
  </div>
</section>

<?php
    include("includes/footer.php");
?>
