<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Helmi Gustiarno - Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<nav>
  <div class="container">
    <h1>from zero, built.</h1>
    <ul>
      <button class="menu-toggle" id="menuToggle">
      <i class="fas fa-bars"></i>
    </button>
      <li><a href="#about">Tentang</a></li>
      <li><a href="#skills">Skill</a></li>
      <li><a href="#projects">Proyek</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </div>
</nav>


    <header id="home">
        <a href="#about" class="scroll-down" id="scrollBtn">
            <i class="fas fa-chevron-down"></i>
        </a>
        <div class="hero-text">
            <h2 class="typing-text" id="typingText"></h2>
            <p>Web Developer Muda • Pembuat Konten • Pembelajar Cepat</p>
            <a href="assets/cv/CV Helmi Gustiarno.pdf" class="btn" download>Download CV
            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5"/>
                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                </svg>
                </div>
            </a>
        </div>
        <img src="assets/img/myprofil.jpeg" alt="Foto Helmi">
    </header>

    <section id="about" class="fullscreen about-section">
  <div class="about-container animate-on-scroll">
    <!-- Card Foto -->
    <div class="about-photo">
      <img src="assets/img/cukurukuk.jpeg" alt="Foto Helmi">
    </div>

    <!-- Teks Tentang Saya -->
    <div class="about-text">
      <h2>Tentang Saya</h2>
      <p>
        Saya adalah pelajar SMK yang memiliki semangat tinggi dalam belajar dan berkembang di dunia teknologi,
        khususnya <strong>pengembangan web</strong>. Saya telah mengerjakan beberapa proyek seperti sistem login,
        website perpustakaan, dan lainnya.
      </p>
      <p>
        Saya percaya bahwa <strong>semangat belajar dan rasa ingin tahu</strong> adalah bekal utama untuk terus berkembang.
      </p>
    </div>
  </div>
</section>



<section id="skills" class="skills-section">
  <h2>Skill Saya</h2>
  <div class="skills-grid animate-on-scroll">
    <div class="skill-card">
      <i class="fab fa-html5"></i>
      <h3>HTML</h3>
      <p>Advanced</p>
    </div>
    <div class="skill-card">
      <i class="fab fa-css3-alt"></i>
      <h3>CSS</h3>
      <p>Intermediate</p>
    </div>
    <div class="skill-card">
      <i class="fab fa-js"></i>
      <h3>JavaScript</h3>
      <p>Basic</p>
    </div>
    <div class="skill-card">
      <i class="fab fa-php"></i>
      <h3>PHP</h3>
      <p>Intermediate</p>
    </div>
    <div class="skill-card">
      <i class="fas fa-database"></i>
      <h3>MySQL</h3>
      <p>Intermediate</p>
    </div>
    <div class="skill-card">
      <i class="fas fa-code"></i>
      <h3>Git & GitHub</h3>
      <p>Basic</p>
    </div>
  </div>
</section>


    <section id="projects" class="fullscreen projects-section">
  <h2>Projek Saya</h2>
  <div class="projects-grid animate-on-scroll">
    <!-- Project 1 -->
    <div class="project-card stagger-item">
      <img src="assets/img/cukuripi.jpeg" alt="Project 1">
      <div class="project-info">
        <h3>Cukuripi</h3>
        <p>Aplikasi login sederhana dengan validasi user dan fitur redirect.</p>
        <a href="#" class="btn-small" target="_blank">Lihat</a>
      </div>
    </div>

    <!-- Project 2 -->
    <div class="project-card stagger-item">
      <img src="assets/img/cukuripa.jpeg" alt="Project 2">
      <div class="project-info">
        <h3>Cukuripa</h3>
        <p>CRUD lengkap dengan fitur peminjaman, pengembalian, dan denda otomatis.</p>
        <a href="#" class="btn-small" target="_blank">Lihat</a>
      </div>
    </div>

    <!-- Project 3 -->
    <div class="project-card stagger-item">
      <img src="assets/img/cukurupu.jpeg" alt="Project 3">
      <div class="project-info">
        <h3>Cukurupu</h3>
        <p>Website portofolio ini, dibuat dari awal dengan HTML, CSS, dan PHP.</p>
        <a href="#" class="btn-small" target="_blank">Lihat</a>
      </div>
    </div>
  </div>
</section>


<section id="contact" class="fullscreen contact-section">
  <div class="contact-wrapper">
    <h2>Hubungi Saya</h2>
    <p>
      Jika tertarik untuk bekerja sama atau ingin tahu lebih banyak tentang saya, silakan unduh CV saya di bawah ini.
    </p>

    <a href="assets/cv/CV Helmi Gustiarno.pdf" class="btn-download" download>
      <i class="fas fa-download"></i> Download CV
    </a>

<div class="contact-info">
      <div class="social-icons animate-on-scroll">
        <a href="mailto:hgustiarno@gmail.com" target="_blank" class="social-link" data-username="@HelmiGustiarno"><i class="fas fa-envelope"></i></a>
        <a href="https://github.com/arunovu" target="_blank" class="social-link" data-username="@arunovu"><i class="fab fa-github"></i></a>
        <a href="https://linkedin.com/in/Helmi Gustiarno" target="_blank" class="social-link" data-username="@HelmiGustiarno"><i class="fab fa-linkedin"></i></a>
        <a href="https://instagram.com/arnope.12" target="_blank" class="social-link" data-username="@arnope.12"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
</section>




    <button id="scrollUpBtn" aria-label="Scroll to Top">
      <i class="fas fa-arrow-up"></i>
    </button>

    <footer>
        <p>© <?= date("Y") ?> Helmi Gustiarno. All rights reserved.</p>
    </footer>


</body>
<script>
    const scrollBtn = document.getElementById('scrollBtn');

    window.addEventListener('scroll', () => {
        const heroHeight = document.getElementById('home').offsetHeight;
        const scrollY = window.scrollY;

        if (scrollY > heroHeight - 100) {
            scrollBtn.classList.add('scroll-hidden');
        } else {
            scrollBtn.classList.remove('scroll-hidden');
        }
    });
</script>
<script src="animate.js"></script>
<script src="typing.js"></script>
</html>
