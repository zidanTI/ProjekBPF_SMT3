<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Active Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="/assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Awak Visual</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/landingBaru" class="active">Home</a></li>
                    {{-- <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li> --}}
                    <li><a href="/porto">Portfolio</a></li>
                    {{-- <li><a href="team.html">Team</a></li> --}}
                    {{-- <li><a href="blog.html">Blog</a></li> --}}

                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <main class="main">

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="/assets/img/AWK_2487.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/assets/img/AWK_2492.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/assets/img/AWK_2495.jpg" alt="Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-1">
                        <span class="section-subtitle" data-aos="fade-up">Selamat Datang Di Website Kami</span>
                        <h1 class="mb-4" data-aos="fade-up">
                            Awak Visual
                        </h1>
                        <p data-aos="fade-up">
                            "Tak perlu bingung memilih fotografer! Dengan kami, Anda mendapatkan kualitas terbaik,
                            jadwal fleksibel, dan layanan yang memuaskan."
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- About 2 Section -->
        <section id="about-2" class="about-2 section light-background">

            <div class="container">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
                            <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                                <div class="img">
                                    <img src="/assets/img/AWK_2503.jpg" alt="circle image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <main>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Paket</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fasilitas as $item)
                                        <tr>
                                            <td>{{ $item->id_fasilitas }}</td>
                                            <td>{{ $item->nama_paket }}</td>
                                            <td>Rp.{{ $item->harga }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </main>
                        <div class="container custom-container">
                            <h2 class="text-center">Kalender Booking</h2>
                            <div id="calendar"></div>
                        </div>

                        <style>
                            .custom-container {
                                width: 90%;
                                /* Atur lebar menjadi 80% dari layar */
                                max-width: 800px;
                                /* Atur lebar maksimum */
                                background-color: #37acff;
                                /* Warna latar biru muda */
                                padding: 20px;
                                /* Tambahkan ruang di dalam container */
                                margin: 20px auto;
                                /* Pusatkan container secara horizontal */
                                border-radius: 10px;
                                /* Buat sudut melengkung */
                                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                /* Tambahkan efek bayangan */
                            }

                            #calendar {
                                height: 400px;
                                /* Contoh ukuran kalender */
                                background-color: #ffffff;
                                /* Warna latar putih untuk kalender */
                                border: 1px solid #ccc;
                                /* Tambahkan garis pembatas */
                                border-radius: 5px;
                                /* Sudut melengkung */
                                padding: 10px;
                                /* Tambahkan ruang dalam */
                                box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
                                /* Efek bayangan bagian dalam */
                            }
                        </style>

                        <!-- FullCalendar CSS -->
                        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.css"
                            rel="stylesheet">
                        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js"></script>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const calendarEl = document.getElementById('calendar');

                                const calendar = new FullCalendar.Calendar(calendarEl, {
                                    initialView: 'dayGridMonth',
                                    events: '/api/sewa/events', // API untuk mengambil data booking
                                    headerToolbar: {
                                        left: 'prev,next today',
                                        center: 'title',
                                        right: 'dayGridMonth,timeGridWeek,timeGridDay',
                                    },
                                    dateClick: function(info) {
                                        window.location.href = `/pesan`;
                                    },
                                });

                                calendar.render();
                            });
                        </script>
                        <main class="container" class="text-center">
                            <form action="{{ route('sewa.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Anda</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">Nomor HP</label>
                                    <p class="small">Contoh: 628xxxxxxxxxx</p>
                                    <input type="text" name="no_hp" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="id_fasilitas">Paket Fasilitas</label>
                                    <select name="id_fasilitas" class="form-control" required>
                                        @foreach ($fasilitas as $item)
                                            <option value="{{ $item->id_fasilitas }}">{{ $item->nama_paket }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_acara">Tanggal</label>
                                    <input type="date" name="tanggal_acara" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_acara">Acara</label>
                                    <input type="text" name="nama_acara" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Simpan</button>
                            </form>

                            <!-- Instruksi Pembayaran -->
                            <hr>
                            <div class="text-center">
                                <h5>Instruksi Pembayaran</h5>
                                <p>Silakan transfer pembayaran ke rekening berikut:</p>
                                <ul class="list-group mb-3">
                                    <li class="list-group-item">
                                        <strong>Bank Tujuan:</strong> Bank Mandiri
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Nomor Rekening:</strong> 1234-5678-9012
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Atas Nama:</strong> Fadhil Husnu
                                    </li>
                                </ul>
                                <h5>Catatan Penting:</h5>
                                <ul>
                                    <li>PROSES PEMBAYARAN UNUTK BOOKING WAJIB DP 50 % DARI HARGA </li>
                                    <li>Pastikan jumlah yang ditransfer sesuai dengan total pembayaran.</li>
                                    <li>Simpan bukti transfer sebagai tanda pembayaran.</li>
                                    <li>Jika ada pertanyaan, silakan hubungi kami melalui WhatsApp atau Email.</li>
                                    <li>No Owner : 0822246922152</li>
                                </ul>
                            </div>
                        </main>




                        <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
                            <div class="px-3">
                                <h2 class="content-title text-start">
                                    "Selamat datang di layanan fotografi kami, tempat di mana setiap momen istimewa Anda
                                    diperlakukan dengan penuh cinta dan perhatian. Kami memahami bahwa setiap orang
                                    memiliki cerita unik, dan keinginan Anda adalah prioritas kami. Dengan tim
                                    fotografer berpengalaman yang selalu menjaga kualitas layanan, kami berkomitmen
                                    untuk memberikan pengalaman terbaik, mulai dari proses booking hingga hasil akhir
                                    yang memuaskan. Tidak perlu khawatir, kami akan membantu Anda di setiap langkah,
                                    memastikan semuanya berjalan lancar dan sesuai harapan. Kepuasan Anda adalah
                                    kebahagiaan kami, dan kami ada di sini untuk menciptakan momen yang tak terlupakan,
                                    dengan perhatian penuh terhadap detail. Terima kasih telah mempercayai kami—Anda
                                    layak mendapatkan yang terbaik, dan kami siap mewujudkannya dengan sepenuh hati."
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About 2 Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <div class="container">
                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-3">
                        <div class="services-item" data-aos="fade-up">
                            <div class="services-icon">
                                <i class="bi bi-bullseye"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="services-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="services-icon">
                                <i class="bi bi-command"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="services-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="services-icon">
                                <i class="bi bi-bar-chart"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /Services Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container">

                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-5">
                        <div class="images-overlap">
                            <img src="/assets/img/AWK_3946.jpg" alt="student" class="img-fluid img-1"
                                data-aos="fade-up">
                        </div>
                    </div>

                    <div class="col-lg-4 ps-lg-5">
                        {{-- <span class="content-subtitle">Why Us</span>
                        <h2 class="content-title">Far far away Behind the Word Mountains</h2>
                        <p class="lead">
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia.
                        </p>
                        <p class="mb-5">
                            There live the blind texts. Separated they live in Bookmarksgrove
                            right at the coast of the Semantics, a large language ocean.
                        </p> --}}
                        {{-- <div class="row mb-5 count-numbers">

                            <!-- Start Stats Item -->
                            <div class="col-4 counter" data-aos="fade-up" data-aos-delay="100">
                                <span data-purecounter-separator="true" data-purecounter-start="0"
                                    data-purecounter-end="3919" data-purecounter-duration="1"
                                    class="purecounter number"></span>
                                <span class="d-block">Coffee</span>
                            </div>
                            <!-- End Stats Item -->

                            <!-- Start Stats Item -->
                            <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">
                                <span data-purecounter-separator="true" data-purecounter-start="0"
                                    data-purecounter-end="2831" data-purecounter-duration="1"
                                    class="purecounter number"></span>
                                <span class="d-block">Codes</span>
                            </div>
                            <!-- End Stats Item -->

                            <!-- Start Stats Item -->
                            <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">
                                <span data-purecounter-separator="true" data-purecounter-start="0"
                                    data-purecounter-end="1914" data-purecounter-duration="1"
                                    class="purecounter number"></span>
                                <span class="d-block">Projects</span>
                            </div>
                            <!-- End Stats Item -->

                        </div> --}}
                    </div>

                </div>

            </div>
        </section><!-- /Stats Section -->

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>Foto Foto</p>
                <h2>Awak Visual</h2>
            </div><!-- End Section Title -->
            <div class="container">

                <div class="row gy-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a href="#" class="thumb d-block"><img src="/assets/img/AWK_3949.jpg"
                                    alt="Image" class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a href="#" class="cat"></a> •
                                    <span class="date"></span>
                                </div>
                                <h3><a href="#"></a></h3>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
                            <a href="#" class="thumb d-block"><img src="/assets/img/AWK_3973.jpg"
                                    alt="Image" class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a href="#" class="cat"></a> •
                                    <span class="date"></span>
                                </div>
                                <h3><a href="#"></a></h3>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
                            <a href="#" class="thumb d-block"><img src="/assets/img/AWK_3979.jpg"
                                    alt="Image" class="img-fluid rounded"></a>

                            <div class="post-content">
                                <div class="meta">
                                    <a href="#" class="cat"></a> •
                                    <span class="date">/span>
                                </div>
                                <h3><a href="#"></a></h3>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Blog Posts Section -->

        <!-- Tabs Section -->
        <section id="tabs" class="tabs section light-background">

            <div class="container">
                <div class="row gap-x-lg-4 justify-content-between">
                    <div class="col-lg-4 js-custom-dots">
                        <a href="#" class="service-item link horizontal d-flex active" data-aos="fade-left"
                            data-aos-delay="0">
                            <div class="service-icon color-1 mb-4">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3>Cepat</h3>
                                {{-- <p>
                                    Far far away, behind the word mountains, far from the countries .
                                </p> --}}
                            </div>
                            <!-- /.service-contents-->
                        </a>
                        <!-- /.service -->

                        <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left"
                            data-aos-delay="100">
                            <div class="service-icon color-2 mb-4">
                                <i class="bi bi-bag-check"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3>Amanah</h3>
                                {{-- <p>
                                    Far far away, behind the word mountains, far from the countries .
                                </p> --}}
                            </div>
                            <!-- /.service-contents-->
                        </a>
                        <!-- /.service -->

                        <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left"
                            data-aos-delay="200">
                            <div class="service-icon color-3 mb-4">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3>Kualitas Bagus</h3>
                                {{-- <p>
                                    Far far away, behind the word mountains, far from the countries .
                                </p> --}}
                            </div>
                            <!-- /.service-contents-->
                        </a>
                        <!-- /.service -->

                        <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left"
                            data-aos-delay="300">
                            <div class="service-icon color-4 mb-4">
                                <i class="bi bi-easel"></i>
                            </div>
                            <!-- /.icon -->
                            <div class="service-contents">
                                <h3>Terpercaya</h3>
                                {{-- <p>
                                    Far far away, behind the word mountains, far from the countries .
                                </p> --}}
                            </div>
                            <!-- /.service-contents-->
                        </a>
                        <!-- /.service -->
                    </div>

                    <div class="col-lg-8">
                        <div class="swiper init-swiper-tabs">
                            <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoHeight": true,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="/assets/img/AWK_3990.jpg" alt="Image" class="img-fluid">
                                    <div class="p-4">
                                        <h3 class="text-black h5 mb-3">Awak Visual </h3>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <p>

                                                </p>
                                                <p>

                                                </p>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="list-unstyled list-check">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="/assets/img/AWK_3997.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/assets/img/AWK_4087.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/assets/img/AWK_4101.jpg" alt="Image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Tabs Section -->

        <!-- Services 2 Section -->
        <section id="services-2" class="services-2 section">


        </section><!-- /Services 2 Section -->

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>Foto Foto</p>
                <h2>Awak Visual</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-item">
                            <img src="/assets/img/AWK_4131.jpg" alt="Image" class="img-fluid">
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-item recommended">
                            <img src="/assets/img/AWK_4125.jpg" alt="Image" class="img-fluid">
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="pricing-item">
                            <img src="/assets/img/AWK_4184.jpg" alt="Image" class="img-fluid">
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>

        </section><!-- /Pricing Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section">
            <!-- Section Title -->
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-accordion" id="accordion-faq">
                            <div class="accordion-item">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-faq-1">
                                        Bagaimana cara membooking nya
                                    </button>
                                </h2>

                                <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion-faq">
                                    <div class="accordion-body">
                                        Klik saja Booking->Lalu Mengisi data data Yang diminta->
                                        jangan lupa dalam proeses bisnis transaksi nya harus membayar 50 % dari harga
                                        setiap Paket yang ada
                                    </div>
                                </div>
                            </div>
                            <!-- .accordion-item -->
                        </div>
                        <!-- .accordion-item -->

                    </div>
                </div>
            </div>
            </div>
        </section><!-- /Faq Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>Owner</p>
                <h2>Awak Visual</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial mx-auto">
                                        <figure class="img-wrap">
                                            <img src="/assets/img/testimonials/testimonials-1.jpg" alt="Image"
                                                class="img-fluid">
                                        </figure>
                                        <h3 class="name">Fadhil Husnu</h3>
                                        <blockquote>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial mx-auto">
                                        <figure class="img-wrap">
                                            <img src="/assets/img/testimonials/testimonials-2.jpg" alt="Image"
                                                class="img-fluid">
                                        </figure>
                                        <h3 class="name">Fadhil Husnu</h3>
                                        <blockquote>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial mx-auto">
                                        <figure class="img-wrap">
                                            <img src="/assets/img/testimonials/testimonials-3.jpg" alt="Image"
                                                class="img-fluid">
                                        </figure>
                                        <h3 class="name">Fadhil Husnu</h3>
                                        <blockquote>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Testimonials Section -->

    </main>

    <footer id="footer" class="footer light-background">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                    <div class="widget">
                        <h3 class="widget-heading">About Us</h3>
                        <p class="mb-4">
                            Website Pembokingan Fotografer
                        </p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">

                </div>
                <div class="col-md-6 col-lg-3 pl-lg-5">
                    <div class="widget">
                        <h3 class="widget-heading">Recent Posts</h3>
                        <ul class="list-unstyled footer-blog-entry">
                            <li>
                                <span class="d-block date">May 3, 2020</span>
                                <a href="#">Website Pembokingan </a>
                            </li>
                            <li>
                                <span class="d-block date">May 3, 2020</span>
                                <a href="#">Di kembang kan Oleh Owner Awak Visual</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pl-lg-5">
                    <div class="widget">
                        <h3 class="widget-heading">Connect</h3>
                        <ul class="list-unstyled social-icons light mb-3">
                            <li>
                                <a href="https://www.instagram.com/awakvisuals/"><span
                                        class="bi bi-instagram"></span></a>
                            </li>
                            <li>
                                <a href="082285403764"><span class="bi bi-whatsap"></span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget">

                    </div>
                </div>
            </div>

            <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
                {{-- <p>© <span>Copyright</span> <strong class="px-1 sitename">Active.</strong> <span>All Rights
                        Reserved</span></p> --}}
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a href="https://bootstrapmade.com/">Awak Visual</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
