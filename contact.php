<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Contacts - BookDoc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .emergency-card {
            border-left: 5px solid #dc3545;
            transition: transform 0.3s;
        }
        .emergency-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .map-container {
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
        }
        .contact-icon {
            font-size: 1.5rem;
            margin-right: 10px;
            color: #dc3545;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">BookDoc</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link text-light" href="welcome.php">Home</a></li>
            <li class="nav-item active"><a class="nav-link text-light" href="about.php">About</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="contact.php">Contact Us</a></li>
            </ul>
        </div>
        </nav>

    <!-- Main Content -->
    <div class="container py-5">
        <h1 class="text-center mb-5">Emergency Contacts & Services</h1>
        
        <div class="row">
            <!-- Emergency Contacts -->
            <div class="col-lg-6 mb-4">
                <div class="card emergency-card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">
                            <i class="bi bi-telephone contact-icon"></i>
                            Emergency Numbers
                        </h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Hospital Main Line
                                <span class="badge bg-danger rounded-pill">+880 1234 567890</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Emergency Department
                                <span class="badge bg-danger rounded-pill">+880 1234 567891</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Ambulance Service
                                <span class="badge bg-danger rounded-pill">+880 1234 567892</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Police
                                <span class="badge bg-danger rounded-pill">999</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Fire Service
                                <span class="badge bg-danger rounded-pill">+880 1234 567893</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Ambulance Availability -->
                <div class="card emergency-card">
                    <div class="card-body">
                        <h3 class="card-title">
                            <i class="bi bi-ambulance contact-icon"></i>
                            Ambulance Services
                        </h3>
                        <div class="alert alert-success">
                            <strong>Available:</strong> 24/7 Emergency Ambulance Service
                        </div>
                        <p class="card-text">
                            <i class="bi bi-clock"></i> Response Time: Under 15 minutes in city areas
                        </p>
                        <p class="card-text">
                            <i class="bi bi-info-circle"></i> Specialized ambulances available for:
                            <span class="badge bg-secondary">Cardiac</span>
                            <span class="badge bg-secondary">Neonatal</span>
                            <span class="badge bg-secondary">Trauma</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Hospital Location -->
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">
                            <i class="bi bi-geo-alt contact-icon"></i>
                            Hospital Location
                        </h3>
                        <p class="card-text">
                            <i class="bi bi-building"></i> BookDoc Medical Center<br>
                            123 Healthcare Avenue, Medical District<br>
                            Dhaka 1212, Bangladesh
                        </p>
                        
                        <!-- Google Maps Embed -->
                        <div class="map-container mt-3">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.216540768342!2d90.3947853154305!3d23.733918884593152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f3d2368e4d%3A0x832d751b43a1b22d!2sDhaka%20Medical%20College%20Hospital!5e0!3m2!1sen!2sbd!4v1620000000000!5m2!1sen!2sbd" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy">
                            </iframe>
                        </div>

                        <div class="mt-3">
                            <a href="https://maps.google.com?q=BookDoc+Medical+Center+Dhaka" 
                               class="btn btn-danger" 
                               target="_blank">
                               <i class="bi bi-arrow-up-right-circle"></i> Open in Google Maps
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>© 2023 BookDoc Medical Services. All rights reserved.</p>
            <p>For non-emergency inquiries: info@bookdoc.com | +880 1234 567894</p>
        </div>
    </footer>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>