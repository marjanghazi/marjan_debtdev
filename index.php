<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marjan DebtDev | Full Stack Developer</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Custom CSS -->
  <style>
    :root {
      --primary-color: #1DCD9F;
      --secondary-color: #2a5298;
      --dark-bg: #0a0a0a;
      --card-bg: #1a1a1a;
      --text-light: #e0e0e0;
      --text-gray: #a0a0a0;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--dark-bg);
      color: var(--text-light);
      overflow-x: hidden;
      line-height: 1.6;
    }
    
    /* Loading Animation */
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
      transition: opacity 0.8s ease, visibility 0.8s ease;
    }
    
    #loading.hidden {
      opacity: 0;
      visibility: hidden;
    }
    
    .loading-text {
      text-align: center;
    }
    
    .loading-text span {
      display: inline-block;
      font-size: 3.5rem;
      font-weight: 700;
      color: var(--primary-color);
      animation: bounce 1s infinite alternate;
      margin: 0 5px;
    }
    
    .loading-text span:nth-child(2) { animation-delay: 0.1s; }
    .loading-text span:nth-child(3) { animation-delay: 0.2s; }
    .loading-text span:nth-child(4) { animation-delay: 0.3s; }
    .loading-text span:nth-child(5) { animation-delay: 0.4s; }
    .loading-text span:nth-child(6) { animation-delay: 0.5s; }
    
    @keyframes bounce {
      from { transform: translateY(0); }
      to { transform: translateY(-25px); }
    }
    
    /* Navigation */
    .navbar {
      background-color: rgba(10, 10, 10, 0.95) !important;
      backdrop-filter: blur(10px);
      padding: 1rem 0;
      transition: all 0.3s ease;
    }
    
    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      color: var(--primary-color) !important;
    }
    
    .navbar-nav .nav-link {
      color: var(--text-light) !important;
      font-weight: 500;
      margin: 0 0.5rem;
      position: relative;
      transition: color 0.3s ease;
    }
    
    .navbar-nav .nav-link:hover {
      color: var(--primary-color) !important;
    }
    
    .navbar-nav .nav-link::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: var(--primary-color);
      transition: width 0.3s ease;
    }
    
    .navbar-nav .nav-link:hover::after {
      width: 100%;
    }
    
    /* Hero Section */
    .hero {
      background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      position: relative;
      overflow: hidden;
    }
    
    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: radial-gradient(circle at 20% 80%, rgba(29, 205, 159, 0.1) 0%, transparent 50%),
                  radial-gradient(circle at 80% 20%, rgba(42, 82, 152, 0.1) 0%, transparent 50%);
      z-index: 1;
    }
    
    .hero-content {
      position: relative;
      z-index: 2;
    }
    
    .hero h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }
    
    .hero .highlight {
      color: var(--primary-color);
      position: relative;
      display: inline-block;
    }
    
    .hero .highlight::after {
      content: '';
      position: absolute;
      bottom: 5px;
      left: 0;
      width: 100%;
      height: 8px;
      background-color: rgba(29, 205, 159, 0.3);
      z-index: -1;
    }
    
    .hero p {
      font-size: 1.2rem;
      color: var(--text-gray);
      margin-bottom: 2rem;
      max-width: 600px;
    }
    
    .btn-primary-custom {
      background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
      color: white;
      border: none;
      padding: 12px 30px;
      border-radius: 50px;
      font-weight: 600;
      text-decoration: none;
      display: inline-block;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(29, 205, 159, 0.3);
    }
    
    .btn-primary-custom:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(29, 205, 159, 0.4);
      color: white;
    }
    
    /* Section Styles */
    section {
      padding: 100px 0;
    }
    
    .section-title {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 3rem;
      text-align: center;
      position: relative;
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
      border-radius: 2px;
    }
    
    /* About Section */
    .about-img {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
      transition: transform 0.5s ease;
    }
    
    .about-img:hover {
      transform: scale(1.03);
    }
    
    .about-content h3 {
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
      color: var(--primary-color);
    }
    
    .about-content p {
      color: var(--text-gray);
      margin-bottom: 1.5rem;
    }
    
    .social-links {
      display: flex;
      gap: 15px;
      margin-top: 2rem;
    }
    
    .social-link {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: var(--card-bg);
      color: var(--text-light);
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .social-link:hover {
      background-color: var(--primary-color);
      color: white;
      transform: translateY(-5px);
    }
    
    /* Skills Section */
    .skills-container {
      background-color: var(--card-bg);
      border-radius: 20px;
      padding: 3rem;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }
    
    .skill-category {
      margin-bottom: 2.5rem;
    }
    
    .skill-category h4 {
      font-size: 1.3rem;
      margin-bottom: 1.5rem;
      color: var(--primary-color);
      position: relative;
      padding-bottom: 10px;
    }
    
    .skill-category h4::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 40px;
      height: 3px;
      background-color: var(--primary-color);
    }
    
    .tech-badge {
      display: inline-block;
      background-color: rgba(29, 205, 159, 0.1);
      color: var(--primary-color);
      border: 1px solid rgba(29, 205, 159, 0.3);
      padding: 8px 16px;
      border-radius: 50px;
      font-size: 0.9rem;
      margin: 5px;
      transition: all 0.3s ease;
    }
    
    .tech-badge:hover {
      background-color: var(--primary-color);
      color: white;
      transform: translateY(-3px);
    }
    
    /* Projects Section */
    .project-card {
      background-color: var(--card-bg);
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.4s ease;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      height: 100%;
    }
    
    .project-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }
    
    .project-img {
      height: 200px;
      overflow: hidden;
    }
    
    .project-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .project-card:hover .project-img img {
      transform: scale(1.1);
    }
    
    .project-content {
      padding: 1.5rem;
    }
    
    .project-title {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
      color: var(--text-light);
    }
    
    .project-description {
      color: var(--text-gray);
      margin-bottom: 1.5rem;
    }
    
    .project-tech {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 1.5rem;
    }
    
    .project-links {
      display: flex;
      gap: 10px;
    }
    
    .project-link {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      padding: 8px 16px;
      border-radius: 50px;
      font-size: 0.9rem;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .project-link.primary {
      background-color: var(--primary-color);
      color: white;
    }
    
    .project-link.secondary {
      background-color: transparent;
      color: var(--text-light);
      border: 1px solid var(--text-gray);
    }
    
    .project-link:hover {
      transform: translateY(-3px);
    }
    
    .project-link.primary:hover {
      background-color: #17b890;
      color: white;
    }
    
    .project-link.secondary:hover {
      background-color: rgba(255, 255, 255, 0.1);
      color: white;
    }
    
    /* Contact Section */
    .contact-container {
      background-color: var(--card-bg);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }
    
    .contact-info {
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      padding: 3rem;
      color: white;
      height: 100%;
    }
    
    .contact-info h3 {
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
    }
    
    .contact-info p {
      margin-bottom: 2rem;
    }
    
    .contact-item {
      display: flex;
      align-items: center;
      margin-bottom: 1.5rem;
    }
    
    .contact-icon {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      font-size: 1.2rem;
    }
    
    .contact-details h5 {
      margin-bottom: 5px;
      font-size: 1rem;
    }
    
    .contact-details p {
      margin-bottom: 0;
      opacity: 0.9;
    }
    
    .contact-form {
      padding: 3rem;
    }
    
    .form-control {
      background-color: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 10px;
      padding: 12px 15px;
      color: var(--text-light);
      margin-bottom: 1.5rem;
    }
    
    .form-control:focus {
      background-color: rgba(255, 255, 255, 0.08);
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.2rem rgba(29, 205, 159, 0.25);
      color: var(--text-light);
    }
    
    .form-control::placeholder {
      color: var(--text-gray);
    }
    
    textarea.form-control {
      min-height: 150px;
      resize: none;
    }
    
    /* Footer */
    footer {
      background-color: #080808;
      padding: 3rem 0 1.5rem;
    }
    
    .footer-content {
      text-align: center;
      margin-bottom: 2rem;
    }
    
    .footer-logo {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 1rem;
    }
    
    .footer-links {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-bottom: 2rem;
    }
    
    .footer-link {
      color: var(--text-gray);
      text-decoration: none;
      transition: color 0.3s ease;
    }
    
    .footer-link:hover {
      color: var(--primary-color);
    }
    
    .copyright {
      text-align: center;
      color: var(--text-gray);
      font-size: 0.9rem;
    }
    
    /* Back to Top Button */
    .back-to-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: var(--primary-color);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 1000;
    }
    
    .back-to-top.active {
      opacity: 1;
      visibility: visible;
    }
    
    .back-to-top:hover {
      background-color: #17b890;
      transform: translateY(-5px);
    }
    
    /* Responsive Styles */
    @media (max-width: 992px) {
      .hero h1 {
        font-size: 2.8rem;
      }
      
      section {
        padding: 80px 0;
      }
    }
    
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.3rem;
      }
      
      .section-title {
        font-size: 2rem;
      }
      
      .skills-container,
      .contact-container {
        padding: 2rem;
      }
      
      .contact-info,
      .contact-form {
        padding: 2rem;
      }
    }
    
    @media (max-width: 576px) {
      .hero h1 {
        font-size: 2rem;
      }
      
      .hero p {
        font-size: 1rem;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
    }
  </style>
</head>
<body>

<!-- Loading Animation -->
<div id="loading">
  <div class="loading-text">
    <span>M</span>
    <span>A</span>
    <span>R</span>
    <span>J</span>
    <span>A</span>
    <span>N</span>
  </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">DebtDev</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#projects">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero" id="home">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 hero-content">
        <h1>Hi, I'm <span class="highlight">Marjan</span></h1>
        <p>Full Stack Developer & Computer Science Student passionate about creating innovative solutions and solving real-world problems through technology.</p>
        <a href="#projects" class="btn-primary-custom">View My Work</a>
      </div>
      <div class="col-lg-6 text-center">
        <!-- You can add an illustration or image here -->
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="bg-dark">
  <div class="container">
    <h2 class="section-title">About Me</h2>
    <div class="row align-items-center">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="about-img">
          <img src="./assets/marjan_pic.png" class="img-fluid" alt="Marjan DebtDev">
        </div>
      </div>
      <div class="col-lg-8">
        <div class="about-content">
          <h3>Muhammad Marjan Ghazi Sherazi</h3>
          <p>I'm a Computer Science student at NUML, Multan with a passion for developing innovative software solutions. Known as <strong>DebtDev</strong> for my work on a Debt Management Software, I specialize in creating practical applications that solve real-world problems.</p>
          <p>My journey in technology began with web development, and I've since expanded my skills to include both frontend and backend technologies. I'm constantly learning and exploring new technologies, with a current focus on AI and agentic systems.</p>
          <p>When I'm not coding, you can find me exploring new tech trends, contributing to open-source projects, or working on personal projects that challenge my skills.</p>
          
          <div class="social-links">
            <a href="https://linkedin.com/in/syedmarjanghazi" class="social-link">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="social-link">
              <i class="fab fa-github"></i>
            </a>
            <a href="#" class="social-link">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="mailto:syedmarjanghazi@gmail.com" class="social-link">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
          
          <a href="#" class="btn-primary-custom mt-4">
            <i class="fas fa-download me-2"></i> Download Resume
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Skills Section -->
<section id="skills" class="bg-dark">
  <div class="container">
    <h2 class="section-title">Skills & Technologies</h2>
    <div class="skills-container">
      <div class="row">
        <div class="col-md-6">
          <div class="skill-category">
            <h4>Core Technologies</h4>
            <div>
              <span class="tech-badge">HTML</span>
              <span class="tech-badge">CSS</span>
              <span class="tech-badge">JavaScript</span>
              <span class="tech-badge">PHP</span>
              <span class="tech-badge">MySQL</span>
              <span class="tech-badge">Bootstrap</span>
              <span class="tech-badge">Tailwind CSS</span>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="skill-category">
            <h4>Currently Exploring</h4>
            <div>
              <span class="tech-badge">React</span>
              <span class="tech-badge">Next.js</span>
              <span class="tech-badge">Node.js</span>
              <span class="tech-badge">Express.js</span>
              <span class="tech-badge">MongoDB</span>
              <span class="tech-badge">AI/ML</span>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="skill-category">
            <h4>Tools & Platforms</h4>
            <div>
              <span class="tech-badge">Git</span>
              <span class="tech-badge">GitHub</span>
              <span class="tech-badge">VS Code</span>
              <span class="tech-badge">XAMPP</span>
              <span class="tech-badge">Figma</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Projects Section -->
<section id="projects" class="bg-dark">
  <div class="container">
    <h2 class="section-title">My Projects</h2>
    <div class="row g-4">
      <!-- Project 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="project-card">
          <div class="project-img">
            <img src="https://via.placeholder.com/400x200" alt="Debt Management Software">
          </div>
          <div class="project-content">
            <h3 class="project-title">Debt Management Software</h3>
            <p class="project-description">A comprehensive software solution for tracking, managing, and simplifying debt management for individuals and businesses.</p>
            <div class="project-tech">
              <span class="tech-badge">PHP</span>
              <span class="tech-badge">MySQL</span>
              <span class="tech-badge">JavaScript</span>
              <span class="tech-badge">Bootstrap</span>
            </div>
            <div class="project-links">
              <a href="#" class="project-link primary">
                <i class="fas fa-external-link-alt me-1"></i> Live Demo
              </a>
              <a href="#" class="project-link secondary">
                <i class="fab fa-github me-1"></i> GitHub
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Project 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="project-card">
          <div class="project-img">
            <img src="https://via.placeholder.com/400x200" alt="Admin Panel">
          </div>
          <div class="project-content">
            <h3 class="project-title">Admin Panel</h3>
            <p class="project-description">A PHP-based admin panel with CRUD functionality, CSV uploads, job-user assignment, and attendance tracking features.</p>
            <div class="project-tech">
              <span class="tech-badge">PHP</span>
              <span class="tech-badge">MySQL</span>
              <span class="tech-badge">Bootstrap</span>
            </div>
            <div class="project-links">
              <a href="#" class="project-link primary">
                <i class="fas fa-external-link-alt me-1"></i> Live Demo
              </a>
              <a href="#" class="project-link secondary">
                <i class="fab fa-github me-1"></i> GitHub
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Project 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="project-card">
          <div class="project-img">
            <img src="https://via.placeholder.com/400x200" alt="Portfolio Website">
          </div>
          <div class="project-content">
            <h3 class="project-title">Portfolio Website</h3>
            <p class="project-description">A responsive portfolio website showcasing projects, skills, and professional journey with modern design and smooth animations.</p>
            <div class="project-tech">
              <span class="tech-badge">HTML</span>
              <span class="tech-badge">CSS</span>
              <span class="tech-badge">JavaScript</span>
              <span class="tech-badge">Bootstrap</span>
            </div>
            <div class="project-links">
              <a href="#" class="project-link primary">
                <i class="fas fa-external-link-alt me-1"></i> Live Demo
              </a>
              <a href="#" class="project-link secondary">
                <i class="fab fa-github me-1"></i> GitHub
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-dark">
  <div class="container">
    <h2 class="section-title">Get In Touch</h2>
    <div class="contact-container">
      <div class="row">
        <div class="col-lg-5">
          <div class="contact-info">
            <h3>Let's Connect</h3>
            <p>I'm always open to discussing new opportunities, interesting projects, or just having a chat about technology and development.</p>
            
            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact-details">
                <h5>Email</h5>
                <p>syedmarjanghazi@gmail.com</p>
              </div>
            </div>
            
            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="contact-details">
                <h5>Location</h5>
                <p>Multan, Pakistan</p>
              </div>
            </div>
            
            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div class="contact-details">
                <h5>Response Time</h5>
                <p>Within 24 hours</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="contact-form">
            <form id="contactForm">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
              </div>
              <input type="text" class="form-control" placeholder="Subject" required>
              <textarea class="form-control" placeholder="Your Message" required></textarea>
              <button type="submit" class="btn-primary-custom w-100">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="footer-content">
      <div class="footer-logo">DebtDev</div>
      <div class="footer-links">
        <a href="#home" class="footer-link">Home</a>
        <a href="#about" class="footer-link">About</a>
        <a href="#skills" class="footer-link">Skills</a>
        <a href="#projects" class="footer-link">Projects</a>
        <a href="#contact" class="footer-link">Contact</a>
      </div>
      <div class="social-links justify-content-center">
        <a href="https://linkedin.com/in/syedmarjanghazi" class="social-link">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="#" class="social-link">
          <i class="fab fa-github"></i>
        </a>
        <a href="#" class="social-link">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="mailto:syedmarjanghazi@gmail.com" class="social-link">
          <i class="fas fa-envelope"></i>
        </a>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; 2024 Marjan DebtDev. All rights reserved.</p>
    </div>
  </div>
</footer>

<!-- Back to Top Button -->
<a href="#" class="back-to-top">
  <i class="fas fa-arrow-up"></i>
</a>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script>
  // Loading animation
  window.addEventListener('load', function() {
    setTimeout(function() {
      document.getElementById('loading').classList.add('hidden');
    }, 2000);
  });
  
  // Back to top button
  const backToTop = document.querySelector('.back-to-top');
  
  window.addEventListener('scroll', function() {
    if (window.pageYOffset > 300) {
      backToTop.classList.add('active');
    } else {
      backToTop.classList.remove('active');
    }
  });
  
  backToTop.addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
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
  
  // Navbar background on scroll
  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
      navbar.style.backgroundColor = 'rgba(10, 10, 10, 0.95)';
      navbar.style.padding = '0.5rem 0';
    } else {
      navbar.style.backgroundColor = 'rgba(10, 10, 10, 0.95)';
      navbar.style.padding = '1rem 0';
    }
  });
  
  // Form submission
  document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you for your message! I will get back to you soon.');
    this.reset();
  });
</script>

</body>
</html>