@extends('layouts.app')

@section('styles')
    <style>
        .pl0{
            justify-content: center;
            align-items: baseline;
            display: flex;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        .pr p{
            font-size: 18px;
        }
    </style>
@endsection

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/1Asante-Career-scaled.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Careers</h1>
    </div>
</section>
<section class="layout-pt-lg">
    <div class="container">
        <div class="row justify-center text-center">
            <div class="col-auto">
                <h2 class="text-62 md:text-38 uppercase fw-500">
                    <span class="text-accent-1">AVAILABLE</span>
                    JOBS
                </h2>
            </div>
        </div>

        <div class="row pr y-gap-30 justify-center sm:pt-20 jobs">
            
            <div class="row justify-center md:pt-30">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="contactForm">
                        <div class="mt-30">
                            <p>
                                Asante Gold Corporation is renowned for its safe and efficient gold operations in Ghana, including production, exploration, and development. We currently have two (2) Operating mines – Bibiani and Chirano and also have an upcoming project at Kubi. Our dedication to innovation, sustainability, and success sets us apart, making us a key player in shaping the future of gold mining in Ghana and beyond.
                            </p>
                            <br>
                            <p>
                                Join us to be part of a company committed to excellence, teamwork, and positive impact in the gold mining sector.
                            </p>
                            <br>
                            <a href="https://asantegold.breezy.hr" target="_blank" class="button -md -dark-1 bg-accent-1 text-white col-12">
                                VIEW OUR OPENINGS
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>

@endsection