<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Sedjiwa</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
        
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('landingpage/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('landingpage/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('landingpage/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{asset('landingpage/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('landingpage/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('landingpage/css/theme.css') }}" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="#home"><img src="{{asset('landingpage/img/gallery/sedjiwa.jpg')}}" width="80" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" href="#ahli">Ahli Kita</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#produk">Produk</a></li>
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#tentang">Tentang Kita</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#testimoni">Testimoni</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#artikel">Artikel Terkait</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#kontak">Kontak</a></li>
            </ul><a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="#!">Masuk</a>
          </div>
        </div>
      </nav>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(landingpage/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="{{asset('landingpage/img/gallery/hero.png')}}" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7">Kami <strong>hadir </strong>untuk<br />kesehatan&nbsp;<strong>mentalmu.</strong></h1>
              <p class="fs-1 mb-5">Tulis yang kamu rasakan <br />atau hubungi para profesional kami. </p><a class="btn btn-lg btn-primary rounded-pill" href="#!" role="button">Tulis Jurnal Harianmu</a>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="ahli">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <!-- <div class="bg-holder bg-size" style="background-image:url(landingpage/img/gallery/bg-departments.png);background-position:top center;background-size:contain;">
              </div> -->
              <!--/.bg-holder-->

              <h1 class="text-center">Ahli Kita</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/doctors-bg.png);background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-xl-10 px-0">
              <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="{{asset ('landingpage/img/gallery/anita.png')}}" width="128" alt="..." />
                            <h5 class="mt-3">Anita Deshai</h5>
                            <p class="mb-0 fs-xxl-1">Psikolog</p>
                            <p class="text-600 mb-0">Jakarta</p>
                            <p class="text-600 mb-4">10 tahun pengalaman</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="submit">Lihat Profil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="{{asset ('landingpage/img/gallery/jane.png')}}" width="128" alt="..." />
                            <h5 class="mt-3">Jane Flakis</h5>
                            <p class="mb-0 fs-xxl-1">Psikiater</p>
                            <p class="text-600 mb-0">Bandung</p>
                            <p class="text-600 mb-4">12 tahun pengalaman</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="submit">Lihat Profil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="{{asset ('landingpage/img/gallery/leo-mario.png')}}" width="128" alt="..." />
                            <h5 class="mt-3">Leo Mario</h5>
                            <p class="mb-0 fs-xxl-1">Psikiater</p>
                            <p class="text-600 mb-0">Semarang</p>
                            <p class="text-600 mb-4">25 tahun pengalaman</p>
                            <div class="text-center">
                              <button class="btn btn-secondary hover-top rounded-pill border-0" type="submit">Lihat Profil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="carousel-item" data-bs-interval="2000">
                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/gallery/anita.png" width="128" alt="..." />
                            <h5 class="mt-3">Anita Deshai</h5>
                            <p class="mb-0 fs-xxl-1">Pediatrics, Gochi Medicine</p>
                            <p class="text-600 mb-0">Florida, United States</p>
                            <p class="text-600 mb-4">10 years experience</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="submit">View Profile</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/gallery/jane.png" width="128" alt="..." />
                            <h5 class="mt-3">Jane Flakis</h5>
                            <p class="mb-0 fs-xxl-1">Gynaecology, Abenka Care</p>
                            <p class="text-600 mb-0">Melbourne, Australia</p>
                            <p class="text-600 mb-4">12 years experience</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="submit">View Profile</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/gallery/leo-mario.png" width="128" alt="..." />
                            <h5 class="mt-3">Leo Mario</h5>
                            <p class="mb-0 fs-xxl-1">Physiotherapy, FitCare</p>
                            <p class="text-600 mb-0">London, England</p>
                            <p class="text-600 mb-4">25 years experience</p>
                            <div class="text-center">
                              <button class="btn btn-secondary hover-top rounded-pill border-0" type="submit">View Profile</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/gallery/anita.png" width="128" alt="..." />
                            <h5 class="mt-3">Anita Deshai</h5>
                            <p class="mb-0 fs-xxl-1">Pediatrics, Gochi Medicine</p>
                            <p class="text-600 mb-0">Florida, United States</p>
                            <p class="text-600 mb-4">10 years experience</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="submit">View Profile</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/gallery/jane.png" width="128" alt="..." />
                            <h5 class="mt-3">Jane Flakis</h5>
                            <p class="mb-0 fs-xxl-1">Gynaecology, Abenka Care</p>
                            <p class="text-600 mb-0">Melbourne, Australia</p>
                            <p class="text-600 mb-4">12 years experience</p>
                            <div class="text-center">
                              <button class="btn btn-outline-secondary rounded-pill" type="submit">View Profile</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5"><img src="assets/img/gallery/leo-mario.png" width="128" alt="..." />
                            <h5 class="mt-3">Leo Mario</h5>
                            <p class="mb-0 fs-xxl-1">Physiotherapy, FitCare</p>
                            <p class="text-600 mb-0">London, England</p>
                            <p class="text-600 mb-4">25 years experience</p>
                            <div class="text-center">
                              <button class="btn btn-secondary hover-top rounded-pill border-0" type="submit">View Profile</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
      <section class="bg-secondary" id="produk">
        <div class="bg-holder" style="background-image:url(assets/img/gallery/bg-eye-care.png);background-position:center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xxl-6"><img class="img-fluid" src="assets/img/gallery/eye-care.png" alt="..." /></div>
            <div class="col-md-7 col-xxl-6 text-center text-md-start">
              <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Selesaikan masalah mental bersama profesional<br class="d-none d-sm-block" />dengan harga terjangkau.</h2>
              <p class="text-light">
                Kami memiliki layanan yang dapat menghubungkanmu dengan para ahli kesehatan mental.
                Bagi kami, tidak ada yang lebih penting dari kesehatan mentalmu dan keluarga yang kamu sayangi.
                Tidak hanya itu, kami juga menyediakan layanan menulis jurnal untuk membantumu mengekspresikan diri dan menjaga keseimbangan emosimu setiap hari.</p>
              <div class="py-3"><a class="btn btn-lg btn-light rounded-pill" href="#!" role="button">Informasi Lebih Lanjut </a></div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0" id="tentang">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <!-- <div class="bg-holder bg-size" style="background-image:url(landingpage/img/gallery/about-us.png);background-position:top center;background-size:contain;"> -->
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">TENTANG KITA</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5">
        <!-- <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/about-bg.png);background-position:top center;background-size:contain;"> -->
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="{{asset('landingpage/img/gallery/health-care.png')}}" alt="..." /></div>
            <div class="col-md-6 text-center text-md-start">
              <h2 class="fw-bold mb-4">Kita menyediakan sistem <br class="d-none d-sm-block" />pelayanan kesehatan mental untukmu</h2>
              <p>
               <ul>
                  <li>
                    <strong>Self-help tanpa stigma:</strong> Dapatkan fitur praktis yang membantumu memahami dan menjaga kesehatan mental secara mandiri dengan mudah dan nyaman.
                  </li>
                  <li>
                    <strong>Layanan profesional terpercaya:</strong> Akses psikolog berpengalaman sesuai kebutuhanmu, langsung melalui aplikasi yang aman dan andal.
                  </li>
                </ul>
                </p>
                <button class="btn btn-lg btn-outline-primary rounded-pill" type="submit">Informasi Lebih Lanjut </button>
              </div>
            </div>
          </div>
        </div>
      </section>
     

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="testimoni">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <!--/.bg-holder-->

              <h1 class="text-center">TESTIMONI</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-0">
        <div class="bg-holder bg-size" style="background-image:url(landingpage/img/gallery/people-bg-1.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center offset-sm-1">
            <div class="carousel slide" id="carouselPeople" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center"><img src="{{ asset ('landingpage/img/gallery/people-who-loves.png')}}" width="100" alt="" />
                      <h5 class="mt-3 fw-medium text-secondary">Susanto</h5>
                      <p class="fw-normal mb-0">Warga Biasa</p>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Respon dokter ramah!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="far fa-star"></i></div>
                      <p>Saya sangat senang dengan layanan di sini, terutama karena dokternya sangat ramah dan sabar dalam menjelaskan setiap detail. Pengalaman ini membuat saya merasa lebih nyaman dan percaya. Saya pasti akan merekomendasikan layanan ini kepada teman dan keluarga saya!</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center"><img src="{{asset('landingpage/img/gallery/speaker-2-v2.jpg')}}" width="100" alt="" />
                      <h5 class="mt-3 fw-medium text-secondary">Susanti</h5>
                      <p class="fw-normal mb-0">Ibu Rumah Sebelah</p>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Pengalaman Menulis yang Menyenangkan!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p>erbagi atau menulis di sini sangat mudah dan menyenangkan! Platform ini memungkinkan cerita atau pengalaman saya dibaca oleh banyak orang, dan yang paling berkesan adalah komunitasnya yang saling mendukung satu sama lain. Rasanya seperti menemukan ruang yang aman dan penuh empati. Sangat saya rekomendasikan!</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center"><img src="{{asset('landingpage/img/gallery/1200px-Max_Ernst_1968.jpg')}}" width="100" alt="" />
                      <h5 class="mt-3 fw-medium text-secondary">Tedjo</h5>
                      <p class="fw-normal mb-0">Peramal</p>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Harga Murah!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p>Harga konsultasi di sini sangat murah dan terjangkau, baik untuk psikolog maupun psikiater. Layanan berkualitas dengan biaya yang ramah di kantong membuat saya merasa nyaman untuk terus menjaga kesehatan mental tanpa khawatir soal biaya. Sangat direkomendasikan!</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="position-relative z-index-2 mt-5">
                  <ol class="carousel-indicators">
                    <li class="active" data-bs-target="#carouselPeople" data-bs-slide-to="0"></li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="2"> </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5"id="artikel">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
            
              <!--/.bg-holder-->

              <h1 class="text-center">ARTIKEL TERKAIT</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section>
        <div class="bg-holder bg-size" style="background-image:url(landingpage/img/gallery/dot-bg.png);background-position:top left;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="{{asset ('landingpage/img/gallery/covid-19.png')}}" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">COVID 19</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 21, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Aku Sembuh dari COVID!!</h5><a class="stretched-link" href="#!">baca selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="{{asset('landingpage/img/gallery/laboratories.png')}}" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Edukasi</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 25, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Menemukan Hal Baru</h5><a class="stretched-link" href="#!">baca selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="{{asset('landingpage/img/gallery/nicotine.png')}}" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Penemuan</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 28, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Aku dan temuanku</h5><a class="stretched-link" href="#!">baca selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="{{asset('landingpage/img/gallery/treatment.png')}}" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">Kesehatan</span>
                  <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Nov 30, 2021</span><span class="fs--1"></span>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Berjuang sembuh dari sakit mental</h5><a class="stretched-link" href="#!">baca selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-primary">
        <div class="bg-holder bg-size" style="background-image:url(landingpage/img/gallery/cta-bg.png);background-position:center right;margin-top:-8.125rem;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="fw-bold text-light">Kirimkan buletin kesehatan mental setiap bulan</h2>
              <p class="text-soft-primary">Aplikasi Sedjiwa memungkinkan kamu menerima buletin bulanan yang berisi edukasi seputar kesehatan mental, tips praktis, dan informasi terkini untuk membantu menjaga keseimbangan emosionalmu setiap hari.</p>
            </div>
            <div class="col-lg-6">
              <h5 class="mb-3 text-soft-primary">Berlangganan Buletin </h5>
              <form class="row gx-2 gy-2 align-items-center">
                <div class="col">
                  <div class="input-group-icon">
                    <label class="visually-hidden" for="inputEmailCta">Address</label>
                    <input class="form-control form-livedoc-control form-cta-control text-soft-primary" id="inputEmailCta" type="email" placeholder="Email" />
                  </div>
                </div>
                <div class="d-grid gap-3 col-sm-auto">
                  <button class="btn btn-lg btn-light rounded-3 px-5 py-3" type="submit">Langganan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section class="py-0 bg-secondary">
        <div class="bg-holder opacity-25" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;margin-top:-3.125rem;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row py-8">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="assets/img/gallery/footer-logo.png" height="51" alt="" /></a>
              <p class="text-light my-4">Platform kesehatan mental terpercaya.</p>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
              <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Ahli</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">Psikolog</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Psikiater</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Produk</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">Jurnaling</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Konsultasi</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> Layanan Pengguna</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">Tentang Kita</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Kontak</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">Langganan</a></li>
              </ul>
            </div>
          </div>
        </div>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-primary">

          <div class="container">
            <div class="row justify-content-md-between justify-content-evenly py-4">
              <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Sedjiwa, 2024</p>
              </div>
              <div class="col-12 col-sm-8 col-md-6">
                <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
                  <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                  </svg>&nbsp;by&nbsp;<a class="fw-bold text-info" href="https://themewagon.com/" target="_blank">Sedjiwa </a>
                </p>
              </div>
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset('landingpage/vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{asset('landingpage/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('landingpage/vendors/is/is.min.js')}}"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{asset('landingpage/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('landingpage/js/theme.js')}}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
  </body>

</html>