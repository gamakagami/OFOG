<!DOCTYPE html>
<html lang="en">

<head>
<?php
        $USE_BOOTSTRAP = true;
        $TITLE = 'Contact';
        require('components/head.php');
    ?>
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

    <?php 
    require_once('components/navbar.php'); ?>

    <div class="container-fluid py-5" style="margin-bottom: 150px">
        <div class="container">
            <!-- Page Header -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                     <h1 class="title black">
                        <span>Our Vision & Mission</span>
                    </h1>
                    <p class="lead text-muted">Get in touch with HIMTI and find our campus locations</p>
                </div>
            </div>

            <!-- Contact / Campus Section -->
            <div class="row">
                <div class="col-lg-10 mx-auto">

                    <!-- Mini Navbar -->
                    <div class="text-center mb-4">
                    <div class="d-grid gap-3 d-md-flex justify-content-center">
                        <button id="btn-contact" class="btn btn-outline-primary btn-lg active" onclick="showSection('contact')">
                        <i class="fas fa-envelope me-2"></i>Contact Information
                        </button>
                        <button id="btn-campus" class="btn btn-outline-primary btn-lg" onclick="showSection('campus')">
                        <i class="fas fa-map-marker-alt me-2"></i>Campus Locations
                        </button>
                    </div>
                    </div>


                    <!-- Contact Information View -->
                    <div id="contact-view" class="card-content">
                        <div class="row h-100 justify-content-center">
                            <!-- Organization Logo Section -->
                            <div class="col-12 text-center mb-4">
                                <img src="assets/img/organization-logo/HIMTI.png" alt="HIMTI Logo" class="img-fluid mb-3" style="max-width: 200px;">
                                <h4 class="text-primary fw-bold">HIMTI BINUS University</h4>
                                <p class="text-muted">Get in touch with us through any of these channels</p>
                            </div>
                            
                            <!-- Contact Cards -->
                           <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                                <div class="contact-card h-100 p-4 border-0 rounded-4 shadow-sm text-white" style="background: #EA4335;">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3" style="width: 60px; height: 60px; background: rgba(255, 255, 255, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.3);">
                                            <i class="fas fa-envelope fa-2x"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1">Email</h5>
                                            <p class="mb-0 opacity-75">Send us a message</p>
                                        </div>
                                    </div>
                                    <a href="mailto:mail@himti.or.id" class="btn btn-light btn-sm w-100">
                                        <i class="fas fa-paper-plane me-2"></i>mail@himti.or.id
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                                <div class="contact-card h-100 p-4 border-0 rounded-4 shadow-sm text-white" style="background-color: #1877F2;">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3" style="width: 60px; height: 60px; background: rgba(255, 255, 255, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.3);">
                                            <i class="fab fa-facebook fa-2x"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1">Facebook</h5>
                                            <p class="mb-0 opacity-75">Follow us on Facebook</p>
                                        </div>
                                    </div>
                                    <a href="https://www.facebook.com/himtibinus/" target="_blank" class="btn btn-light btn-sm w-100">
                                        <i class="fab fa-facebook me-2"></i>@himtibinus
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                                <div class="contact-card h-100 p-4 border-0 rounded-4 shadow-sm text-white" style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3" style="width: 60px; height: 60px; background: rgba(255, 255, 255, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.3);">
                                            <i class="fab fa-instagram fa-2x"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1">Instagram</h5>
                                            <p class="mb-0 opacity-75">Follow us on Instagram</p>
                                        </div>
                                    </div>
                                    <a href="https://instagram.com/himti_binus" target="_blank" class="btn btn-light btn-sm w-100">
                                        <i class="fab fa-instagram me-2"></i>@himti_binus
                                    </a>
                                </div>
                            </div>

                            <!-- NEW: Twitter/X -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                                <div class="contact-card h-100 p-4 border-0 rounded-4 shadow-sm text-white" style="background-color: #000000;">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3" style="width: 60px; height: 60px; background: rgba(255, 255, 255, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.3);">
                                            <i class="fab fa-x-twitter fa-2x"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1">Twitter (X)</h5>
                                            <p class="mb-0 opacity-75">Follow us on X</p>
                                        </div>
                                    </div>
                                    <a href="https://x.com/himtibinus" target="_blank" class="btn btn-light btn-sm w-100">
                                        <i class="fab fa-x-twitter me-2"></i>@himtibinus
                                    </a>
                                </div>
                            </div>

                            <!-- NEW: YouTube -->
                           <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                                <div class="contact-card h-100 p-4 border-0 rounded-4 shadow-sm text-white" style="background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3" style="width: 60px; height: 60px; background: rgba(255, 255, 255, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.3);">
                                            <i class="fab fa-youtube fa-2x"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1">YouTube</h5>
                                            <p class="mb-0 opacity-75">Watch our videos</p>
                                        </div>
                                    </div>
                                    <a href="https://www.youtube.com/user/HimtiBinus" target="_blank" class="btn btn-light btn-sm w-100">
                                        <i class="fab fa-youtube me-2"></i>HIMTI Binus
                                    </a>
                                </div>
                            </div>

                            <!-- NEW: GitHub -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                                <div class="contact-card h-100 p-4 border-0 rounded-4 shadow-sm text-white" style="background: linear-gradient(135deg, #333 0%, #000 100%);">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3" style="width: 60px; height: 60px; background: rgba(255, 255, 255, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.3);">
                                            <i class="fab fa-github fa-2x"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1">GitHub</h5>
                                            <p class="mb-0 opacity-75">Explore our projects</p>
                                        </div>
                                    </div>
                                    <a href="https://github.com/himtibinus/" target="_blank" class="btn btn-light btn-sm w-100">
                                        <i class="fab fa-github me-2"></i>himtibinus
                                    </a>
                                </div>
                            </div>

                            <!-- NEW: TikTok -->
                           <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                                <div class="contact-card h-100 p-4 border-0 rounded-4 shadow-sm text-white" style="background: linear-gradient(135deg, #000000 0%, #ff0050 100%);">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3" style="width: 60px; height: 60px; background: rgba(255, 255, 255, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.3);">
                                            <i class="fab fa-tiktok fa-2x"></i>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1">TikTok</h5>
                                            <p class="mb-0 opacity-75">Follow our TikTok</p>
                                        </div>
                                    </div>
                                    <a href="https://www.tiktok.com/@himtibinus" target="_blank" class="btn btn-light btn-sm w-100">
                                        <i class="fab fa-tiktok me-2"></i>@himtibinus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Campus Locations View -->
                    <div id="campus-view" class="card-content" style="display: none;">
                        <div class="row h-100">
                            <div class="col-lg-4 col-md-6 col-12 mb-4">
                                <div class="campus-card h-100 p-4 border rounded-3 shadow-sm">
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="fas fa-university text-primary me-3 fa-2x"></i>
                                        <div>
                                            <h5 class="fw-bold text-primary mb-2">Alam Sutera Campus</h5>
                                            <p class="text-muted mb-0">Student Club and Activity Center (SCAC)</p>
                                        </div>
                                    </div>
                                    <p class="mb-0">Jl. Jalur Sutera Barat Kav. 21, Alam Sutera, Tangerang</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-4">
                                <div class="campus-card h-100 p-4 border rounded-3 shadow-sm">
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="fas fa-university text-primary me-3 fa-2x"></i>
                                        <div>
                                            <h5 class="fw-bold text-primary mb-2">Syahdan Campus</h5>
                                            <p class="text-muted mb-0">Student Club and Activity Center (SCAC)</p>
                                        </div>
                                    </div>
                                    <p class="mb-0">Jl. K H. Syahdan No. 9, Kemanggisan – Palmerah Jakarta Barat 11480</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-4">
                                <div class="campus-card h-100 p-4 border rounded-3 shadow-sm">
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="fas fa-university text-primary me-3 fa-2x"></i>
                                        <div>
                                            <h5 class="fw-bold text-primary mb-2">Senayan Campus</h5>
                                            <p class="text-muted mb-0">FX Sudirman Lantai 6</p>
                                        </div>
                                    </div>
                                    <p class="mb-0">Jalan Pintu Satu Senayan No.3, RT.1/RW.3 Jakarta</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 mb-4">
                                <div class="campus-card h-100 p-4 border rounded-3 shadow-sm">
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="fas fa-university text-primary me-3 fa-2x"></i>
                                        <div>
                                            <h5 class="fw-bold text-primary mb-2">Bandung Campus</h5>
                                            <p class="text-muted mb-0">Paskal Hyper Square</p>
                                        </div>
                                    </div>
                                    <p class="mb-0">Jalan Pasirkaliki No. 25-27 Bandung</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 mb-4">
                                <div class="campus-card h-100 p-4 border rounded-3 shadow-sm">
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="fas fa-university text-primary me-3 fa-2x"></i>
                                        <div>
                                            <h5 class="fw-bold text-primary mb-2">Malang Campus</h5>
                                            <p class="text-muted mb-0">Araya Mansion</p>
                                        </div>
                                    </div>
                                    <p class="mb-0">Jalan Araya Mansion No. 8 – 22, Araya Malang 65154</p>
                                </div>
                            </div>

                            <!-- New Semarang Campus -->
                            <div class="col-lg-6 col-md-6 col-12 mb-4">
                                <div class="campus-card h-100 p-4 border rounded-3 shadow-sm">
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="fas fa-university text-primary me-3 fa-2x"></i>
                                        <div>
                                            <h5 class="fw-bold text-primary mb-2">Semarang Campus</h5>
                                            <p class="text-muted mb-0">POJ Avenue</p>
                                        </div>
                                    </div>
                                    <p class="mb-0">POJ Avenue No.Kav. 3, Tawangsari, Semarang Barat,<br>Semarang City, Central Java 50144</p>
                                </div>
                            </div>

                            <!-- New Bekasi Campus -->
                            <div class="col-lg-6 col-md-6 col-12 mb-4">
                                <div class="campus-card h-100 p-4 border rounded-3 shadow-sm">
                                    <div class="d-flex align-items-start mb-3">
                                        <i class="fas fa-university text-primary me-3 fa-2x"></i>
                                        <div>
                                            <h5 class="fw-bold text-primary mb-2">Bekasi Campus</h5>
                                            <p class="text-muted mb-0">Summarecon Bekasi</p>
                                        </div>
                                    </div>
                                    <p class="mb-0">Jalan Lingkar Boulevard Blok WA No.1 Summarecon Bekasi Kel,<br>
                                        RT.006/RW.003, Marga Mulya, Kec. Bekasi Utara, Kota Bks,<br>
                                        Jawa Barat 17142</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('components/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

    <script>
        function showSection(section) {
            const contactView = document.getElementById('contact-view');
            const campusView = document.getElementById('campus-view');
            const btnContact = document.getElementById('btn-contact');
            const btnCampus = document.getElementById('btn-campus');

            if (section === 'contact') {
                contactView.style.display = 'block';
                campusView.style.display = 'none';
                btnContact.classList.add('active');
                btnCampus.classList.remove('active');
            } else {
                contactView.style.display = 'none';
                campusView.style.display = 'block';
                btnCampus.classList.add('active');
                btnContact.classList.remove('active');
            }
        }
    </script>

</body>
</html>
