<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>International Online Abacus Exam</title>
  <link rel="stylesheet" href="styles.css">
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Abacus Exam</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Exam Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
           <li class="nav-item">
            <a class="nav-login" href="login.php">login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Heading -->
  <div class="container text-center my-5">
    <h1 class="display-4">INTERNATIONAL ONLINE ABACUS EXAM</h1>
  </div>

  <!-- Demo Exam Buttons -->
  <div class="container text-center">
    <a href="#" class="btn btn-primary btn-lg mx-2">Junior Demo Exam</a>
    <a href="#" class="btn btn-secondary btn-lg mx-2">Senior Demo Exam</a>
  </div>

  <!-- Carousel for Top Students -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade my-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://picsum.photos/800/400?random=1" class="d-block w-100" alt="Random Image 1">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/800/400?random=2" class="d-block w-100" alt="Random Image 2">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/800/400?random=3" class="d-block w-100" alt="Random Image 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>





  <!-- Real Exam Button -->
  <div class="container text-center my-5">
    <a href="exam.php" class="btn btn-success btn-lg">Take Real Exam</a>
  </div>

  <!-- Long Information Section -->
  <div class="container my-5">
    <p>
      The International Online Abacus Exam is designed to test the mathematical and analytical abilities of students using the abacus method.
      The exam provides students with an opportunity to improve their mental math skills while competing on a global platform. We have junior
      and senior levels to match the different age groups and skill levels. Our mission is to empower students with confidence and precision in
      calculations.
    </p>
  </div>

  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="text-uppercase">International Online Abacus Exam</h5>
          <p>Empowering young minds with the power of mental math.</p>
        </div>

        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="text-uppercase">Follow Us</h5>
          <a href="#" class="btn btn-outline-primary btn-sm">Facebook</a>
          <a href="#" class="btn btn-outline-info btn-sm">Twitter</a>
          <a href="#" class="btn btn-outline-danger btn-sm">Instagram</a>
        </div>
      </div>
    </div>

    <div class="text-center p-3 bg-light">
      &copy; 2024 AbacusExam.com
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="scripts.js"></script>
</body>
</html>
