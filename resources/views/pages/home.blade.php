@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="/vegas/vegas.min.css">
    <style>
        .imageSliderNav{
            top: 90%;
        }
        .blogCard.-type-1 .blogCard__content{
            min-height: 370px;
        }
        #sldr{
            height: 700px;
        }
    </style>
@endsection

@section('scripts')
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="/vegas/vegas.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Get all elements with class 'elementor-button'
      const buttons = document.querySelectorAll('.tv-ticker-item-change__last');

      // Loop through each button element
      buttons.forEach(button => {
          // Add additional class to the button element
          button.classList.add('ovfgt');
      });
  });

  </script>
  <script>
    $("#sldr").vegas({
            delay: 10000,
            overlay: true,
            transition: 'fade',
            transitionDuration: 2000,
            slides: [
                { src: "https://tt3.ams3.digitaloceanspaces.com/asante-gold/6U7A6466.jpeg" },
                { src: "https://tt3.ams3.digitaloceanspaces.com/asante-gold/DJI_0008.jpeg" },
                { src: "https://tt3.ams3.digitaloceanspaces.com/asante-gold/IMG_5948-2.jpeg" },
                { src: "https://tt3.ams3.digitaloceanspaces.com/asante-gold/IMG_8808.jpeg" }
            ]
            // slides: [
            //     { src: "/assets/images/backgrounds/bg02.jpg" },
            //     { src: "/assets/images/backgrounds/bg05.jpg" },
            //     { src: "/assets/images/backgrounds/bg03.jpg" },
            //     { src: "/assets/images/backgrounds/bg04.jpg" }
            // ]
        });
  </script>
@endsection

@section('content')
{{-- @include('fragments.home-slider') --}}
<section id="sldr" class="layout-pt-lg layout-pb-lg relative news-ns rxrx"></section>

<div class="pt-100 md:pt-20 sm:pt-60 bg-dark-2 stockmg">
    <!-- TradingView Widget BEGIN -->
    {{-- <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [
                {
                    "description": "FRANKFURT EXCHANGE",
                    "proName": "FWB:1A9"
                },
                {
                    "description": "U.S.O.T.C",
                    "proName": "OTC:ASGOF"
                },
                {
                    "description": "CSE",
                    "proName": "CSE:ASE"
                }
                ],
                "showSymbolLogo": true,
                "isTransparent": false,
                "displayMode": "compact",
                "colorTheme": "dark",
                "locale": "en"
            }
        </script>
    </div> --}}
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
            {
                "symbols": [
                {
                    "description": "CSE",
                    "proName": "CSE:ASE"
                },
                {
                    "description": "U.S.O.T.C",
                    "proName": "OTC:ASGOF"
                },
                {
                    "description": "FRANKFURT EXCHANGE",
                    "proName": "FWB:1A9"
                },
                {
                    "description": "GOLD",
                    "proName": "COMEX:GC1!"
                }
                ],
                "isTransparent": false,
                "showSymbolLogo": true,
                "colorTheme": "dark",
                "locale": "en"
            }
        </script>
    </div>
    <div class="tradingview-widget-container" id="smdf">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
            {
                "symbols": [
                    {
                        "description": "FRANKFURT EXCHANGE",
                        "proName": "FWB:1A9"
                    },
                    {
                        "description": "GOLD",
                        "proName": "COMEX:GC1!"
                    }
                ],
                "isTransparent": false,
                "showSymbolLogo": true,
                "colorTheme": "dark",
                "locale": "en"
            }
        </script>
    </div>
</div>
<section class="layout-pt-lg news-ns">
    <br><br><br>
    <div class="container">
      <div data-anim-wrap="" class="row y-gap-30 justify-between animated">
        <div class="col-xl-5 col-lg-6 md:order-2">
            <div data-anim-child="slide-up delay-1" class="relative is-in-view">
              <img src="/assets/images/2.jpg" alt="image">

              <a href="https://www.youtube.com/watch?v=7N3g2xgzSkc" class="play-button bg-dark-1 text-white js-gallery" data-gallery="gallery1">
                <i class="icon-play text-30"></i>
              </a>
            </div>
        </div>

        <div data-anim-child="slide-up delay-1" class="col-xl-6 col-lg-6 md:order-1 is-in-view">
          <h2 class="text-62 md:text-38 uppercase fw-500">
            Asante <span class="text-accent-1">Gold</span> Corporation
          </h2>

          <p class="mt-60 md:mt-30 f19">
            <strong>Asante Gold Corporation is a gold production, exploration and development company with a high-quality portfolio of mines and projects in Ghana, Africa’s largest and safest gold producer.</strong>
          </p>
          <p class="mt-30 md:mt-5 f19">
            Asante is focused on operating, developing and managing gold mines and projects including the Bibiani mine, Chirano mine and Kubi development project located on the prolific Bibiani and Ashanti Gold Belts.
          </p>
        </div>
      </div>
    </div>
