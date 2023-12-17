@extends('layouts.app')

@section('content')
@include('fragments.home-slider')

<div class="pt-100 md:pt-20 sm:pt-60 bg-dark-2"></div>
<section class="layout-pt-lg">
    <div class="container">
      <div data-anim-wrap="" class="row y-gap-30 justify-between animated">
        <div class="col-xl-5 col-lg-6 md:order-2">
          <div data-anim-child="slide-up delay-3" class="relative is-in-view">
            <img src="/assets/images/backgrounds/bg06.jpg" alt="image">

            <button class="play-button bg-dark-1 text-white">
              <i class="icon-play text-30"></i>
            </button>
          </div>
        </div>

        <div data-anim-child="slide-up delay-1" class="col-xl-6 col-lg-6 md:order-1 is-in-view">
          <h2 class="text-62 md:text-38 uppercase fw-500">
            Asante <span class="text-accent-1">Gold</span> Corporation
          </h2>

          <p class="mt-60 md:mt-30">
            Asante is a gold exploration, development and operating company with a high-quality portfolio of projects and mines in Ghana.
          </p>
          <p class="mt-30 md:mt-5">
            Asante is currently operating the Bibiani and Chirano Gold Mines and continues with detailed technical studies at its Kubi Gold Project for early production.
          </p>
          <p class="mt-30 md:mt-5">
            All mines and projects are located on the prolific Bibiani and Ashanti Gold Belts.  Asante is also exploring its Keyhole, Fahiakoba, and Betenase projects for new discoveries, all adjoining or along strike of major gold mines near the centre of Ghana’s Golden Triangle. Asante has also made a strategic investment in Roscan Gold Corporation.
          </p>
        </div>
      </div>
    </div>
