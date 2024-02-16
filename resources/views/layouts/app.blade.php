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

        <link rel="icon" type="image/x-icon" href="/assets/images/favicon/icon01.png">

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
        @yield('styles')
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

            @yield('content')
            
            {{-- Footer --}}
            @include('fragments.footer')
        </main>

        <!-- JavaScript -->
        <script src="/assets/js/vendors.js"></script>
        <script src="/assets/js/main.js"></script>
        <script src="/stocks/assets/dist/app.js"></script>
        <script>
            $('.elementor-button').addClass('g78');
        </script>
    </body>
</html>
