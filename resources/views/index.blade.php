<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inbound Study Abroad - International Office UINSA</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('user/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('user/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('user/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{asset('user/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{asset('user/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{asset('user/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{asset('user/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('user/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  @livewireStyles
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">io@uinsby.ac.id</a>
        <i class="icofont-phone"></i> 031-841 0298
      </div>
      <div class="social-links float-right">
        <a href="https://twitter.com/humas_uin" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://web.facebook.com/UINSBYOfficial" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/uinsa_surabaya/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://id.linkedin.com/company/uin-sunan-ampel-surabaya" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container" >

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>Study Abroad</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Faculty</a></li>
          <li class="drop-down"><a href="#">Registration</a>
            <ul>
              <li><a href="#portfolio">Registration Flow</a></li>
              <li><a href="#team">Register</a></li>
              <li><a href="#check-status">Registration Status</a></li>
            </ul>
          </li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('user/assets/img/slide/slide-1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">About <span>UINSA</span></h2>
                <p class="animated fadeInUp">The State Islamic University of Sunan Ampel, abbreviated as UIN Sunan Ampel or UINSA, is one of the public universities in Surabaya that provides higher education with a scientific paradigm of a connected twin tower model (integrated twin-towers).</p>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('user/assets/img/slide/slide-2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Vision</h2>
                <p class="animated fadeInUp">To become a superior and competitive Islamic University with international standard.</p>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('user/assets/img/slide/slide-3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Mission</h2>
                <p class="animated fadeInUp">Organizing multidisciplinary Islamic science education as well as superior and competitive science and technology. </br>
                  Developing multidisciplinary Islamic research and science and technology relevant to the needs of society. </br>
                  Developing research-based religious community empowerment patterns.</p>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="{{ asset('user/assets/img/about.jpg') }}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=QH7PWY2tBvI&feature=youtu.be&_=1" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>About Overseas Programs</h2>
              <p>This program offers you an opportunity to study at UINSA for one or two semesters and take a wide range of  undergraduate or graduate program courses. To be able to participate in this program, you do not have to be registered as a student in one of UINSA partner universities.</p>
            </div>
            <h5 class="mb-3">By joining the program, you can:</h5>
            <ol>
              <li data-aos="fade-up" data-aos-delay="100">Study at UINSA for one or two semesters</li>
              <li data-aos="fade-up" data-aos-delay="100">Take a wide range of undergraduate or graduate courses</li>
              <li data-aos="fade-up" data-aos-delay="100">Obtain credit for study at UINSA towards your home university degree</li>
              <li data-aos="fade-up" data-aos-delay="100">Enhance your educational experience as well as career opportunities</li>
              <li data-aos="fade-up" data-aos-delay="100">Make new friends and take experience in learning diverse cultures</li>
            </ol>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Lists Section ======= -->
    <section class="about-lists">
      <div class="container">
        <h2>Eligibility</h2>
        <p>In general, you must:</p>
        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
            <span>01</span>
            <h4>Have completed at least one year of full-time study at the time of application</h4>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span>02</span>
            <h4>Have Bahasa Indonesia skill (if needed)</h4>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span>03</span>
            <h4>Have achieved a minimum GPA of 3.00 or higher (on a 4-point scale, or its equivalent)</h4>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <span>04</span>
            <h4>Meet language requirements of the offered courses</h4>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>05</span>
            <h4>Be able to self-finance and pay for the tuition fee or during period of study at UINSA</h4>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="500">
            <span>06</span>
            <h4>Have overseas health insurance</h4>
          </div>

        </div>

      </div>
    </section><!-- End About Lists Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container" >

        <div class="row">

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile" style="color: #20b38e;"></i>
              <span data-toggle="counter-up">9</span>
              <p>Fakuculty</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-document-folder" style="color: #c042ff;"></i>
              <span data-toggle="counter-up">47</span>
              <p>Majority</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-live-support" style="color: #46d1ff;"></i>
              <span data-toggle="counter-up">5,463</span>
              <p>Mahasiswa</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="icofont-users-alt-5" style="color: #ffb459;"></i>
              <span data-toggle="counter-up">693</span>
              <p>Dosen</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Faculty</h2>
        </div>

        <div class="row">
          <div class="col-lg-2 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="http://pasca.uinsby.ac.id/">Pascasarjana</a></h4>
          </div>
          <div class="col-lg-2 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="http://fahum.uinsby.ac.id/">Adab Dan Humaniora</a></h4>
          </div>
          <div class="col-lg-2 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="http://fdk.uinsby.ac.id/">Dakwah Dan Komunikasi</a></h4>
          </div>
          <div class="col-lg-2 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="http://febi.uinsby.ac.id/">Ekonomi Dan Bisnis Islam</a></h4>
          </div>
          <div class="col-lg-2 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="http://fisip.uinsby.ac.id/">Ilmu Sosial Dan Ilmu Politik</a></h4>
          </div>
          <div class="col-lg-2 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="http://fpk.uinsby.ac.id/">Psikologi Dan Kesehatan</a></h4>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-2 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="http://fst.uinsby.ac.id/">Sains Dan Teknologi</a></h4>
          </div>
          <div class="col-lg-2 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="http://fish.uinsby.ac.id/">Syariah Dan Hukum</a></h4>
          </div>
          <div class="col-lg-2 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="http://ftk.uinsby.ac.id/">Tarbiyah Dan Keguruan</a></h4>
          </div>
          <div class="col-lg-2 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="http://fuf.uinsby.ac.id/">Ushuludiin dan Filsafat</a></h4>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio services section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Registration Flow</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-pen-alt-2"></i></div>
            <h4 class="title"><a href="">Register</a></h4>
            <p>Prospective international students who wish to register are required to register to fill out the registration form.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-check-circled"></i></div>
            <h4 class="title"><a href="">Check Register Status</a></h4>
            <p>After filling in the registration form, it is hoped that prospective international students will check the registration status.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-envelope-open"></i></div>
            <h4 class="title"><a href="">Check Email</a></h4>
            <p> Prospective international students who have registered are expected to check their respective emails, which contain their registration number.</p>
          </div>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Register</h2>
        </div>
        @if ($message = Session::get('success-register'))
        <div class="row">
            <div class="col mt-3">
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        </div>
        @endif
        @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

        <form action="{{ url('postRegister') }}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="row">
            <div class="col">
              <h2>Biodata</h2>
              <hr>
                <div class="form-group" data-aos="fade-up" data-aos-delay="100">
                  <label for="name">Full Name</label>
                  <input type="text" name="nama" value="{{ old('nama') }}" class="form-control">
                </div>
                <div class="form-row form-group" data-aos="fade-up" data-aos-delay="100">
                  <div class="col">
                    <label for="name">Date of birth</label>
                    <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir') }}" class="form-control">
                  </div>
                  <div class="col">
                    <label for="name">Place of birth</label>
                    <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" class="form-control">
                  </div>
                </div>
                <div class="form-group form-row" data-aos="fade-up" data-aos-delay="100">
                  <div class="col">
                    <label for="name">Passport number</label>
                    <input type="text" name="no_passport" value="{{ old('no_passport') }}" class="form-control">
                  </div>
                  <div class="col">
                    <label for="name">Country</label>
                    <input type="text" name="negara" value="{{ old('negara') }}" class="form-control">
                  </div>
                </div>
                <div class="form-group" data-aos="fade-up" data-aos-delay="100">
                  <label for="name">Address</label>
                  <input type="text" name="alamat" value="{{ old('alamat') }}" class="form-control">
                </div>
                <div class="form-group form-row" data-aos="fade-up" data-aos-delay="100">
                  <div class="col">
                    <label for="name">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control">
                  </div>
                  <div class="col">
                    <label for="name">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                  </div>
                </div>
                <div class="form-group" data-aos="fade-up" data-aos-delay="100">
                    <label for="name">Photos</label><br>
                    <input type="file" name="image" class="file-control">
                </div>
            </div>
            <div class="col-sm-5">
              <h2>Document</h2>
              <hr>
              <div class="form-group" data-aos="fade-up" data-aos-delay="100">
                <label for="name">1. Application Form</label><br>
                <input type="file" name="app_form" class="file-control">
              </div>
              <div class="form-group" data-aos="fade-up" data-aos-delay="100">
                <label for="name">2. Certificate of enrollment from your university</label><br>
                <input type="file" name="certificate_of_enrollment" class="file-control">
              </div>
              <div class="form-group" data-aos="fade-up" data-aos-delay="100">
                <label for="name">3. Certified university transcript (in English)</label><br>
                <input type="file" name="certified_university_trancript" class="file-control">
              </div>
              <div class="form-group" data-aos="fade-up" data-aos-delay="100">
                <label for="name">4. Passport</label><br>
                <input type="file" name="passport" class="file-control">
              </div>
              <div class="form-group" data-aos="fade-up" data-aos-delay="100">
                <label for="name">5. A statement of purpose (in Bahasa Indonesia/English, 500 words, explaining your purpose of study)</label><br>
                <input type="file" name="purpose" class="file-control">
              </div>
              <div class="form-group" data-aos="fade-up" data-aos-delay="100">
                <label for="name">6. Evidence of English proficiency (min. TOEFL score of 550, or iBT 80, or IELTS of 6.5)</label><br>
                <input type="file" name="evidence_of_english" class="file-control">
              </div>
            </div>
            <div class="col-sm-3">
              <h2>Submit</h2>
              <hr>
              <div class="form-group" data-aos="fade-up" data-aos-delay="100">
                <div class="card p-3" style="background-color:white; height: 200px; overflow: scroll;">
                  <h6>TERMS AND CONDITIONS</h6>
                  <p class="text-justify">Inbound Study Abroad registration issued by UINSA or available on the UINSA Inbound Study Abroad website will be governed by the Terms and Conditions of Registration. Prospective applicants must strictly comply with these Terms and Conditions, unless stated otherwise in a written statement by a legal representative of UINSA.</p>
                  <h6>Registration</h6>
                  <p class="text-justify">To register, the applicant (you) must complete the procedures provided by UINSA. After the applicant has completed the application procedures for student registration in a manner specified by UINSA and has been approved as a student candidate who meets the standards set by UINSA, UINSA will issue a student candidate number and the applicant will become a UINSA student.</p>
                  <p class="text-justify">UINSA can refuse approval of an application for registration as a UINSA student for the following reasons:</p>
                  <ol class="text-justify">
                    <li>The applicant is not registered as a corporation</li>
                    <li>The applicant has been registered</li>
                    <li>It is clear that the applicant has experienced a revocation of registration of prospective students in the past</li>
                    <li>Details of the application for registration of prospective students are incorrect</li>
                    <li>The applicant tries to transfer or sell the registration number of the student candidate or user ID or</li>
                    <li>Other matters deemed by UINSA as inappropriate to approve registration as a student candidate</li>
                    <li>UINSA will notify prospective students by facsimile or e-mail regarding the status of registration for further processing</li>
                  </ol>
                </div>
                <input type="checkbox" name="check" id="agree" class="mt-4"><span> I agree with the Terms and Conditions</span>
              </div>
              <button type="submit" class="btn btn-success" id="btn-send">Send</button>
            </div>
          </div>
        </form>

      </div>
    </section><!-- End Our Team Section -->

    <section id="check-status" class="team">
      <div class="container">
        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
          <hr>
          <h2>Check Registration Status</h2>
          <p>You can check your registration status with your registration number here</p>
        </div>
            <form action="">
              <div class="d-flex mt-3" data-aos="fade-up" data-aos-delay="100">
                <input type="text" name="nodaf" class="form-control text-center" placeholder="Registraion Number">
                <button type="submit" class="btn btn-primary ml-2">Check</button>
              </div>
            </form>
      </div>
    </section>

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>Apakah bisa Mendaftar Secara offline ?</h4>
            <p>
              Tidak bisa, karena pendaftaran dilakukan secara online
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>Bagaimana mekanisme pendaftaran mahasiswa internasional UINSA?</h4>
            <ol>
              <li>Download form aplication. Click here to download</li>
              <li>Isi form registrasi. Click here </li>
              <li>Check status pendaftaran</li>
            </ol>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Kapan saya memperoleh nomor registrasi ?</h4>
            <p>Nomor registrasi akan DIperoleh setelah berhasil melakukan aktivasi akun </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>Bagaimana jika calon mahasiswa memiliki kendala atau keluhan saat pendaftaran, ujian seleksi dan daftar ulang?</h4>
            <p>
              Calon mahasiswa dapat menghubungi hotline Admisi +031-213214235, mengirimkan keluhan ke email io@uinsby.ac.id atau bisa mengisi form pada halaman kontak kami.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>
        @if ($message = Session::get('success-contact'))
        <div class="row">
            <div class="col mt-3">
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        </div>
        @endif

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up"  >
            <div class="info-box" style="background-color:white">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Jl. Ahmad Yani No.117, Jemur Wonosari, Kec. Wonocolo, <br>Kota Surabaya, Jawa Timur 60237</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box" style="background-color:white">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>humas@uinsby.ac.id</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box" style="background-color:white">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+62 8410298<br>(031) 8410298</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="{{ url('addPesan') }}" method="post" role="form">
                @csrf
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-success">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>UINSA</h3>
            <h4>Inbound Study Abroad</h4>
            <p>Jl. Ahmad Yani No.117, Jemur Wonosari, Kec. Wonocolo<br>
              Kota Surabaya, Jawa Timur 60237<br><br></p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Faculty</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Contact</h4>
              <strong>Phone:</strong> (031) 8410298<br>
              <strong>Email:</strong> humas@uinsby.ac.id<br>
            </p>
            <div class="social-links mt-3">
                <a href="https://twitter.com/humas_uin" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="https://web.facebook.com/UINSBYOfficial" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="https://www.instagram.com/uinsa_surabaya/" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="https://id.linkedin.com/company/uin-sunan-ampel-surabaya" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>UINSA</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  @livewireScripts
  <script src="{{asset('user/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('user/assets/vendor/jquery.easing/jquery.easing.min.js ')}}"></script>
  <script src="{{asset('user/assets/vendor/php-email-form/validate.js' )}}"></script>
  <script src="{{asset('user/assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{asset('user/assets/vendor/venobox/venobox.min.js ')}}"></script>
  <script src="{{asset('user/assets/vendor/waypoints/jquery.waypoints.min.js' )}}"></script>
  <script src="{{asset('user/assets/vendor/counterup/counterup.min.js ')}}"></script>
  <script src="{{asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js' )}}"></script>
  <script src="{{asset('user/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('user/assets/js/main.js') }}"></script>

</body>

</html>
