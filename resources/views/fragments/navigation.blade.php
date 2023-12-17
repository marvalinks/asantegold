<header class="header -type-5 js-header">
    <div data-anim="fade delay-3" class="header__container is-in-view">
        <div class="header__left">
            <div class="headerMenu">
                <div class="headerMenu__item">
                    <a href="{{route('about')}}">ABOUT</a>

                    <div class="headerMenuSubnav">
                        <div class="headerMenuSubnav__item">
                            <a href="#">About Asante Gold Corporation</a>
                        </div>
                        <div class="headerMenuSubnav__item">
                            <a href="#">Executive Team</a>
                        </div>
                        <div class="headerMenuSubnav__item">
                            <a href="#">Governance & Board of Directors</a>
                        </div>
                    </div>
                </div>

                <div class="headerMenu__item">
                    <a href="#">OPERATIONS</a>

                    <div class="headerMenuSubnav">
                        <div class="headerMenuSubnav__item">
                            <a href="#">Bibiani Gold Mine</a>
                        </div>
                        <div class="headerMenuSubnav__item">
                            <a href="#">Chirano Gold Mine</a>
                        </div>
                        <div class="headerMenuSubnav__item">
                            <a href="#">Our Projects</a>
                        </div>
                    </div>
                </div>

                <div class="headerMenu__item">
                    <a href="#">SUSTAINABILITY</a>

                    <div class="headerMenuSubnav">
                        <div class="headerMenuSubnav__item">
                            <a href="#">ESTMA Reports</a>
                        </div>
                    </div>
                </div>

                <div class="headerMenu__item">
                    <a href="#">NEWS & INVESTOR</a>

                    <div class="headerMenuSubnav">
                        <div class="headerMenuSubnav__item">
                            <a href="#">Annual And Special General Meeting</a>
                        </div>
                        <div class="headerMenuSubnav__item">
                            <a href="#">News Releases</a>
                        </div>
                        <div class="headerMenuSubnav__item">
                            <a href="#">Presentation</a>
                        </div>
                        <div class="headerMenuSubnav__item">
                            <a href="#">Share Structure</a>
                        </div>
                        <div class="headerMenuSubnav__item">
                            <a href="#">Stock Information</a>
                        </div>
                        <div class="headerMenuSubnav__item">
                            <a href="#">Financial Statements</a>
                        </div>
                        <div class="headerMenuSubnav__item">
                            <a href="#">Analyst Coverage</a>
                        </div>
                    </div>
                </div>

                

                
            </div>
        </div>

        <div class="header__center">
            <a href="{{route('home')}}" class="header__logo">
                <img src="/assets/images/logo/logo-asante.png" alt="logo icon" class="logo" />
                <img src="/assets/images/logo/logo-asante.png" alt="logo icon" class="logo" />
            </a>
        </div>

        <div class="header__right">
            <div class="headerMenu__item xl:d-none">
                <a href="#">MEDIA</a>

                <div class="headerMenuSubnav">
                    <div class="headerMenuSubnav__item">
                        <a href="#">Image Gallery</a>
                    </div>
                    <div class="headerMenuSubnav__item">
                        <a href="#">Video Gallery</a>
                    </div>
                    <div class="headerMenuSubnav__item">
                        <a href="#">Events</a>
                    </div>
                    <div class="headerMenuSubnav__item">
                        <a href="#">Media Activities</a>
                    </div>
                </div>
            </div>
            <div class="headerMenu__item xl:d-none">
                <a href="{{route('careers')}}">CAREERS</a>
            </div>
            <div class="headerMenu__item xl:d-none">
                <a href="{{route('contactus')}}">CONTACT US</a>
            </div>

            <div class="header__number xl:d-none">
                <a href="#">+233 303 972 147</a>
            </div>

            <button class="header__menuBtn js-menu-button">
                <i></i>
                <span>MENU</span>
            </button>

            {{-- <button class="button -md -outline-white text-white lg:d-none js-toggle-requestForm">
                Request a viewing
            </button> --}}
        </div>
    </div>
</header>