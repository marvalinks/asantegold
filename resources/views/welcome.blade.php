<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;display=swap" rel="stylesheet" />

        <!-- Stylesheets -->
        <link rel="stylesheet" href="/assets/css/vendors.css" />
        <link rel="stylesheet" href="/assets/css/main.css" />
        <link rel="stylesheet" href="/assets/css/override.css" />

        <title>Asante Gold</title>
        <style type="text/css" id="jarallax-clip-0">
            #jarallax-container-0 {
                clip: rect(0 1440px 860px 0);
                clip: rect(0, 1440px, 860px, 0);
            }
        </style>
        <style type="text/css" id="jarallax-clip-1">
            #jarallax-container-1 {
                clip: rect(0 1440px 860px 0);
                clip: rect(0, 1440px, 860px, 0);
            }
        </style>
    </head>

    <body style="">
        <div class="preloader js-preloader -is-hidden">
            <div class="preloader__wrap">
                <div class="preloader__icon">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_729_2673)">
                            <path d="M12.8442 10.5589L15.9802 9.39139L16.0126 31.9993C17.0681 31.9994 18.1209 31.8957 19.156 31.6895V10.56L15.999 8.7373L12.8442 10.5589Z" fill="#C29F7B"></path>
                            <path
                                d="M27.3139 4.68612C24.2917 1.66467 20.274 0 16 0C11.726 0 7.70831 1.66467 4.68612 4.68612C1.66394 7.70758 0 11.7264 0 16C0 20.2736 1.66467 24.2917 4.68612 27.3139C6.11337 28.7454 7.7991 29.8934 9.65399 30.697C10.667 31.1348 11.7232 31.4651 12.8051 31.6825V15.1386L9.6492 13.3159L6.49332 15.1367L9.63005 13.9696L9.6492 27.5326C5.5877 25.2861 2.83178 20.9598 2.83178 16C2.83178 8.73916 8.73916 2.83178 16 2.83178C23.2608 2.83178 29.1686 8.73916 29.1686 16C29.1708 19.3934 27.8585 22.6557 25.507 25.1023V15.1386L22.3501 13.3159L19.1949 15.1367L22.3309 13.9696L22.3552 30.6937C23.472 30.2099 24.5294 29.5993 25.5067 28.874C26.1465 28.3988 26.7505 27.8772 27.3139 27.3135C30.3361 24.2913 32 20.2736 32 15.9996C32 11.7256 30.3361 7.70831 27.3139 4.68612Z"
                                fill="#C29F7B"
                            ></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_729_2673">
                                <rect width="32" height="32" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>

            <div class="preloader__title">Asante Gold</div>
        </div>

        <!-- cursor start -->
        <div class="cursor js-cursor is-enabled" style="transform: translate(1014px, 4px);">
            <div class="cursor__wrapper">
                <div class="cursor__follower js-follower"></div>
                <div class="cursor__label js-label"></div>
                <div class="cursor__icon js-icon"></div>
            </div>
        </div>
        <!-- cursor end -->

        <button class="toTopButton js-top-button is-hidden">
            <i class="icon-down-arrow"></i>
        </button>

        <main>
            @include('fragments.navigation')
            @include('fragments.mobile-menu')
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
                                <span class="text-accent-1">GOLD</span><br />
                                MINES
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
                            <p>From the vibrant ground level plaza to the terraces, privategardens, balconies and lush rooftop work spaces, Costix offersan array of amenities …</p>
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
            {{-- Question --}}
            <section class="layout-pt-lg layout-pb-lg">
                <div class="container">
                    <div class="row justify-center">
                        <div class="col-lg-10">
                            <h2 class="text-center md:text-left text-62 md:text-38">
                                <div class="text-accent-1">HAVE A QUESTION?</div>
                                WE ARE GLAD TO CONSULT YOU!
                            </h2>
                        </div>
                    </div>
            
                    <div class="row justify-center pt-60 md:pt-30">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="contactForm">
                                <div class="contactForm__field">
                                    <div class="contactForm__caption">Name</div>
                                    <input type="text" />
                                </div>
            
                                <div class="contactForm__field mt-30">
                                    <div class="contactForm__caption">phone</div>
                                    <input type="text" />
                                </div>
            
                                <div class="contactForm__field mt-30">
                                    <div class="contactForm__caption">emaıl (optıonal)</div>
                                    <input type="text" />
                                </div>
            
                                <div class="mt-30">
                                    <button class="button -md -dark-1 bg-accent-1 text-white col-12">
                                        SEND REQUEST
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Footer --}}
            @include('fragments.footer')
        </main>

        <!-- JavaScript -->
        <script src="/assets/js/vendors.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>
