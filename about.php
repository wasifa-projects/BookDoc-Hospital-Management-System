<?php
$page_title = "About Our Hospital";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $page_title ?></title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <!-- Optional Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Inline CSS -->
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .timeline-item h5 {
      font-weight: bold;
      color: #2c3e50;
    }
    .timeline-item p {
      margin-left: 10px;
      color: #555;
    }
    .timeline {
      border-left: 4px solid #007bff;
      padding-left: 20px;
    }
    .card-title {
      color: #2c3e50;
    }
    .fw-bold {
      font-weight: 700;
    }
    footer {
      text-align: center;
      padding: 20px 0;
      background: #f8f9fa;
      color: #777;
    }
  </style>
</head>
<body>

<!-- Navbar (replacing welcome.php navbar part) -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">BookDoc</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link text-light" href="welcome.php">Home</a></li>
      <li class="nav-item active"><a class="nav-link text-light" href="#">About</a></li>
      <li class="nav-item"><a class="nav-link text-light" href="contact.php">Contact Us</a></li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
    <!-- Hero Section -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">About our BookDoc</h1>
        <p class="lead">Compassionate care for your health and wellness</p>
    </div>

    <!-- Mission -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h2>Our Mission</h2>
            <p class="lead">To provide exceptional healthcare services with compassion, innovation, and excellence.</p>
            <p>Founded in 2020, BookDoc has grown from a small neighborhood practice to a leading healthcare provider in the region.</p>
        </div>
        <div class="col-md-6">
            <img src="hospital.jpeg" alt="Clinic Interior" class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Why Choose Us -->
    <section class="bg-light p-4 rounded mb-5">
        <h2 class="text-center mb-4">Why Choose Us</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <i class="bi bi-heart-pulse fs-1 text-primary" style="font-size: 2.5rem;"></i>
                <h4>Comprehensive Care</h4>
                <p>From checkups to specialized treatments, we offer full medical services.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-people fs-1 text-success" style="font-size: 2.5rem;"></i>
                <h4>Expert Team</h4>
                <p>Board-certified doctors and caring staff focused on your wellbeing.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-clock-history fs-1 text-warning" style="font-size: 2.5rem;"></i>
                <h4>Minimal Wait Times</h4>
                <p>Fast scheduling and same-day appointments available.</p>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <div class="row text-center mb-5">
        <?php
        $stats = [
            ['18+', 'Years of Service'],
            ['25+', 'Specialized Doctors'],
            ['50,000+', 'Patients Treated'],
            ['24/7', 'Emergency Support']
        ];
        foreach ($stats as $stat): ?>
            <div class="col-md-3">
                <h3 class="display-5 fw-bold"><?= $stat[0] ?></h3>
                <p><?= $stat[1] ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Services -->
    <h2 class="text-center mb-4">Our Services</h2>
    <div class="row mb-5">
        <?php
        $services = [
            ['Primary Care', ['Annual physicals', 'Chronic disease management', 'Preventive care', 'Vaccinations']],
            ['Specialty Care', ['Cardiology', 'Dermatology', 'Pediatrics', 'Orthopedics']],
            ['Diagnostic Services', ['Lab tests', 'Digital X-rays', 'Ultrasound', 'ECG']]
        ];
        foreach ($services as $service): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?= $service[0] ?></h5>
                        <ul>
                            <?php foreach ($service[1] as $item): ?>
                                <li><?= $item ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Team -->
    <h2 class="text-center mb-4">Meet Our Leadership</h2>
    <div class="row mb-5">
        <?php
        $team = [
            ['doctor1.jpeg', 'Dr. Sarah Johnson', 'Medical Director', '20 years of experience in internal medicine.'],
            ['doctor-2.webp', 'Lisa Chen, RN', 'Head of Nursing', 'Expert in patient care coordination.'],
            ['doctor-3.jpg', 'Michael Rodriguez', 'Hospital Administrator', 'Focus on patient experience.']
        ];
        foreach ($team as $member): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/<?= $member[0] ?>" class="card-img-top" alt="<?= $member[1] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $member[1] ?></h5>
                        <p class="text-muted"><?= $member[2] ?></p>
                        <p><?= $member[3] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Timeline -->
    <h2 class="text-center mb-4">Our Journey</h2>
    <div class="timeline mb-5">
        <?php
        $timeline = [
            ['2020', 'Founded with 2 physicians'],
            ['2022', 'Expanded to specialties'],
            ['2023', 'Moved to new facility'],
            ['2024', 'Started using EHR'],
            ['2025', 'Won healthcare excellence award']
        ];
        foreach ($timeline as $entry): ?>
            <div class="timeline-item mb-3">
                <h5><?= $entry[0] ?></h5>
                <p><?= $entry[1] ?></p>
            </div>
        <?php endforeach; ?>
    </div>

  

<!-- Footer -->
<footer>
  <p>© <?= date("Y") ?> Healing Hands Hospital. All rights reserved.</p>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
