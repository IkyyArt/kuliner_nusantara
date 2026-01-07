<?php
//menyertakan code dari file koneksi
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kuliner Nusantara</title>
    <link rel="icon" href="img/Logo Kuliner.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Kuliner Nusantara</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>
            <!-- Tombol Theme Switcher -->
            <li class="nav-item ms-2">
              <button class="btn btn-dark btn-sm" onclick="setDarkTheme()">
                <i class="bi bi-moon"></i> Dark
              </button>
              <button
                class="btn btn-outline-dark btn-sm me-1"
                onclick="setLightTheme()"
              >
                <i class="bi bi-sun"></i> Light
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->

    <!-- hero begin -->
    <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img src="img/Logo Kuliner.png" class="img-fluid" width="300" />
          <div>
            <h1 class="fw-bold display-4">
              Kelezatan Nusantara dalam Setiap Suapan
            </h1>
            <h4 class="lead display-6">
              Ragam cita rasa tradisional yang menggugah selera
            </h4>
            <span id="tanggal"></span>
            <span id="jam"></span>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->

    <!-- article begin -->
    <section id="article" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Article Kuliner</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql); 

        while($row = $hasil->fetch_assoc()){
        ?>
          <!-- Col Begin -->
          <div class="col">
            <div class="card h-100">
              <img
                src="img/<?=$row['gambar'];?>"
                class="card-img-top"
                alt=""
              />
              <div class="card-body">
                <h5 class="card-title"><?=$row['judul'];?></h5>
                <p class="card-text"><?=$row['isi'];?>
                  Rendang merupakan masakan daging khas Minangkabau yang dimasak
                  dengan santan dan rempah-rempah kaya rasa. Masakan ini
                  memiliki filosofi mendalam tentang kesabaran, kebijaksanaan,
                  dan ketekunan dalam proses memasaknya.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"><?=$row['tanggal'];?></small>
              </div>
            </div>
          </div>         
          <!-- Col End -->        
          <?php
          }
          ?> 
        </div>
      </div>
    </section>
    <!-- article end -->

    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5 bg-danger-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Gallery Kuliner</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="RENDANG.jpg"
                class="d-block w-100"
                alt="Rendang Padang"
              />
            </div>
            <div class="carousel-item">
              <img
                src="soto.jpg"
                class="d-block w-100"
                alt="Soto Ayam Lamongan"
              />
            </div>
            <div class="carousel-item">
              <img
                src="gado-gado.jpeg"
                class="d-block w-100"
                alt="Gado-gado Betawi"
              />
            </div>
            <div class="carousel-item">
              <img src="Sate.jpeg" class="d-block w-100" alt="Sate Ayam" />
            </div>
            <div class="carousel-item">
              <img
                src="NasiGoreng.jpg"
                class="d-block w-100"
                alt="Nasi Goreng"
              />
            </div>
            <div class="carousel-item">
              <img src="Rawon.jpg" class="d-block w-100" alt="Rawon" />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- gallery end -->

    <!-- schedule begin -->
    <section id="schedule" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card h-100">
              <h1 class="icon"><i class="bi bi-book"></i></h1>
              <div class="card-body">
                <h5 class="card-title">Membaca</h5>
                <p class="card-text">
                  Menambah wawasa setiap pagi sebelum beraktivitas
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card h-100">
              <h1 class="icon"><i class="bi bi-laptop"></i></h1>
              <div class="card-body">
                <h5 class="card-title">Menulis</h5>
                <p class="card-text">
                  Mencatat setiap pengalaman harian di jumat pribadi
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card h-100">
              <h1 class="icon"><i class="bi bi-people"></i></h1>
              <div class="card-body">
                <h5 class="card-title">Diskusi</h5>
                <p class="card-text">
                  Bertukar ide dengan teman dalam kelompok belajar
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card h-100">
              <h1 class="icon"><i class="bi bi-bicycle"></i></h1>
              <div class="card-body">
                <h5 class="card-title">Olahraga</h5>
                <p class="card-text">
                  Menjaga kesehatan denngan bersepeda sore hari
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h1 class="icon"><i class="bi bi-film"></i></h1>
                <h5 class="card-title">Movie</h5>
                <p class="card-text">Menonton film yang bagus di bioskop</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card h-100">
              <h1 class="icon"><i class="bi bi-bag"></i></h1>
              <div class="card-body">
                <h5 class="card-title">Belanja</h5>
                <p class="card-text">Membeli kebutuhan bulanan supermarket</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- schedule end -->

    <!-- ABOUT ME -->
    <section id="about" style="background-color: #fdecef">
      <div class="container py-5">
        <h2 class="text-center mb-4 fw-bold">About Me</h2>

        <div class="accordion shadow-sm" id="accordionExample">
          <!-- UNIVERSITAS -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button bg-danger text-white fw-semibold"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
                Universitas Dian Nuswantoro Semarang (2024–Now)
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong>This is the first item's accordion body</strong>
                It is shown by default, until the collapse plugin adds the
                appropriate classes that we use to style each element. These
                classes control the overall appearance, as well as the showing
                and hiding. You can modify any of this with custom CSS or
                overriding our default constiables. It's also worth noting that
                just about any HTML can go within the .accordion-body, though
                the transition does limit overflow.
              </div>
            </div>
          </div>

          <!-- SMK -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed bg-light fw-semibold"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
                SMK Negeri 1 Semarang (2021–2024)
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong>Lulusan jurusan Teknik Elektronika.</strong>
                Selama di SMA, saya aktif dalam kegiatan ekstrakurikuler
                teknologi dan komunitas komputer. Saya juga mulai tertarik pada
                dunia anime, manga, dan pemrograman sejak masa ini.
              </div>
            </div>
          </div>

          <!-- SMP -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed bg-light fw-semibold"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
                SMP Negeri 2 Semarang (2018–2021)
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <strong>Awal mula ketertarikan terhadap teknologi.</strong>
                Di masa SMP saya mulai mengenal komputer dan dasar logika
                pemrograman sederhana, dan mencoba belajjar tentang arduino
                serta mulai menyukai dunia Jepang seperti anime dan manga.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section - DIPERBAIKI -->
    <section id="contact" class="py-5 bg-light">
      <div class="container">
        <div class="row mb-4">
          <div class="col-12 text-center">
            <h2 class="fw-bold display-5">Hubungi Kami</h2>
            <p class="lead">
              Isi form berikut untuk memberikan saran atau pertanyaan
            </p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0">
              <div class="card-body p-4">
                <h3 class="card-title text-center mb-4 fw-bold">Buku Tamu</h3>
                <form action="#" method="post">
                  <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold"
                      >Nama</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="nama"
                      name="nama"
                      placeholder="Masukkan nama lengkap"
                      required
                    />
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label fw-semibold"
                      >Email</label
                    >
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      name="email"
                      placeholder="contoh@email.com"
                      required
                    />
                  </div>

                  <div class="mb-4">
                    <label for="pesan" class="form-label fw-semibold"
                      >Pesan</label
                    >
                    <textarea
                      class="form-control"
                      id="pesan"
                      name="pesan"
                      rows="5"
                      placeholder="Tulis pesan atau pertanyaan Anda di sini..."
                      required
                    ></textarea>
                  </div>

                  <div class="d-grid">
                    <button
                      type="submit"
                      class="btn btn-danger btn-lg fw-semibold"
                    >
                      Kirim Pesan
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer begin -->
    <footer class="text-center p-5 bg-dark text-white">
      <div class="mb-3">
        <a href="https://wa.me/6282111794900" class="text-decoration-none">
          <i class="bi bi-whatsapp h2 p-2 text-white"></i>
        </a>
        <a
          href="https://www.instagram.com/udinusofficial?igsh=MTM5MGR1aTE5dWJ1"
          class="text-decoration-none"
        >
          <i class="bi bi-instagram h2 p-2 text-white"></i>
        </a>
        <a
          href="https://www.tiktok.com/@udinusofficial?_t=ZS-90vSMqZxlSh&_r=1"
          class="text-decoration-none"
        >
          <i class="bi bi-tiktok h2 p-2 text-white"></i>
        </a>
      </div>
      <div>Rizky Delfa Ramadhani - A11.2024.15687 - A11.4316 &copy; 2025</div>
    </footer>
    <!-- footer end -->
    <!-- Tombol Back to Top -->
    <button
      id="backToTop"
      class="btn btn-danger rounded-circle position-fixed bottom-0 end-0 m-3 d-none"
    >
      <i class="bi bi-arrow-up" title="Back to Top"></i>
    </button>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
      function setDarkTheme() {
        document.body.style.backgroundColor = "#121212";
        document.body.style.color = "#e0e0e0";

        const navbar = document.querySelector(".navbar");
        navbar.classList.remove("bg-body-tertiary");
        navbar.style.backgroundColor = "#1e1e1e";

        const darkButton = document.querySelector(".btn-dark");
        darkButton.style.backgroundColor = "#e0e0e0";
        darkButton.style.color = "#121212";

        const lightButton = document.querySelector(".btn-outline-dark");
        lightButton.style.borderColor = "#e0e0e0";
        lightButton.style.color = "#e0e0e0";

        const navLinks = document.querySelectorAll(".nav-link");
        navLinks.forEach((link) => {
          link.style.color = "#e0e0e0";
        });

        const brand = document.querySelector(".navbar-brand");
        brand.style.color = "#e0e0e0";

        const cards = document.querySelectorAll(".card");
        cards.forEach((card) => {
          card.style.backgroundColor = "#1e1e1e";
          card.style.color = "#e0e0e0";
          card.style.borderColor = "#333";
        });

        const cardBodies = document.querySelectorAll(".card-body");
        cardBodies.forEach((body) => {
          body.style.backgroundColor = "#1e1e1e";
          body.style.color = "#e0e0e0";
        });

        const cardTitles = document.querySelectorAll(".card-title");
        cardTitles.forEach((title) => {
          title.style.color = "#ffffff";
        });

        const cardTexts = document.querySelectorAll(".card-text");
        cardTexts.forEach((text) => {
          text.style.color = "#b0b0b0";
        });

        const articleSection = document.getElementById("article");
        articleSection.style.backgroundColor = "#212529";
        articleSection.style.color = "#e0e0e0";

        const heroSection = document.getElementById("hero");
        heroSection.classList.remove("bg-danger-subtle");
        heroSection.style.backgroundColor = "#6C757D";
        heroSection.style.color = "#e0e0e0";

        const gallerySection = document.getElementById("gallery");
        gallerySection.classList.remove("bg-danger-subtle");
        gallerySection.style.backgroundColor = "#6C757D";
        gallerySection.style.color = "#e0e0e0";

        const scheduleSection = document.getElementById("schedule");
        scheduleSection.style.backgroundColor = "#212529";
        scheduleSection.style.color = "#e0e0e0";

        const aboutSection = document.getElementById("about");
        aboutSection.style.backgroundColor = "#212529";
        aboutSection.style.color = "#e0e0e0";

        const contactSection = document.getElementById("contact");
        contactSection.classList.remove("bg-light");
        contactSection.style.backgroundColor = "#6C757D";
        contactSection.style.color = "#e0e0e0";

        const accordionItems = document.querySelectorAll(".accordion-item");
        accordionItems.forEach((item) => {
          item.style.backgroundColor = "#1e1e1e";
          item.style.borderColor = "#333";
        });

        const scheduleIcons = document.querySelectorAll("#schedule .icon i");
        scheduleIcons.forEach((icon) => {
          icon.style.color = "#ff9800";
        });

        const accordionButtons = document.querySelectorAll(".accordion-button");
        accordionButtons.forEach((button) => {
          if (button.classList.contains("bg-danger")) {
            button.classList.remove("bg-danger", "text-white");
            button.style.backgroundColor = "#ff9800";
            button.style.color = "#000000";
          } else if (button.classList.contains("bg-light")) {
            button.classList.remove("bg-light");
            button.style.backgroundColor = "#2d2d2d";
            button.style.color = "#e0e0e0";
          }
        });

        const accordionBodies = document.querySelectorAll(".accordion-body");
        accordionBodies.forEach((body) => {
          body.style.backgroundColor = "#1e1e1e";
          body.style.color = "#e0e0e0";
        });

        const inputs = document.querySelectorAll(".form-control");
        inputs.forEach((input) => {
          input.style.backgroundColor = "#e0e0e0";
          input.style.color = "#e0e0e0";
          input.style.borderColor = "#444";
        });

        const labels = document.querySelectorAll(".form-label");
        labels.forEach((label) => {
          label.style.color = "";
        });

        const submitButton = document.querySelector("#contact .btn-danger");
        if (submitButton) {
          submitButton.style.backgroundColor = "#ff9800";
          submitButton.style.borderColor = "#ff9800";
          submitButton.style.color = "#000000";
        }

        const footer = document.querySelector("footer");
        footer.style.backgroundColor = "#000000";
        footer.style.color = "#e0e0e0";

        const backToTopBtn = document.getElementById("backToTop");
        backToTopBtn.style.backgroundColor = "#ff9800";
        backToTopBtn.style.color = "#000000";

        const icons = document.querySelectorAll(".icon");
        icons.forEach((icon) => {
          icon.style.color = "#e0e0e0";
        });

        const carouselControls = document.querySelectorAll(
          ".carousel-control-prev, .carousel-control-next"
        );
        carouselControls.forEach((control) => {
          control.style.filter = "invert(1)";
        });

        const leads = document.querySelectorAll(".lead");
        leads.forEach((lead) => {
          lead.style.color = "#b0b0b0";
        });

        const contactHeading = document.querySelector("#contact h2");
        if (contactHeading) {
          contactHeading.style.color = "#e0e0e0";
        }

        const contactSubheading = document.querySelector("#contact .lead");
        if (contactSubheading) {
          contactSubheading.style.color = "#b0b0b0";
        }

        const contactCard = document.querySelector("#contact .card");
        if (contactCard) {
          contactCard.style.backgroundColor = "#343a40";
          contactCard.style.color = "#ffffff";
        }

        const contactTexts = contactSection.querySelectorAll(
          "h2, h3, .lead, .card-title, .form-label"
        );
        contactTexts.forEach((text) => {
          text.style.color = "#ffffff";
        });

        const contactCardBody = document.querySelector("#contact .card-body");
        if (contactCardBody) {
          contactCardBody.style.backgroundColor = "#2d2d2d";
          contactCardBody.style.color = "#e0e0e0";
        }

        const contactCardTitle = document.querySelector("#contact .card-title");
        if (contactCardTitle) {
          contactCardTitle.style.color = "#e0e0e0";
        }

        localStorage.setItem("theme", "dark");
      }

      function setLightTheme() {
        document.body.style.backgroundColor = "";
        document.body.style.color = "";

        const navbar = document.querySelector(".navbar");
        navbar.style.backgroundColor = "";
        navbar.classList.add("bg-body-tertiary");

        const darkButton = document.querySelector(".btn-dark");
        darkButton.style.backgroundColor = "";
        darkButton.style.color = "";

        const lightButton = document.querySelector(".btn-outline-dark");
        lightButton.style.borderColor = "";
        lightButton.style.color = "";

        const navLinks = document.querySelectorAll(".nav-link");
        navLinks.forEach((link) => {
          link.style.color = "";
        });

        const brand = document.querySelector(".navbar-brand");
        brand.style.color = "";

        const cards = document.querySelectorAll(".card");
        cards.forEach((card) => {
          card.style.backgroundColor = "";
          card.style.color = "";
          card.style.borderColor = "";
        });

        const cardBodies = document.querySelectorAll(".card-body");
        cardBodies.forEach((body) => {
          body.style.backgroundColor = "";
          body.style.color = "";
        });

        const cardTitles = document.querySelectorAll(".card-title");
        cardTitles.forEach((title) => {
          title.style.color = "";
        });

        const cardTexts = document.querySelectorAll(".card-text");
        cardTexts.forEach((text) => {
          text.style.color = "";
        });

        const heroSection = document.getElementById("hero");
        heroSection.style.backgroundColor = "";
        heroSection.style.color = "";
        heroSection.classList.add("bg-danger-subtle");

        const gallerySection = document.getElementById("gallery");
        gallerySection.style.backgroundColor = "";
        gallerySection.style.color = "";
        gallerySection.classList.add("bg-danger-subtle");

        const articleSection = document.getElementById("article");
        articleSection.style.backgroundColor = "";
        articleSection.style.color = "";

        const scheduleSection = document.getElementById("schedule");
        scheduleSection.style.backgroundColor = "";
        scheduleSection.style.color = "";

        const aboutSection = document.getElementById("about");
        aboutSection.style.backgroundColor = "#fdecef";
        aboutSection.style.color = "";

        const contactSection = document.getElementById("contact");
        contactSection.style.backgroundColor = "";
        contactSection.style.color = "";
        contactSection.classList.add("bg-light");

        const accordionItems = document.querySelectorAll(".accordion-item");
        accordionItems.forEach((item) => {
          item.style.backgroundColor = "";
          item.style.borderColor = "";
        });

        const scheduleIcons = document.querySelectorAll("#schedule .icon i");
        scheduleIcons.forEach((icon) => {
          icon.style.color = "#dc3545";
        });

        const accordionButtons = document.querySelectorAll(".accordion-button");
        accordionButtons.forEach((button, index) => {
          button.style.backgroundColor = "";
          button.style.color = "";

          if (index === 0) {
            button.classList.add("bg-danger", "text-white");
          } else {
            button.classList.add("bg-light");
          }
        });

        const accordionBodies = document.querySelectorAll(".accordion-body");
        accordionBodies.forEach((body) => {
          body.style.backgroundColor = "";
          body.style.color = "";
        });

        const inputs = document.querySelectorAll(".form-control");
        inputs.forEach((input) => {
          input.style.backgroundColor = "";
          input.style.color = "";
          input.style.borderColor = "";
        });

        const labels = document.querySelectorAll(".form-label");
        labels.forEach((label) => {
          label.style.color = "";
        });

        const submitButton = document.querySelector("#contact .btn-danger");
        if (submitButton) {
          submitButton.style.backgroundColor = "";
          submitButton.style.borderColor = "";
          submitButton.style.color = "";
        }

        const footer = document.querySelector("footer");
        footer.style.backgroundColor = "";
        footer.style.color = "";

        const backToTopBtn = document.getElementById("backToTop");
        backToTopBtn.style.backgroundColor = "";
        backToTopBtn.style.color = "";

        const icons = document.querySelectorAll(".icon");
        icons.forEach((icon) => {
          icon.style.color = "";
        });

        const carouselControls = document.querySelectorAll(
          ".carousel-control-prev, .carousel-control-next"
        );
        carouselControls.forEach((control) => {
          control.style.filter = "";
        });

        const leads = document.querySelectorAll(".lead");
        leads.forEach((lead) => {
          lead.style.color = "";
        });

        const contactCard = document.querySelector("#contact .card");
        if (contactCard) {
          contactCard.style.backgroundColor = "";
          contactCard.style.color = "";
        }

        const contactTexts = contactSection.querySelectorAll(
          "h2, h3, .lead, .card-title, .form-label"
        );
        contactTexts.forEach((text) => {
          text.style.color = "";
        });

        const contactCardBody = document.querySelector("#contact .card-body");
        if (contactCardBody) {
          contactCardBody.style.backgroundColor = "";
          contactCardBody.style.color = "";
        }

        localStorage.setItem("theme", "light");
      }

      function tampilWaktu() {
        const waktu = new Date();
        const tanggal = waktu.getDate();
        const bulan = waktu.getMonth();
        const tahun = waktu.getFullYear();
        const jam = waktu.getHours();
        const menit = waktu.getMinutes();
        const detik = waktu.getSeconds();
        const arrBulan = [
          "1",
          "2",
          "3",
          "4",
          "5",
          "6",
          "7",
          "8",
          "9",
          "10",
          "11",
          "12",
        ];
        const tanggal_full = tanggal + "/" + arrBulan[bulan] + "/" + tahun;
        const jam_full = jam + ":" + menit + ":" + detik;

        document.getElementById("tanggal").innerHTML = tanggal_full;
        document.getElementById("jam").innerHTML = jam_full;
      }
      setInterval(tampilWaktu, 1000);

      const backToTop = document.getElementById("backToTop");
      window.addEventListener("scroll", function () {
        if (window.scrollY > 300) {
          backToTop.classList.remove("d-none");
          backToTop.classList.add("d-block");
        } else {
          backToTop.classList.remove("d-block");
          backToTop.classList.add("d-none");
        }
      });

      backToTop.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });

      window.addEventListener("DOMContentLoaded", function () {
        const savedTheme = localStorage.getItem("theme");
        if (savedTheme === "dark") {
          setDarkTheme();
        }
        tampilWaktu();
      });
    </script>
  </body>
</html>