</section>
<br><br>
{{-- Projects --}}
<section class="layout-pt-lg layout-pb-lg bg-accent-2 our-projects">
    <div class="container">
        <div class="row justify-between items-center">
            <div class="col-auto">
                <h2 class="text-62 md:text-38 uppercase fw-500">
                    <span class="text-accent-1">OUR</span><br />
                    PROJECTS
                </h2>
            </div>

            <div class="col-xl-6">
                {{-- <p class="">From the vibrant ground level plaza to the terraces, privategardens, balconies and lush rooftop work spaces, Costix offersan array of amenities …</p> --}}
            </div>
        </div>

        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20">
            <div class="col-xl-4 col-md-6">
                <a href="#" class="imageCard -type-2 hover-btn-explore">
                    <div class="imageCard__image relative ratio ratio-45:40">
                        <img src="/assets/images/projects/aboduabo.jpg" alt="image" class="img-ratio" />

                        <div class="hover-btn-explore__item">
                            <button class="button text-white bg-dark-1 size-120 fw-500 rounded-full">Explore</button>
                        </div>
                    </div>

                    <h3 class="imageCard__title text-dark-1">Aboduabo</h3>
                    <p class="imageCard__text text-dark-1">
                        <a href="#">View project</a>
                    </p>
                </a>
            </div>

            <div class="col-xl-4 col-md-6">
                <a href="#" class="imageCard -type-2 hover-btn-explore">
                    <div class="imageCard__image relative ratio ratio-45:40">
                        <img src="/assets/images/projects/kubi.jpg" alt="image" class="img-ratio" />

                        <div class="hover-btn-explore__item">
                            <button class="button text-white bg-dark-1 size-120 fw-500 rounded-full">Explore</button>
                        </div>
                    </div>

                    <h3 class="imageCard__title text-dark-1">kubi</h3>
                    <p class="imageCard__text text-dark-1">
                        <a href="#">View project</a>
                    </p>
                </a>
            </div>

            <div class="col-xl-4 col-md-6">
                <a href="#" class="imageCard -type-2 hover-btn-explore">
                    <div class="imageCard__image relative ratio ratio-45:40">
                        <img src="/assets/images/projects/keyhole.jpg" alt="image" class="img-ratio" />

                        <div class="hover-btn-explore__item">
                            <button class="button text-white bg-dark-1 size-120 fw-500 rounded-full">Explore</button>
                        </div>
                    </div>

                    <h3 class="imageCard__title text-dark-1">keyhole</h3>
                    <p class="imageCard__text text-dark-1">
                        <a href="#">View project</a>
                    </p>
                </a>
            </div>

            <div class="col-xl-4 col-md-6">
                <a href="#" class="imageCard -type-2 hover-btn-explore">
                    <div class="imageCard__image relative ratio ratio-45:40">
                        <img src="/assets/images/projects/betenase.jpg" alt="image" class="img-ratio" />

                        <div class="hover-btn-explore__item">
                            <button class="button text-white bg-dark-1 size-120 fw-500 rounded-full">Explore</button>
                        </div>
                    </div>

                    <h3 class="imageCard__title text-dark-1">betenase</h3>
                    <p class="imageCard__text text-dark-1">
                        <a href="#">View project</a>
                    </p>
                </a>
            </div>

            <div class="col-xl-4 col-md-6">
                <a href="#" class="imageCard -type-2 hover-btn-explore">
                    <div class="imageCard__image relative ratio ratio-45:40">
                        <img src="/assets/images/projects/fahiakoba.jpg" alt="image" class="img-ratio" />

                        <div class="hover-btn-explore__item">
                            <button class="button text-white bg-dark-1 size-120 fw-500 rounded-full">Explore</button>
                        </div>
                    </div>

                    <h3 class="imageCard__title text-dark-1">fahiakoba</h3>
                    <p class="imageCard__text text-dark-1">
                        <a href="#">View project</a>
                    </p>
                </a>
            </div>

            <div class="col-xl-4 col-md-6">
                <a href="#" class="imageCard -type-2 hover-btn-explore">
                    <div class="imageCard__image relative ratio ratio-45:40">
                        <img src="/assets/images/projects/ashanti-ii-project.jpg" alt="image" class="img-ratio" />

                        <div class="hover-btn-explore__item">
                            <button class="button text-white bg-dark-1 size-120 fw-500 rounded-full">Explore</button>
                        </div>
                    </div>

                    <h3 class="imageCard__title text-dark-1">ashanti ii project</h3>
                    <p class="imageCard__text text-dark-1">
                        <a href="#">View project</a>
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>
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
                            <a href="#">BIBIANI GOLD MINE</a>
                        </h3>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide-visible swiper-slide-next" style="width: 660px;" role="group" aria-label="2 / 4">
                    <div class="imageCard -type-1">
                        <div class="imageCard__image ratio ratio-1:1">
                            <img src="/assets/images/mines/chirano.jpg" alt="image" class="img-ratio" />
                        </div>

                        <h3 class="imageCard__title text-white">
                            <a href="#">CHIRANO GOLD MINE</a>
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
{{-- News --}}
<section class="layout-pt-lg layout-pb-lg relative">
    <div class="sectionBg -mx-60 bg-accent-2 z--1"></div>

    <div class="container">
        <div class="row justify-between items-center">
            <div class="col-auto">
                <h2 class="text-62 md:text-38 uppercase fw-500">
                    <span class="text-accent-1">Our Latest </span><br />
                    News
                </h2>
            </div>

            <div class="col-xl-6 md:d-none">
                {{-- <p>From the vibrant ground level plaza to the terraces, privategardens, balconies and lush rooftop work spaces, Costix offersan array of amenities …</p> --}}
            </div>
        </div>

        <div class="row y-gap-30 pt-60 md:pt-30">
            <div data-anim="slide-up delay-1" class="col-lg-4 col-md-6 is-in-view">
                <a href="blog-single.html" class="blogCard -type-1">
                    <div class="blogCard__content px-40 py-40 md:px-30 md:py-30">
                        <div>
                            <div class="blogCard__tag">NEWS</div>
                            <h3 class="blogCard__title">
                                THE DIFFERENT TYPES OF<br />
                                LUXURY SPACES
                            </h3>
                        </div>

                        <div class="blogCard__date">
                            <div>17</div>
                            <div>NOV</div>
                            {{-- <p class="imageCard__text text-dark-1">
                                <a href="#">Download Press Release</a>
                            </p> --}}
                        </div>
                    </div>
                </a>
            </div>

            <div data-anim="slide-up delay-2" class="col-lg-4 col-md-6 is-in-view">
                <a href="blog-single.html" class="blogCard -type-1">
                    <div class="blogCard__content px-40 py-40 md:px-30 md:py-30">
                        <div>
                            <div class="blogCard__tag">NEWS</div>
                            <h3 class="blogCard__title">
                                HOW IS THE CONSTRUCTION OF<br />
                                SKY PARK RESIDENCES GOING?
                            </h3>
                        </div>

                        <div class="blogCard__date">
                            <div>24</div>
                            <div>NOV</div>
                        </div>
                    </div>
                </a>
            </div>

            <div data-anim="slide-up delay-3" class="col-lg-4 col-md-6 is-in-view">
                <a href="blog-single.html" class="blogCard -type-1">
                    <div class="blogCard__content px-40 py-40 md:px-30 md:py-30">
                        <div>
                            <div class="blogCard__tag">NEWS</div>
                            <h3 class="blogCard__title">
                                CONSTRUCTION OF SKY PARK<br />
                                RESIDENCES PROCEEDS ACCORDING<br />
                                TO SCHEDULE
                            </h3>
                        </div>

                        <div class="blogCard__date">
                            <div>12</div>
                            <div>NOV</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection