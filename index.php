<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marjan DebtDev | Portfolio</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  
  <!-- Custom CSS -->
  <style>
    :root {
      --primary-color: #1DCD9F;
      --dark-bg: #000000;
      --card-bg: #111;
    }
    
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background-color: var(--dark-bg);
      color: white;
      overflow-x: hidden;
    }
    
    .hero {
      background: linear-gradient(to right, #1e3c72, #2a5298);
      color: white;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .section-title {
      font-weight: 700;
      font-size: 2rem;
      margin-bottom: 1rem;
    }
    
    .card {
      border-radius: 1rem;
      background-color: var(--card-bg);
      border: 1px solid #333;
      transition: all 0.3s ease;
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }
    
    .btn-gradient {
      background: linear-gradient(45deg, #1e3c72, #2a5298);
      color: white;
      border-radius: 8px;
      border: none;
      padding: 10px 20px;
      transition: all 0.3s ease;
    }
    
    .btn-gradient:hover {
      opacity: 0.9;
      transform: scale(1.05);
    }
    
    .tech-badge {
      background-color: rgba(29, 205, 159, 0.1);
      color: var(--primary-color);
      border: 1px solid var(--primary-color);
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 0.8rem;
      margin: 2px;
    }
    
    .project-card {
      background-color: white;
      color: black;
      border-radius: 1rem;
      overflow: hidden;
      transition: all 0.3s ease;
    }
    
    .project-card:hover {
      transform: scale(1.02);
    }
    
    .social-icon {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background-color: #333;
      color: white;
      transition: all 0.3s ease;
    }
    
    .social-icon:hover {
      background-color: var(--primary-color);
      transform: scale(1.1);
    }
    
    /* FIXED LOADING ANIMATION */
    #loading {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: var(--dark-bg);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      transition: opacity 0.5s ease;
    }
    
    #loading.hidden {
      opacity: 0;
      pointer-events: none;
    }
    
    .loading-text {
      text-align: center;
    }
    
    .loading-text span {
      display: inline-block;
      font-size: 3rem;
      font-weight: bold;
      color: var(--primary-color);
      animation: bounce 0.5s infinite alternate;
    }
    
    .loading-text span:nth-child(2) { animation-delay: 0.1s; }
    .loading-text span:nth-child(3) { animation-delay: 0.2s; }
    .loading-text span:nth-child(4) { animation-delay: 0.3s; }
    .loading-text span:nth-child(5) { animation-delay: 0.4s; }
    .loading-text span:nth-child(6) { animation-delay: 0.5s; }
    
    @keyframes bounce {
      from { transform: translateY(0); }
      to { transform: translateY(-20px); }
    }
    
    .back2top-button {
      position: fixed;
      bottom: 20px;
      left: 20px;
      background-color: var(--primary-color);
      color: white;
      border: none;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      display: none;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 1000;
      transition: all 0.3s ease;
    }
    
    .back2top-button:hover {
      transform: scale(1.1);
    }
    
    .journey-card {
      position: relative;
      transition: all 0.3s ease;
    }
    
    .journey-card:hover {
      transform: translateX(5px);
    }
    
    .shadow__btn {
      padding: 10px 20px;
      border: none;
      font-size: 17px;
      color: #fff;
      border-radius: 7px;
      letter-spacing: 4px;
      font-weight: 700;
      text-transform: uppercase;
      transition: 0.5s;
      transition-property: box-shadow;
      background: var(--primary-color);
      box-shadow: 0 0 25px var(--primary-color);
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
    }
    
    .shadow__btn:hover {
      box-shadow: 0 0 5px var(--primary-color),
                  0 0 25px var(--primary-color),
                  0 0 50px var(--primary-color),
                  0 0 100px var(--primary-color);
    }
  </style>
</head>
<body>

<!-- Loading Animation -->
<div id="loading">
  <div class="loading-text" id="name-loader">
    <span>M</span>
    <span>A</span>
    <span>R</span>
    <span>J</span>
    <span>A</span>
    <span>N</span>
  </div>
</div>

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
        <li class="nav-item"><a class="nav-link" href="#journey">Journey</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero text-center py-5 position-relative">
  <div class="container position-relative" style="z-index: 1">
    <h1 class="fw-bold display-4">
      <span class="text-white me-2">Hi, I'm</span>
      <span class="text-warning">Marjan</span>
    </h1>
    <p class="lead mt-3 fs-4">Software Developer | DebtDev | Full-Stack Learner</p>
    <a href="#projects" class="shadow__btn mt-4">View Projects</a>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-5 bg-dark text-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <img src="https://via.placeholder.com/300" alt="Marjan DebtDev" class="rounded-circle img-fluid" style="max-width: 250px;">
      </div>
      <div class="col-md-8">
        <h2 class="section-title text-primary">About Me</h2>
        <p class="mb-4 fs-5">
          I'm <b>Muhammad Marjan Ghazi Sherazi</b>, a Computer Science student at NUML, Multan and a passionate developer.  
          Known as <b class="text-primary">DebtDev</b> for my work on a <b>Debt Management Software</b>, I focus on solving real-world problems through technology.  
          Currently exploring <b class="text-primary">web development, AI, and agentic systems</b>.
        </p>
        
        <div class="d-flex gap-3 justify-content-center justify-content-md-start">
          <a href="https://linkedin.com/in/syedmarjanghazi" class="social-icon">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-github"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="mailto:syedmarjanghazi@gmail.com" class="social-icon">
            <i class="fas fa-envelope"></i>
          </a>
        </div>
        
        <div class="mt-4 text-center text-md-start">
          <a href="#" class="btn btn-gradient">
            <i class="fas fa-download me-2"></i> Download Resume
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Journey Section -->
<section id="journey" class="py-5 bg-black text-white">
  <div class="container">
    <h2 class="section-title text-center text-primary mb-5">My Journey</h2>
    
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="card journey-card h-100">
          <div class="card-body">
            <h5 class="card-title text-primary">💳 Debt Management Software</h5>
            <p class="text-muted">2023 - Present</p>
            <p class="card-text">My first big project — a software that tracks, manages, and simplifies debt management for individuals and businesses.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 mb-4">
        <div class="card journey-card h-100">
          <div class="card-body">
            <h5 class="card-title text-primary">🎓 Computer Science Student</h5>
            <p class="text-muted">2022 - Present</p>
            <p class="card-text">Currently pursuing my degree at National University of Modern Languages (NUML), Multan.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 mb-4">
        <div class="card journey-card h-100">
          <div class="card-body">
            <h5 class="card-title text-primary">⚙️ Admin Panel Development</h5>
            <p class="text-muted">2023</p>
            <p class="card-text">Developed a PHP-based Admin Panel with CRUD functionality, CSV uploads, job-user assignment, and attendance tracking.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 mb-4">
        <div class="card journey-card h-100">
          <div class="card-body">
            <h5 class="card-title text-primary">🌐 Web Development Journey</h5>
            <p class="text-muted">2021 - Present</p>
            <p class="card-text">Started my journey in web development, exploring various technologies and building projects.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-5 bg-dark text-white">
  <div class="container">
    <h2 class="section-title text-center text-info mb-5">Skills & Technologies</h2>
    
    <div class="row">
      <div class="col-md-6 mb-4">
        <h4 class="text-primary mb-3">Core Technologies</h4>
        <div class="d-flex flex-wrap">
          <span class="tech-badge">HTML</span>
          <span class="tech-badge">CSS</span>
          <span class="tech-badge">JavaScript</span>
          <span class="tech-badge">PHP</span>
          <span class="tech-badge">MySQL</span>
          <span class="tech-badge">Bootstrap</span>
          <span class="tech-badge">Tailwind CSS</span>
        </div>
      </div>
      
      <div class="col-md-6 mb-4">
        <h4 class="text-primary mb-3">Currently Exploring</h4>
        <div class="d-flex flex-wrap">
          <span class="tech-badge">React</span>
          <span class="tech-badge">Next.js</span>
          <span class="tech-badge">Node.js</span>
          <span class="tech-badge">Express.js</span>
          <span class="tech-badge">MongoDB</span>
          <span class="tech-badge">AI/ML</span>
        </div>
      </div>
    </div>
    
    <div class="row mt-5">
      <div class="col-12">
        <h4 class="text-primary mb-3">Tools & Platforms</h4>
        <div class="d-flex flex-wrap">
          <span class="tech-badge">Git</span>
          <span class="tech-badge">GitHub</span>
          <span class="tech-badge">VS Code</span>
          <span class="tech-badge">XAMPP</span>
          <span class="tech-badge">Figma</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-5 bg-black text-white">
  <div class="container">
    <h2 class="section-title text-center text-success mb-5">Projects</h2>
    
    <div class="row g-4">
      <!-- Debt Management Software -->
      <div class="col-md-6 col-lg-4">
        <div class="project-card h-100">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Debt Management Software">
          <div class="card-body">
            <h5 class="card-title fw-bold">💳 Debt Management Software</h5>
            <p class="card-text">My first big project — a software that tracks, manages, and simplifies debt management for individuals and businesses.</p>
            <div class="mb-3">
              <span class="tech-badge">PHP</span>
              <span class="tech-badge">MySQL</span>
              <span class="tech-badge">JavaScript</span>
            </div>
            <div class="d-flex gap-2">
              <a href="#" class="btn btn-sm btn-gradient">Live Demo</a>
              <a href="#" class="btn btn-sm btn-dark">GitHub</a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Admin Panel -->
      <div class="col-md-6 col-lg-4">
        <div class="project-card h-100">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Admin Panel">
          <div class="card-body">
            <h5 class="card-title fw-bold">⚙️ Admin Panel</h5>
            <p class="card-text">Developed a PHP-based Admin Panel with CRUD functionality, CSV uploads, job-user assignment, and attendance tracking.</p>
            <div class="mb-3">
              <span class="tech-badge">PHP</span>
              <span class="tech-badge">MySQL</span>
              <span class="tech-badge">Bootstrap</span>
            </div>
            <div class="d-flex gap-2">
              <a href="#" class="btn btn-sm btn-gradient">Live Demo</a>
              <a href="#" class="btn btn-sm btn-dark">GitHub</a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Portfolio Website -->
      <div class="col-md-6 col-lg-4">
        <div class="project-card h-100">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Portfolio Website">
          <div class="card-body">
            <h5 class="card-title fw-bold">🌐 Portfolio Website</h5>
            <p class="card-text">A personal portfolio showcasing my journey, projects, and expertise, built with modern web technologies.</p>
            <div class="mb-3">
              <span class="tech-badge">HTML</span>
              <span class="tech-badge">CSS</span>
              <span class="tech-badge">JavaScript</span>
              <span class="tech-badge">Bootstrap</span>
            </div>
            <div class="d-flex gap-2">
              <a href="#" class="btn btn-sm btn-gradient">Live Demo</a>
              <a href="#" class="btn btn-sm btn-dark">GitHub</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Upcoming Projects -->
<section id="upcoming" class="py-5 bg-dark text-white">
  <div class="container">
    <h2 class="section-title text-center text-warning mb-5">Upcoming Projects</h2>
    
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">AI-Powered Financial Assistant</h5>
            <p class="card-text">An intelligent system to help with personal finance management using AI algorithms.</p>
            <span class="badge bg-warning text-dark">In Planning</span>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">E-commerce Platform</h5>
            <p class="card-text">A full-featured online store with modern UI/UX and secure payment integration.</p>
            <span class="badge bg-warning text-dark">In Planning</span>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">Task Management App</h5>
            <p class="card-text">A productivity tool with team collaboration features and progress tracking.</p>
            <span class="badge bg-warning text-dark">In Planning</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-black text-white">
  <div class="container">
    <h2 class="section-title text-center text-danger mb-5">Contact Me</h2>
    
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="card">
          <div class="card-body p-4">
            <form>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="firstName" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="firstName" required>
                </div>
                <div class="col-md-6">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lastName" required>
                </div>
              </div>
              
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" required>
              </div>
              
              <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" required>
              </div>
              
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="5" required></textarea>
              </div>
              
              <div class="text-center">
                <button type="submit" class="btn btn-gradient px-4 py-2">
                  <i class="fas fa-paper-plane me-2"></i> Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
        
        <div class="text-center mt-4">
          <p class="mb-3">Or reach out directly:</p>
          <a href="mailto:syedmarjanghazi@gmail.com" class="btn btn-gradient px-4 py-2 me-2">
            <i class="fas fa-envelope me-2"></i> Email Me
          </a>
          <a href="https://linkedin.com/in/syedmarjanghazi" class="btn btn-dark px-4 py-2">
            <i class="fab fa-linkedin me-2"></i> LinkedIn
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-center text-white py-4">
  <div class="container">
    <p class="mb-2">✨ Built with passion by <b>Marjan DebtDev</b> 🚀</p>
    <p class="mb-0">&copy; 2024 Marjan DebtDev. All rights reserved.</p>
  </div>
</footer>

<!-- Back to Top Button -->
<button class="back2top-button" id="backToTop">
  <i class="fas fa-arrow-up"></i>
</button>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script>
  // Loading animation - FIXED
  window.addEventListener('load', function() {
    setTimeout(function() {
      const loading = document.getElementById('loading');
      loading.classList.add('hidden');
      
      // Remove from DOM after animation completes
      setTimeout(function() {
        loading.style.display = 'none';
      }, 500);
    }, 2000);
  });
  
  // Back to top button
  const backToTopButton = document.getElementById('backToTop');
  
  backToTopButton.addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
  
  // Show/hide back to top button based on scroll position
  window.addEventListener('scroll', function() {
    if (window.pageYOffset > 300) {
      backToTopButton.style.display = 'flex';
    } else {
      backToTopButton.style.display = 'none';
    }
  });
  
  // Smooth scrolling for navigation links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
</script>

</body>
</html>