</section>
{{-- News --}}
<section class="layout-pt-lg layout-pb-lg relative news-ns rxrx">
    <div class="sectionBg -mx-60 bg-accent-2 z--1"></div>

    <div class="container-fluid">
        <div class="row y-gap-30 pt-60 md:pt-30 new-section">
            <div class="col-md-6">
                <div data-anim-child="slide-up delay-1" class="col-xl-12 col-lg-12 md:order-1 is-in-view">
                    <h5 class="md:text-38 uppercase fw-500" style="font-size: 35px">Corporate Update Presentation</h5>
                      <br><br>
                    <img src="/assets/images/presentation/presentation.jpg" alt="">
                    <br><br>
                    <a target="_blank" href="https://drive.google.com/file/d/1rtOv-EPgXaTcMgezuMFPShGTwSXYUtVa/view?usp=sharing" class="button -md -dark-1 bg-accent-1 text-white col-12">
                        DOWNLOAD INVESTOR PRESENTATION
                    </a>
                    {{-- <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-12">
                        UPDATE IN PROGRESS, TO BE RELEASED MAY 01
                    </a> --}}
                    <br>
                    <ul class="">
                        <li>
                            <h4>February, 2023</h4>
                            <h3> Corporate Update Presentation</h3>
                        </li>
                    </ui>
                    <a target="_blank" href="https://drive.google.com/file/d/1p-6pW731T8k8KbSUbrMb9VMNoz3k7iMW/view?usp=drive_link" class="button -md -dark-1 bg-accent-1 text-white col-12">
                      Prospect - Secondary Listing By Introduction
                    </a>
                    <br>
                    <ul class="">
                        <li>
                            <h4>29 June, 2022</h4>
                            <h3> Asante Secondary Listing By Introduction on the GSE</h3>
                        </li>
                    </ui>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-auto">
                    <h2 class="text-62 md:text-38 uppercase fw-500 hdd">
                        <span class="text-accent-1">Our Latest </span><br />
                        News
                    </h2>
                </div>
                @foreach($posts as $post)
                <ul class="">
                    <li>
                        <h4>{{\Carbon\Carbon::parse($post['date_gmt'])->toFormattedDateString()}}</h4>
                        <a href="{{route('news.releases.details', [$post['slug']])}}">
                            <h3> {{$post['title']['rendered']}}</h3>
                        </a>
                    </li>
                </ui>
                @endforeach
                <a href="{{route('news.releases')}}" class="button -md -dark-1 bg-accent-1 text-white col-12">
                    View All News
                </a>
            </div>
        </div>
    </div>
</section>
<br><br>
{{-- Projects --}}
{{-- <section class="layout-pt-lg layout-pb-lg bg-accent-2 our-projects bg-accent-2">
    <div class="container">
        <div class="row justify-between items-center">
            <div class="col-auto">
                <h2 class="text-62 md:text-38 uppercase fw-500">
                    <span class="text-accent-1">OUR</span><br />
                    PROJECTS
                </h2>
            </div>

            <div class="col-xl-6">
            </div>
        </div>

        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20">
            @include('fragments.projects')
        </div>
    </div>
</section> --}}
{{-- Gold mines --}}
<section class="layout-pt-lg mines">
    <div class="container">
        <div class="row justify-between items-center">
            <div class="col-auto">
                <h2 class="text-62 md:text-38 uppercase fw-500">
                    <span class="text-accent-1">MINING</span><br />
                    OPERATIONS
                </h2>
            </div>

            <div class="col-xl-6 md:d-none">
                {{-- <p class="">From the vibrant ground level plaza to the terraces, privategardens, balconies and lush rooftop work spaces, Costix offersan array of amenities …</p> --}}
            </div>
        </div>
    </div>

    <div class="mt-60 md:mt-40 sm:mt-20 px-60 md:px-0">
        <div
            class="relative overflow-hidden js-section-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight swiper-watch-progress swiper-backface-hidden"
            data-slider-cols="xl-2 lg-2 md-2 sm-1 base-1"
            data-gap="0"
        >
            <div class="swiper-wrapper h-auto" id="swiper-wrapper-beb109e552f566af8" aria-live="polite" style="height: 660px;">
                <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 660px;" role="group" aria-label="1 / 4">
                    <div class="imageCard -type-1">
                        <div class="imageCard__image ratio ratio-1:1">
                            <img src="/assets/images/mines/bibiani.jpg" alt="image" class="img-ratio" />
                        </div>

                        <h3 class="imageCard__title text-white">
                            <a href="{{route('operations.bibiani')}}">BIBIANI GOLD MINE</a>
                        </h3>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide-visible swiper-slide-next" style="width: 660px;" role="group" aria-label="2 / 4">
                    <div class="imageCard -type-1">
                        <div class="imageCard__image ratio ratio-1:1">
                            <img src="/assets/images/mines/chirano.jpg" alt="image" class="img-ratio" />
                        </div>

                        <h3 class="imageCard__title text-white">
                            <a href="{{route('operations.chirano')}}">CHIRANO GOLD MINE</a>
                        </h3>
                    </div>
                </div>

            </div>

            <div class="imageSliderNav">
                <button class="-prev js-prev swiper-button-disabled" disabled="" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-beb109e552f566af8" aria-disabled="true">
                    <i class="icon-left-arrow"></i>
                </button>
                <button class="-next js-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-beb109e552f566af8" aria-disabled="false">
                    <i class="icon-right-arrow"></i>
                </button>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</section>


@endsection