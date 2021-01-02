<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>UINSA-Fitness</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('user/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Fitness Uinsa</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Service</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Article</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        @if (Auth::check())
                            @if (!Auth::user()->hasRole('admin'))
                                <li class="nav-item"><a class="nav-link" href="{{ url('profile') }}">Profile</a></li>
                            @endif
                        <li class="nav-item"><a class="nav-link btn btn-danger" href="{{ route('logout') }}">Logout</a></li>
                        @else
                        <li class="nav-item"><a class="nav-link btn btn-primary" href="{{ url('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-info" href="{{ url('register') }}">Register</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Fitness Uinsa!</div>
                <div class="masthead-heading text-uppercase">Don't Sit Get Fit</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">LAYANAN</h2>
                </div>
                <div class="row text-center mt-5">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-address-card fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">PENDAFTARAN</h4>
                        <p class="text-muted">Lakukan pendaftaran secara online dengan mengisi formulir yang telah disediakan</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-calendar fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">PERPANJANGAN</h4>
                        <p class="text-muted">Lakukan perpanjangan secara berkala sebelum masa tenggat</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-money-bill-alt fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">PEMBAYARAN</h4>
                        <p class="text-muted">Lakukan pembayaran secara Online ataupun Offline</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Artikel</h2>
                </div>
                <div class="row">
                    @foreach ($artikel as $item)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal_{{ $item->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ $item->image_path }}" style="width: 100%; height:230px" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $item->judul }}</div>
                                <div class="portfolio-caption-subheading text-muted">{{ $item->kontent }}</div>
                            </div>
                        </div>
                        <!-- Modal 1-->
                        <div class="portfolio-modal modal fade" id="portfolioModal_{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="close-modal" data-dismiss="modal"><img src="{{ asset('user/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="modal-body">
                                                    <!-- Project Details Go Here-->
                                                    <h2 class="text-uppercase">{{ $item->judul }}</h2>
                                                    <p class="item-intro text-muted">{{ $item->kontent }}</p>
                                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="" />
                                                    <p>{{ $item->text }}</p>
                                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                        <i class="fas fa-times mr-1"></i>
                                                        Close Artikel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Team</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('user/akmal.jpg') }}" alt="" />
                            <h4>Dika Akmal</h4>
                            <p class="text-muted">Programer</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('user/wardah.jpg') }}" alt="" />
                            <h4>Luthfiah Wardah</h4>
                            <p class="text-muted">Desain</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('user/rike.jpg') }}" alt="" />
                            <h4>Rike Excella Putri</h4>
                            <p class="text-muted">Programer</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('user/zidan.jpg') }}" alt="" />
                            <h4>Zidan Catur Pamungkas</h4>
                            <p class="text-muted">Sistem Analys</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('user/luna.JPG') }}" alt="" />
                            <h4>Fedora Helau Nana</h4>
                            <p class="text-muted">Sistem Analys</p>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Developer</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                @if ($message = Session::get('success'))
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
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                </div>
                <form method="POST" action="{{ url('addPesan') }}">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" name="nama" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" name="subjek" type="text" placeholder="Subject" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" name="pesan" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © FITNESS UINSA 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        {{-- <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a> --}}
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{ asset('user/assets/mail/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('user/assets/mail/contact_me.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('user/js/scripts.js') }}"></script>
    </body>
</html>
