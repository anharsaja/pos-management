<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="{{ asset('img/others/logo.jpg') }}" type="image/x-icon">

  <title>Bumbu Umik - Dari rempah pilihan, untuk rasa terbaik. </title>

  <!-- Meta Open-Graph -->
  <meta property="og:site_name" content="Bumbu Umik - Dari rempah pilihan, untuk rasa terbaik">
  <meta property="og:title" content="Website Resmi Bumbu Umik Indonesia" />
  <meta property="og:description" content="Bumbu Umik merupakan Produk Rempah-rempah untuk kuliner Indonesia" />
  <meta property="og:image" itemprop="image" content="https://github.com/andikatuluspangestu/bumbu-umik-web/blob/main/assets/img/others/bg-desktop.jpg?raw=true">
  <meta property="og:type" content="website" />

  <!-- CDN Vendors Links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.31/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">


</head>

<body>

  <header id="header">
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top">
      <div class="container py-2 pt-3">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/others/logo.jpg') }}" alt="Logo" class="d-inline-block align-text-top logo-brand">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="#products">Produk</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
            <li class="nav-item"><a class="nav-link" href="#testimonial">Testimonial</a></li>
            <li class="nav-item"><a class="nav-link" href="#call-to-action">Unggulan</a></li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control search-input ps-4" type="search" placeholder="Cari Produk... lalu ENTER" aria-label="Search">
          </form>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section id="hero" class="hero d-flex align-items-center text-center">
    </section>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12 overflow-hidden">
            <h3 class="text-lg" id="about-title"></h3>
          </div>
          <div class="col-12 col-lg-12 col-md-12">
            <p class="text-lg">Bumbu Umik merupakan produk rempah-rempah untuk kuliner Indonesia. Dibuat dengan
              bahan-bahan pilihan dan proses yang higienis, Bumbu Umik hadir untuk memenuhi kebutuhan bumbu dapur
              rumah tangga Indonesia.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="keunggulan">
      <div class="container pb-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
          <div class="col">
            <div class="card shadow-sm rounded text-center" data-aos-delay="500" data-aos="fade-right" data-aos-duration="1000">
              <img src="{{ asset('img/icons/peppers.png') }}" alt="rempah-asli">

              <br>
              <h4>Rempah Asli</h4>
              <p>
                Terbuat dari rempah-rempah asli <br> Indonesia yang berkualitas.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm rounded text-center" data-aos-delay="500" data-aos="fade-up" data-aos-duration="1000">
              <img src="{{ asset('img/icons/bibimbap.png') }}" alt="varian-rasa">

              <br>
              <h4>Varian Rasa</h4>
              <p>
                Memiliki berbagai macam varian <br> rasa yang dapat dipilih.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm rounded text-center" data-aos-delay="500" data-aos="fade-left" data-aos-duration="1000">
              <img src="{{ asset('img/icons/delivery.png') }}" alt="always-ready">

              <br>
              <h4>Ready Setiap Hari</h4>
              <p>
                Siap dikirim setiap hari <br> sesuai kebutuhan konsumen.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="products">
      <div class="container pt-3">

        <div class="row">
          <div class="col-12 mt-5 mb-3">
            <h1 class="mb-1">Produk Kami</h1>
            <p class="text-white">
              Memiliki berbagai macam varian rasa, dapat memenuhi kebutuhan konsumen akan bumbu masak yang
              berkualitas.
            </p>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">

          <!-- Product : Rawon -->
          <div class="col">
            <div class="card" data-aos="fade-up">
              <img src="{{ asset('img/products/rawon.jpeg') }}" class="card-img-top img-fluid" alt="varian-rawon">

              <div class="card-body text-start">
                <h5>Rawon</h5>
                <p class="card-text">
                  Bumbu Masak Umik varian Rawon yang khusus dibuat untuk memasak Rawon.
                </p>
              </div>
              <div class="card-footer text-start">
                <button type="button" class="btn btn-detail-product" data-bs-toggle="modal" data-bs-target="#rawon">Detail
                  Produk</button>
              </div>
            </div>

            <div class="modal fade" id="rawon" tabindex="-1" aria-labelledby="rawon" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg modal-fullscreen-lg-down modal-fullscreen-md-down modal-fullscreen-sm-down">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="{{asset('img/products/resep/rrawon.jpg')}}" class="img-fluid rounded">
                    <br>
                    <p class="product-detail text-start">
                      <strong>Bumbu Masak Umik varian Rawon</strong> yang khusus dibuat untuk memasak Rawon.
                      Rawon merupakan masakan tradisional Indonesia yang berasal dari Jawa Timur.
                    </p>
                    <div class="product-resep">
                      <table class="table table-striped p-3">
                        <thead>
                          <tr class="bg-dark">
                            <th scope="col">Bahan</th>
                            <th scope="col">Cara Memasak</th>
                          </tr>
                        </thead>
                        <tbody>
                          <td>
                            Daging sapi, bumbu masak Umik Varian Rawon, air, minyak, garam
                          </td>
                          <td class="text-start">
                            <ol>
                              <li>Panaskan minyak, tumis bumbu masak Umik Varian Rawon hingga harum.</li>
                              <li>Masukkan potongan daging sapi, aduk hingga berubah warna.</li>
                              <li>Tuangkan air, masak hingga daging empuk.</li>
                              <li>Tambahkan garam secukupnya.</li>
                              <li>Angkat dan sajikan.</li>
                            </ol>
                          </td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Product -->

          <!-- Product : Sambal Goreng -->
          <div class="col">
            <div class="card" data-aos="fade-up">
              <img src="{{ asset('img/products/sambalgoreng.jpeg') }}" class="card-img-top img-fluid" alt="varian-sambalgoreng">

              <div class="card-body text-start">
                <h5>Sambal Goreng</h5>
                <p class="card-text">
                  Bumbu Masak Umik varian yang khusus dibuat untuk memasak sambal goreng.
                </p>
              </div>
              <div class="card-footer text-start">
                <button type="button" class="btn btn-detail-product" data-bs-toggle="modal" data-bs-target="#sambalgoreng">Detail
                  Produk</button>
              </div>
            </div>

            <div class="modal fade" id="sambalgoreng" tabindex="-1" aria-labelledby="sambalgoreng" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg modal-fullscreen-lg-down modal-fullscreen-md-down modal-fullscreen-sm-down">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="{{asset('img/products/resep/rsblgoreng.jpg')}}" class="img-fluid rounded">
                    <br>
                    <p class="product-detail text-start">
                      <strong>Bumbu Masak Umik varian Sambal Goreng</strong> yang khusus dibuat untuk memasak sambal
                      goreng.
                      Sambal goreng merupakan masakan tradisional Indonesia yang berasal dari Indonesia.
                    </p>
                    <div class="product-resep">
                      <table class="table table-striped p-3">
                        <thead>
                          <tr class="bg-dark">
                            <th scope="col">Bahan</th>
                            <th scope="col">Cara Memasak</th>
                          </tr>
                        </thead>
                        <tbody>
                          <td>
                            Tempe, tahu, bumbu masak Umik Varian Sambal Goreng, air, minyak, garam
                          </td>
                          <td class="text-start">
                            <ol>
                              <li>Panaskan minyak, tumis bumbu masak Umik Varian Sambal Goreng hingga harum.</li>
                              <li>Masukkan tempe dan tahu, aduk hingga berubah warna.</li>
                              <li>Tuangkan air, masak hingga matang.</li>
                              <li>Tambahkan garam secukupnya.</li>
                              <li>Angkat dan sajikan.</li>
                            </ol>
                          </td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Product -->

          <!-- Product : Nasi Goreng -->
          <div class="col">
            <div class="card" data-aos="fade-up">
              <img src="{{ asset('img/products/nasgor.jpeg') }}" class="card-img-top img-fluid" alt="varian-nasgor">

              <div class="card-body text-start">
                <h5>Nasi Goreng</h5>
                <p class="card-text">
                  Bumbu Masak Umik varian yang khusus dibuat untuk memasak nasi goreng.
                </p>
              </div>
              <div class="card-footer text-start">
                <button type="button" class="btn btn-detail-product" data-bs-toggle="modal" data-bs-target="#nasgor">Detail
                  Produk</button>
              </div>
            </div>

            <div class="modal fade" id="nasgor" tabindex="-1" aria-labelledby="nasgor" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg modal-fullscreen-lg-down modal-fullscreen-md-down modal-fullscreen-sm-down">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="{{asset('img/products/resep/rnasgor.jpg')}}" class="img-fluid rounded">
                    <br>
                    <p class="product-detail text-start">
                      <strong>Bumbu Masak Umik varian Nasi goreng</strong> yang khusus dibuat untuk memasak nasi goreng.
                      Nasi goreng merupakan masakan tradisional Indonesia yang berasal dari Indonesia.
                    </p>
                    <div class="product-resep">
                      <table class="table table-striped p-3">
                        <thead>
                          <tr class="bg-dark">
                            <th scope="col">Bahan</th>
                            <th scope="col">Cara Memasak</th>
                          </tr>
                        </thead>
                        <tbody>
                          <td>
                            Nasi, bumbu masak Umik Varian Nasi Goreng, telur, minyak, garam
                          </td>
                          <td class="text-start">
                            <ol>
                              <li>Panaskan minyak, tumis bumbu masak Umik Varian Nasi Goreng hingga harum.</li>
                              <li>Masukkan telur, aduk hingga berubah warna.</li>
                              <li>Masukkan nasi, aduk hingga rata.</li>
                              <li>Tambahkan garam secukupnya.</li>
                              <li>Angkat dan sajikan.</li>
                            </ol>
                          </td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Product -->

          <!-- Product : Sayur Sop -->
          <div class="col">
            <div class="card" data-aos="fade-up">
              <img src="{{ asset('img/products/sop.jpeg') }}" class="card-img-top img-fluid" alt="varian-sop">

              <div class="card-body text-start">
                <h5>Sayur Sop</h5>
                <p class="card-text">
                  Bumbu Masak Umik varian yang khusus dibuat untuk memasak sayur sop.
                </p>
              </div>
              <div class="card-footer text-start">
                <button type="button" class="btn btn-detail-product" data-bs-toggle="modal" data-bs-target="#sop">Detail
                  Produk</button>
              </div>
            </div>

            <div class="modal fade" id="sop" tabindex="-1" aria-labelledby="sop" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg modal-fullscreen-lg-down modal-fullscreen-md-down modal-fullscreen-sm-down">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="{{asset('img/products/resep/rsop.jpg')}}" class="img-fluid rounded">
                    <br>
                    <p class="product-detail text-start">
                      <strong>Bumbu Masak Umik varian Sayur Sop</strong> yang khusus dibuat untuk memasak sayur sop.
                      Sayur sop merupakan masakan tradisional Indonesia yang berasal dari Indonesia.
                    </p>
                    <div class="product-resep">
                      <table class="table table-striped p-3">
                        <thead>
                          <tr class="bg-dark">
                            <th scope="col">Bahan</th>
                            <th scope="col">Cara Memasak</th>
                          </tr>
                        </thead>
                        <tbody>
                          <td>
                            Wortel, kentang, brokoli, buncis, bawang bombay, bumbu masak Umik Varian Sayur Sop, garam,
                            air
                          </td>
                          <td class="text-start">
                            <ol>
                              <li>Potong semua sayuran sesuai selera.</li>
                              <li>Panaskan sedikit minyak, tumis bawang bombay hingga harum.</li>
                              <li>Masukkan sayuran ke dalam panci.</li>
                              <li>Tambahkan air secukupnya hingga sayuran terendam.</li>
                              <li>Masukkan bumbu masak Umik Varian Sayur Sop dan garam secukupnya.</li>
                              <li>Masak hingga sayuran lunak dan rasanya sedap.</li>
                              <li>Angkat dan sajikan sayur sop dalam mangkuk.</li>
                            </ol>
                          </td>
                        </tbody>
                      </table>

                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Product -->

          <!-- Product : Opor -->
          <div class="col">
            <div class="card" data-aos="fade-up">
              <img src="{{ asset('img/products/opor.jpeg') }}" class="card-img-top img-fluid" alt="varian-opor">

              <div class="card-body text-start">
                <h5>Opor</h5>
                <p class="card-text">
                  Bumbu Masak Umik varian yang khusus dibuat untuk memasak opor.
                </p>
              </div>
              <div class="card-footer text-start">
                <button type="button" class="btn btn-detail-product" data-bs-toggle="modal" data-bs-target="#opor">Detail
                  Produk</button>
              </div>
            </div>

            <div class="modal fade" id="opor" tabindex="-1" aria-labelledby="opor" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg modal-fullscreen-lg-down modal-fullscreen-md-down modal-fullscreen-sm-down">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="{{asset('img/products/resep/ropor.jpg')}}" class="img-fluid rounded">
                    <br>
                    <p class="product-detail text-start">
                      <strong>Bumbu Masak Umik varian Opor</strong> yang khusus dibuat untuk memasak opor.
                      Opor merupakan masakan tradisional Indonesia yang berasal dari Indonesia.
                    </p>
                    <div class="product-resep">
                      <table class="table table-striped p-3">
                        <thead>
                          <tr class="bg-dark">
                            <th scope="col">Bahan</th>
                            <th scope="col">Cara Memasak</th>
                          </tr>
                        </thead>
                        <tbody>
                          <td>
                            Ayam potong, bawang putih, bawang merah, bumbu masak Umik Varian Opor, santan, garam, daun
                            salam, serai
                          </td>
                          <td class="text-start">
                            <ol>
                              <li>Potong ayam sesuai keinginan.</li>
                              <li>Tumis bawang putih dan bawang merah hingga harum.</li>
                              <li>Masukkan potongan ayam dan aduk hingga berubah warna.</li>
                              <li>Tambahkan bumbu masak Umik Varian Opor, daun salam, dan serai.</li>
                              <li>Tuang santan secukupnya hingga ayam terendam.</li>
                              <li>Masak dengan api kecil hingga ayam matang dan kuah mengental.</li>
                              <li>Tambahkan garam secukupnya sesuai selera.</li>
                              <li>Angkat dan hidangkan Opor Ayam dalam piring.</li>
                            </ol>
                          </td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Product -->

          <!-- Product : Gulai Semur -->
          <div class="col">
            <div class="card" data-aos="fade-up">
              <img src="{{ asset('img/products/gulai.jpeg') }}" class="card-img-top img-fluid" alt="varian-gulai">

              <div class="card-body text-start">
                <h5>Gule</h5>
                <p class="card-text">
                  Bumbu Masak Umik varian yang khusus dibuat untuk memasak gulai semur.
                </p>
              </div>
              <div class="card-footer text-start">
                <button type="button" class="btn btn-detail-product" data-bs-toggle="modal" data-bs-target="#gulai">Detail
                  Produk</button>
              </div>
            </div>

            <div class="modal fade" id="gulai" tabindex="-1" aria-labelledby="gulai" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg modal-fullscreen-lg-down modal-fullscreen-md-down modal-fullscreen-sm-down">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="{{asset('img/products/resep/rsemur.jpg')}}" class="img-fluid rounded">
                    <br>
                    <p class="product-detail text-start">
                      <strong>Bumbu Masak Umik varian Gulai</strong> yang khusus dibuat untuk memasak gulai atau semur.
                      Gulai merupakan masakan tradisional Indonesia yang berasal dari Indonesia.
                    </p>
                    <div class="product-resep">
                      <table class="table table-striped p-3">
                        <thead>
                          <tr class="bg-dark">
                            <th scope="col">Bahan</th>
                            <th scope="col">Cara Memasak</th>
                          </tr>
                        </thead>
                        <tbody>
                          <td>
                            Daging sapi, bawang bombay, bawang putih, bawang merah, bumbu masak Umik Varian Gulai,
                            santan, garam, daun salam, serai, minyak
                          </td>
                          <td class="text-start">
                            <ol>
                              <li>Potong daging sapi sesuai keinginan.</li>
                              <li>Tumis bawang bombay, bawang putih, dan bawang merah hingga harum.</li>
                              <li>Masukkan potongan daging sapi dan aduk hingga berubah warna.</li>
                              <li>Tambahkan bumbu masak Umik Varian Gulai, daun salam, dan serai.</li>
                              <li>Tuang santan secukupnya hingga daging terendam.</li>
                              <li>Masak dengan api kecil hingga daging sapi empuk dan kuah mengental.</li>
                              <li>Tambahkan garam secukupnya sesuai selera.</li>
                              <li>Angkat dan hidangkan Gulai Semur dalam piring.</li>
                            </ol>
                          </td>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Product -->

        </div>
    </section>

    <!-- Inspirasi -->
    <section id="inspirasi">
      <div class="container">

        <div class="row">
          <div class="col-12">
            <h3>Inspirasi Terbaru</h3>
            <p class="inspirasi-subtitle">
              Temukan inspirasi terbaru dari Bumbu Umik yang hadir untuk memenuhi kebutuhan bumbu dapur rumah tangga
              anda.
            </p>
          </div>

          <div class="row g-4">

            <div class="col-md-6 col-lg-4">
              <div class="card shadow border-0">
                <div class="card-header border-0">
                  <img src="{{asset('img/products/inspirasi/rawon.jpeg')}}" class="card-img-top img-fluid" alt="rawon">
                </div>
                <div class="card-body inspirasi-detail">
                  <p class="publish-date" id="current-date">Senin, 10 Oktober 2022</p>
                  <h5 class="title">Tips dan Trick Memasak Rawon yang Enak dan Lezat</h5>
                </div>
                <div class="card-footer inspirasi-action">
                  <a class="btn btn-primary" href="pages/artikel-1.html">Baca Selengkapnya</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card inspirasi-card shadow border-0">
                <div class="card-header">
                  <img src="{{asset('img/products/inspirasi/ayam.jpg')}}" class="card-img-top img-fluid" alt="ayam">
                </div>
                <div class="card-body inspirasi-artikel">
                  <p class="publish-date" id="current-date">
                    Selasa, 11 Januari 2022
                  </p>
                  <h5 class="title">
                    10 Rekomendasi Memilih Ayam Yang Segar
                  </h5>
                </div>
                <div class="card-footer text-start">
                  <a class="btn btn-primary" href="pages/artikel-2.html">Baca Selengkapnya</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card inspirasi-card shadow border-0">
                <div class="card-header">
                  <img src="{{asset('img/products/inspirasi/nasgorr.png')}}" class="card-img-top img-fluid" alt="nasgor">
                </div>
                <div class="card-body inspirasi-artikel">
                  <p class="publish-date" id="current-date">
                    Rabu, 11 Januari 2022
                  </p>
                  <h5 class="title">
                    Resep Membuat Nasi Goreng untuk Perayaan
                  </h5>
                </div>
                <div class="card-footer text-start">
                  <a class="btn btn-primary" href="pages/artikel-3.html">Baca Selengkapnya</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card inspirasi-card shadow border-0">
                <div class="card-header">
                  <img src="{{asset('img/products/inspirasi/telur.jpg')}}" class="card-img-top img-fluid" alt="telur">
                </div>
                <div class="card-body inspirasi-artikel">
                  <p class="publish-date" id="current-date">
                    Kamis, 11 Januari 2022
                  </p>
                  <h5 class="title">
                    Tips dan Trick Memilih Telur yang Bagus
                  </h5>
                </div>
                <div class="card-footer text-start">
                  <a class="btn btn-primary" href="pages/artikel-4.html">Baca Selengkapnya</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card inspirasi-card shadow border-0">
                <div class="card-header">
                  <img src="{{asset('img/products/inspirasi/mie.jpg')}}" class="card-img-top img-fluid" alt="mie">
                </div>
                <div class="card-body inspirasi-artikel">
                  <p class="publish-date" id="current-date">
                    Jumat, 11 Februari 2022
                  </p>
                  <h5 class="title">
                    Bahaya Mengonsumsi Mie Instant Berlebihan
                  </h5>
                </div>
                <div class="card-footer text-start">
                  <a class="btn btn-primary" href="pages/artikel-6.html">Baca Selengkapnya</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <div class="card inspirasi-card shadow border-0">
                <div class="card-header">
                  <img src="{{asset('img/products/inspirasi/hariraya.jpeg')}}" class="card-img-top img-fluid" alt="mie">
                </div>
                <div class="card-body inspirasi-artikel">
                  <p class="publish-date" id="current-date">
                    Jumat, 11 Maret 2023
                  </p>
                  <h5 class="title">
                    5 Rekomendasi Hidangan Untuk Hari Raya
                  </h5>
                </div>
                <div class="card-footer text-start">
                  <a class="btn btn-primary" href="pages/artikel-5.html">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section id="testimonial">
      <div class="container">
        <div class="testimonial-title text-center pb-3">
          <h3>Testimonial</h3>
          <p>Apa kata mereka tentang Bumbu Umik?</p>
        </div>

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">

            <!-- First People -->
            <div class="carousel-item active">
              <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 col-12">
                  <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle mb-3" src="{{ asset('img/icons/avatar-man.png') }}" alt="Testimonial 1">

                    <h3>John Doe</h3>
                    <div class="rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <p class="font-weight-light mb-0">
                      "Bumbu Umik sangat cocok untuk memasak, <br> rasanya enak dan tidak berlebihan."
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Second People -->
            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 col-12">
                  <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle mb-3" src="{{ asset('img/icons/avatar-man.png') }}" alt="Testimonial 2">

                    <h3>Hafizhulqisthi</h3>
                    <div class="rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half"></i>
                    </div>
                    <p class="font-weight-light mb-0">
                      "Banyak varian rasa yang dapat dipilih, <br> dan sangat cocok untuk memasak."
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tambahkan tombol navigasi -->
            <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>

          </div>
        </div>

        <div class="text-center mt-4">
          <button type="button" class="btn testimonial-button" data-bs-toggle="modal" data-bs-target="#ulasanModal">
            Ulasan Lainnya
          </button>
        </div>

      </div>
    </section>

    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6">
            <img class="img-fluid shadow-sm" src="{{ asset('img/others/products-photo.jpeg') }}" alt="" style="width: 100%;" data-aos="fade-right">

          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <h1>Bumbu <strong>Terlaris</strong><br> Bumbu Rawon</h1>
            <p>Bumbu Rawon milik Bumbu Umik mempunyai rasa yang kuat sehingga membuat bumbu ini rasanya sangat mirip
              dengan bumbu aslinya daripada bumbu cepat saji lainnya.
              <br><br>
              Penjualan bumbu ini menjadi terlaris dalam penjualan tiap
              bulannya karena cita rasa yang cocok di lidah orang Indonesia. Dalam proses pembuatannya, Bumbu Umik
              sengaja mencari bahan dasar yang sangat berkualitas.
            </p>
            <div class="row ecommerce">
              <div class="col-12 col-md-5">
                <a href="https://shopee.co.id/Bumbu-Umik-Bumbu-Instan-Bumbu-Dapur-Penyedap-Rasa-Makanan-65Gram-i.926276408.23419570179?sp_atk=2ac064fd-8f1b-4ef3-9e1c-7367c4fcf0a0&xptdk=2ac064fd-8f1b-4ef3-9e1c-7367c4fcf0a0" class="btn btn-danger" id="belanja-sekarang">Belanja Sekarang</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="subcribe">
      <div class="container">
        <div class="subcribe-card">
          <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-12">
              <h3 class="subcribe-title">
                Subscribe
              </h3>
              <p class="subcribe-subtitle">
                Dapatkan informasi terbaru dari produk kami dengan berlangganan email.
              </p>
            </div>
            <div class="col-lg-6 col-12">
              <form action="">
                <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="Masukkan Email Anda" aria-label="Email" aria-describedby="button-addon2">
                  <button class="btn btn-danger" type="button" id="button-addon2">
                    <i class="fas fa-paper-plane"></i> Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="kritiksaran">
      <div class="container">
        <div class="row">
          <!-- Kritik & Saran -->
          <div class="col-12 col-md-6 col-lg-6">
            <div class="row">
              <div class="col-12">
                <h1 class="text-start">Kritik dan Saran</h1>
                <p class="text-start">Kami menerima kritik dan saran dari Anda untuk meningkatkan kualitas produk kami.
                </p>
              </div>
            </div>
            <form action="">
              <div class="mb-3 col-12">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control w-100" id="nama" placeholder="Masukkan Nama Anda">
              </div>
              <div class="mb-3 col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control w-100" id="email" placeholder="Masukkan Email Anda">
              </div>
              <div class="mb-3 col-12">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control w-100" id="pesan" rows="3" placeholder="Masukkan Pesan Anda"></textarea>
              </div>
              <button type="submit" class="btn btn-md col-12">Kirim Sekarang</button>
            </form>
          </div>

          <!-- FAQ -->
          <div class="col-12 col-md-6 col-lg-6">
            <div class="container accordion-section">
              <h1 class="text-center accordion-section-title">
                Pertanyaan yang sering diajukan (FAQ)
              </h1>
              <div class="accordion" id="faqAccordion">

                <!-- Item 1 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Apa itu Bumbu Umik?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Bumbu Umik adalah bumbu masak yang dibuat untuk memasak masakan Indonesia. Memiliki berbagai macam
                      varian rasa. Dan terbuat dari bahan-bahan yang berkualitas.
                    </div>
                  </div>
                </div>

                <!-- Item 2 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      Apa Bumbu Umik dibuat dari rempah asli?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Bumbu Umik terbuat dari rempah-rempah asli Indonesia yang berkualitas, dibuktikan dengan rasa yang
                      kuat dan enak.
                    </div>
                  </div>
                </div>

                <!-- Item 3 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThird">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThird" aria-expanded="true" aria-controls="collapseThird">
                      Apakah Bumbu Umik aman untuk dikonsumsi?
                    </button>
                  </h2>
                  <div id="collapseThird" class="accordion-collapse collapse" aria-labelledby="headingThird" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Bumbu Umik aman untuk dikonsumsi karena terbuat dari bahan-bahan yang berkualitas.
                    </div>
                  </div>
                </div>

                <!-- Item 4 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFourth">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourth" aria-expanded="true" aria-controls="collapseFourth">
                      Apakah Bumbu Umik sudah memiliki sertifikat halal?
                    </button>
                  </h2>
                  <div id="collapseFourth" class="accordion-collapse collapse" aria-labelledby="headingFourth" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Bumbu Umik sudah memiliki sertifikat halal dari MUI.
                    </div>
                  </div>
                </div>

                <!-- Item 5 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFifth">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="true" aria-controls="collapseFifth">
                      Apakah Bumbu Umik sudah memiliki izin BPOM?
                    </button>
                  </h2>
                  <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      Bumbu Umik sudah memiliki izin BPOM.
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Maps -->
    <section id="maps">
      <div class="row">
        <div class="col">
          <div class="container">
            <div>
              <h1 class="maps-title">Lokasi Kami</h1>
              <p class="maps-subtitle">
                Kunjungi kami di lokasi kami untuk mendapatkan produk Bumbu Umik.
              </p>
            </div>
            <div class="maps-view">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2022084.082818483!2d112.43603593334456!3d-8.164115129689344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9e5bc48902b39%3A0x497b1c10161dd694!2sBumbu%20Umik!5e0!3m2!1sid!2sid!4v1696576389408!5m2!1sid!2sid" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps rounded shadow-sm"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
    <path fill="#44465F" fill-opacity="1" d="M0,64L48,85.3C96,107,192,149,288,181.3C384,213,480,235,576,213.3C672,192,768,128,864,117.3C960,107,1056,149,1152,170.7C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
  <footer id="footer">
    <div class="container">
      <div class="row footer-top">
        <div class="col-md-3 col-12">
          <img src="{{asset('img/others/logo.jpg')}}" alt="Logo" class="d-inline-block mb-3 align-text-top logo-brand">
          <p>
            Produk Kuliner Indonesia
          </p>
          <div class="social-icon mb-3">
            <a href="#"><i class="facebook fab fa-facebook-square"></i></a>
            <a href="#"><i class="instagram fab fa-instagram-square"></i></a>
            <a href="#"><i class="twitter fab fa-twitter-square"></i></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-6">
          <h3 class="footer-title">Tautan</h3>
          <ul class="list-unstyled">
            <li><a href="#">Beranda</a></li>
            <li><a href="#products">Produk</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#testimonial">Testimonial</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-6">
          <h3 class="footer-title">Bantuan</h3>
          <ul class="list-unstyled">
            <li><a href="#">Kebijakan Privasi</a></li>
            <li><a href="#">Syarat dan Ketentuan</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-12">
          <h3 class="footer-title">Hubungi Kami</h3>
          <ul class="list-unstyled">
            <li>
              <a href="https://api.whatsapp.com/send?phone=6281234567890&text=Halo%20Bumbu%20Umik%20Saya%20Mau%20Tanya%20Tentang%20Produk%20Anda" target="_blank">
                <i class="fab fa-whatsapp"></i> +62 812 3456 7890
              </a>
            </li>
            <li>
              <a href="mailto:bumbuumik@gmail.com" target="_blank">
                <i class="fas fa-envelope"></i> bumbuumik@gmail.com
              </a>
            </li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row copyright">
        <div class="col text-center">
          <p class="text-white">
            &copy; 2023 Bumbu Umik. All Rights Reserved.
          </p>
        </div>
      </div>
    </div>

  </footer>

  <!-- Whatsapp Modal Floating Button -->
  <div class="whatsapp-float">
    <a href="#" class="whatsapp-btn" data-bs-toggle="modal" data-bs-target="#whatsappModal">
      <i class="fab fa-whatsapp"></i>
    </a>
  </div>

  <div class="modal fade" id="whatsappModal" tabindex="-1" aria-labelledby="whatsappModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="whatsappModalLabel">Kirim Pesan WhatsApp</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="https://api.whatsapp.com/send" method="get" target="_blank">
            <input type="hidden" name="phone" value="YOUR_PHONE_NUMBER_HERE">
            <textarea name="text" class="form-control" placeholder="Tulis pesan Anda"></textarea>
            <button type="submit" class="btn btn-primary mt-3">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End WhatsApp Floating -->

  <!-- Ulasan Modal -->
  <div class="modal fade" id="ulasanModal" tabindex="-1" aria-labelledby="ulasanModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <div class="container">
            <h1 class="modal-title fs-5" id="ulasanModal">Ulasan lainnya..</h1>
          </div>
        </div>
        <div class="modal-body">
          <section class="ulasan">
            <div class="container">
              <!-- First People -->
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <!-- <div class="col-md-2">
                          <img src="/assets/img/icons/avatar-man.png" class="img avatar-image img-rounded img-fluid" />
                          <p class="text-secondary text-center">15 Minutes Ago</p>
                        </div> -->
                    <div class="col-md-12">
                      <p>
                        <strong>John Doe</strong></a>
                        <span class="float-right"><i class="text-warning far fa-star"></i></span>
                        <span class="float-right"><i class="text-warning far fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                      </p>
                      <div class="clearfix"></div>
                      <p>Bumbu Umik sangat cocok untuk memasak, <br> rasanya enak dan tidak berlebihan.</p>
                    </div>
                  </div>
                </div>
              </div>
              <br>

              <!-- Second People -->
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <!-- <div class="col-md-2">
                          <img src="/assets/img/icons/avatar-man.png" class="img avatar-image img-rounded img-fluid" />
                          <p class="text-secondary text-center">1 Hour Ago</p>
                        </div> -->
                    <div class="col-md-12">
                      <p>
                        <strong>Hafizhulqisthi</strong></a>
                        <span class="float-right"><i class="text-warning fa fa-star-half"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                      </p>
                      <div class="clearfix"></div>
                      <p>Banyak varian rasa yang dapat dipilih, <br> dan sangat cocok untuk memasak.</p>
                    </div>
                  </div>
                </div>
              </div>
              <br>

              <!-- Third People -->
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <!-- <div class="col-md-2">
                          <img src="/assets/img/icons/avatar-woman.png" class="img avatar-image img-rounded img-fluid" />
                          <p class="text-secondary text-center">5 Hours Ago</p>
                        </div> -->
                    <div class="col-md-12">
                      <p>
                        <strong>Maria Smantha</strong></a>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                      </p>
                      <div class="clearfix"></div>
                      <p>Rasanya luar biasa! <br>Bumbu Masak Umik benar-benar membuat masakan saya menjadi istimewa.
                        Rasanya
                        seperti homemade dan tentu saja tanpa bahan pengawet. Saya sangat merekomendasikannya!</p>
                    </div>
                  </div>
                </div>
              </div>
              <br>

              <!-- Fourth People -->
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <!-- <div class="col-md-2">
                          <img src="/assets/img/icons/avatar-woman.png" class="img avatar-image img-rounded img-fluid" />
                          <p class="text-secondary text-center">4 Days Ago</p>
                        </div> -->
                    <div class="col-md-12">
                      <p>
                        <strong>Lisa Cudrow</strong></a>
                        <span class="float-right"><i class="text-warning far fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                      </p>
                      <div class="clearfix"></div>
                      <p>Saya seorang pecinta masakan <br> dan Bumbu Masak Umik adalah jawaban untuk masakan istimewa
                        tanpa
                        harus
                        repot-repot mencampur bumbu sendiri. Rempah pilihan untuk rasa terbaik!</p>
                    </div>
                  </div>
                </div>
              </div>
              <br>

              <!-- Fifth People -->
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <!-- <div class="col-md-2">
                          <img src="/assets/img/icons/avatar-man.png" class="img avatar-image img-rounded img-fluid" />
                          <p class="text-secondary text-center">1 Week Ago</p>
                        </div> -->
                    <div class="col-md-12">
                      <p>
                        <strong>John Smith</strong></a>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                      </p>
                      <div class="clearfix"></div>
                      <p>Bumbu Masak Umik <br> telah memberikan sentuhan spesial pada masakan saya.</p>
                    </div>
                  </div>
                </div>
              </div>
              <br>
            </div>

            <!-- Pagination -->
            <div class="container">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link" href="#" tabindex="-1">Sebelumnya</a>
                  </li>
                  <li class="page-item"><a class="page-link active" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Selanjutnya</a>
                  </li>
                </ul>
              </nav>
            </div>
          </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn ulasan-modal-button" data-bs-dismiss="modal">Tutup Modal</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Ulasan Modal -->

  <!-- CDN Vendors Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.31/sweetalert2.min.js"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>


</body>

</html>