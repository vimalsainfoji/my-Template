<?php include 'components/header.php'; ?>

<!-- Hero -->
<section class="hero d-flex align-items-center text-center">
  <div class="container">
    <h1 data-aos="fade-up">Hi, I'm Vimal Kumar</h1>
    <h4 data-aos="fade-up" data-aos-delay="200">
      Professional PHP Laravel Developer
    </h4>
    <p data-aos="fade-up" data-aos-delay="400">
      I build premium, scalable and secure Laravel applications.
    </p>

    <div class="mt-4">
      <a href="#projects" class="btn btn-dark btn-lg me-3">View Projects</a>
      <a href="contact.php" class="btn btn-outline-dark btn-lg">Contact Me</a>
    </div>
  </div>
</section>

<!-- Skills -->
<section class="section-padding">
  <div class="container">
    <h2 class="text-center mb-5">My Skills</h2>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="skill-card text-center">
          <i class="fab fa-php fa-2x mb-3"></i>
          <h5>PHP & Laravel</h5>
          <p>Secure backend systems & REST APIs.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="skill-card text-center">
          <i class="fas fa-database fa-2x mb-3"></i>
          <h5>MySQL</h5>
          <p>Optimized database architecture.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="skill-card text-center">
          <i class="fab fa-js fa-2x mb-3"></i>
          <h5>JavaScript & jQuery</h5>
          <p>Interactive UI & AJAX apps.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Projects -->
<section id="projects" class="section-padding bg-light">
  <div class="container">
    <h2 class="text-center mb-5"><a href="projects.php" class="text-decoration-none text-dark">Projects</a></h2>

    <div class="row g-4">

      <!-- News Portal -->
      <div class="col-md-4">
        <div class="project-card">
          <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&w=800&q=80" class="img-fluid">
          <div class="project-overlay">
            <h5>News Portal</h5>
            <p>Laravel CMS Website</p>
          </div>
        </div>
      </div>

      <!-- Student Management -->
      <div class="col-md-4">
        <div class="project-card">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" class="img-fluid">
          <div class="project-overlay">
            <h5>Student Management</h5>
            <p>Complete CRUD System</p>
          </div>
        </div>
      </div>

      <!-- E-Commerce -->
      <div class="col-md-4">
        <div class="project-card">
          <img src="https://images.unsplash.com/photo-1557821552-17105176677c?auto=format&fit=crop&w=800&q=80" class="img-fluid">
          <div class="project-overlay">
            <h5>E-Commerce Website</h5>
            <p>Dynamic Shopping Platform</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- CTA -->
<section class="cta text-center">
  <div class="container">
    <h2>Let’s Work Together</h2>
    <a href="contact.php" class="btn btn-dark btn-lg mt-3">Contact Me</a>
  </div>
</section>

<?php include 'components/footer.php'; ?>
