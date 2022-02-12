@extends('layouts.app')

@section('content')
    <script>
        document.getElementById("header").classList.add('header-transparent');
    </script>
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!-- ======= Hero Section ======= -->


    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="10000">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Kedungwuluh</span></h2>
                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                        Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                        Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore
                        modi architecto.</p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Waspada Narkoba</h2>
                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                        Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                        Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore
                        modi architecto.</p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Cara Kerja Vaksin</h2>
                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                        Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                        Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore
                        modi architecto.</p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->
    <main id="main" class="mt-0">
        <!-- ======= Services Section ======= -->
        <section class="services" id="pelayanan">
            <div class="container">
                <div class="section-title">
                    <h2>Pelayanan</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat
                        sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row equal-cols justify-content-center">

                    <div class="col-md-6 col-lg-3 align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan" onclick="location.href='/sku';" style="cursor: pointer;">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Surat Keterangan Umum</a></h4>
                            <p class="description">Surat Keterangan Umum</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan" onclick="location.href='/sktm';" style="cursor: pointer;">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Surat Keterangan Tidak Mampu</a></h4>
                            <p class="description">Surat Keterangan Tidak Mampu</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-cyan" onclick="location.href='/skus';" style="cursor: pointer;">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Surat Keterangan Usaha</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-cyan" onclick="location.href='/spu';" style="cursor: pointer;">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Surat Pengantar Umum</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-cyan" onclick="location.href='/spck';" style="cursor: pointer;">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Surat Pengantar Catatan Kepolisian</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-pink" onclick="location.href='/lapor';" style="cursor: pointer;">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Lapor Keluhan</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                </div>
        </section><!-- End Services Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="map" class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="section-title mt-4 mb-0">
                <h2>Peta Kedungwuluh</h2>
            </div>
            <div class="text-center">
                <iframe width="900" height="600" frameborder="0" scrolling="no" allowfullscreen
                    src="https://arcg.is/1WW1un0"></iframe>
            </div>
        </section><!-- End Why Us Section -->

        {{-- <!-- ======= Features Section ======= -->
        <section class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Features</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat
                        sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="{{ url('/moderna/assets/img/features-1.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="{{ url('/moderna/assets/img/features-2.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Corporis temporibus maiores provident</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore
                            magna aliqua.
                        </p>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in
                            voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident,
                            sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="{{ url('/moderna/assets/img/features-3.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5">
                        <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                        <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit
                            aut
                            quia voluptatem hic voluptas dolor doloremque.</p>
                        <ul>
                            <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                            </li>
                            <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="{{ url('/moderna/assets/img/features-4.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore
                            magna aliqua.
                        </p>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in
                            voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident,
                            sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section --> --}}

    </main>

@endsection
