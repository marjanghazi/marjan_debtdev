<?php
// index.php - Marjan DebtDev Portfolio
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marjan DebtDev | Portfolio</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    body { font-family: 'Segoe UI', Tahoma, sans-serif; }
    .hero { background: linear-gradient(to right, #1e3c72, #2a5298); color: white; }
    .section-title { font-weight: 700; font-size: 2rem; margin-bottom: 1rem; }
    .card { border-radius: 1rem; }
    .btn-gradient {
      background: linear-gradient(45deg, #1e3c72, #2a5298);
      color: white;
      border-radius: 8px;
    }
    .btn-gradient:hover { opacity: 0.9; }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">DebtDev</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero text-center py-5">
  <div class="container">
    <h1 class="fw-bold text-4xl">👋 Hi, I’m <span class="text-yellow-300">Marjan</span></h1>
    <p class="lead mt-3">Software Developer | DebtDev | Full-Stack Learner</p>
    <a href="../wordpress/" class="btn btn-gradient mt-3 px-4 py-2">View My Work</a>
  </div>
</section>

<!-- About -->
<section id="about" class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title text-center text-primary">About Me</h2>
    <p class="text-center max-w-2xl mx-auto">
      I’m <b>Muhammad Marjan Ghazi Sherazi</b>, a Computer Science student at NUML, Multan and a passionate developer.  
      Known as <b>DebtDev</b> for my work on a <b>Debt Management Software</b>, I focus on solving real-world problems through technology.  
      Currently exploring <b>web development, AI, and agentic systems</b>.
    </p>
  </div>
</section>

<!-- Projects -->
<section id="projects" class="py-5">
  <div class="container">
    <h2 class="section-title text-center text-success">Projects</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card shadow-lg h-100">
          <div class="card-body">
            <h5 class="card-title fw-bold">💳 Debt Management Software</h5>
            <p class="card-text">My first big project — a software that tracks, manages, and simplifies debt management for individuals and businesses.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-lg h-100">
          <div class="card-body">
            <h5 class="card-title fw-bold">⚙️ Admin Panel</h5>
            <p class="card-text">Developed a PHP-based Admin Panel with CRUD functionality, CSV uploads, job-user assignment, and attendance tracking.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-lg h-100">
          <div class="card-body">
            <h5 class="card-title fw-bold">🌐 Portfolio Website</h5>
            <p class="card-text">A personal portfolio showcasing my journey, projects, and expertise, built with modern web technologies.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Skills -->
<section id="skills" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="section-title text-info">Skills</h2>
    <p>Technologies I’ve worked with:</p>
    <div class="d-flex flex-wrap justify-content-center gap-3 mt-3">
      <span class="badge bg-dark p-3">HTML</span>
      <span class="badge bg-dark p-3">CSS</span>
      <span class="badge bg-dark p-3">JavaScript</span>
      <span class="badge bg-dark p-3">PHP</span>
      <span class="badge bg-dark p-3">MySQL</span>
      <span class="badge bg-dark p-3">Bootstrap</span>
      <span class="badge bg-dark p-3">Tailwind CSS</span>
    </div>
    <p class="mt-4">Currently exploring:</p>
    <div class="d-flex flex-wrap justify-content-center gap-3 mt-3">
      <span class="badge bg-primary p-3">React</span>
      <span class="badge bg-primary p-3">Next.js</span>
      <span class="badge bg-primary p-3">Node.js</span>
      <span class="badge bg-primary p-3">Express.js</span>
      <span class="badge bg-primary p-3">MongoDB</span>
    </div>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="py-5">
  <div class="container text-center">
    <h2 class="section-title text-danger">Contact Me</h2>
    <p class="mb-4">Let’s collaborate or just have a chat!</p>
    <a href="mailto:syedmarjanghazi@gmail.com" class="btn btn-gradient px-4 py-2">
      <i class="bi bi-envelope-fill"></i> Email Me
    </a>
    <a href="https://linkedin.com/in/syedmarjanghazi" class="btn btn-dark px-4 py-2 ms-2">
      <i class="bi bi-linkedin"></i> LinkedIn
    </a>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-center text-white py-3">
  <p class="mb-0">✨ Built with passion by <b>Marjan DebtDev</b> 🚀</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
