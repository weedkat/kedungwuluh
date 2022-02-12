@extends('layouts.app')

@section('content')
    <style>
        p {
            text-align: justify;
        }

    </style>
    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Peta Kelurahan Kedungwuluh</h2>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li><a href="">Blog</a></li>
                        <li>Peta</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Blog Single Section ======= -->
        <section id="map" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="entries">
                    <div class="section-title mt-4 mb-0">
                        <h2>Peta Kelurahan Kedungwuluh</h2>
                    </div>
                    <div class="text-center">
                        <iframe width="900" height="600" frameborder="0" scrolling="no" allowfullscreen
                            src="https://arcg.is/1WW1un0"></iframe>
                    </div>
                </div>
        </section><!-- End Features Section -->
        </div>
        </section><!-- End Blog Single Section -->
    </main><!-- End #main -->
@endsection
