@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Operational Leadership</h1>
    </div>
</section>
<section>
    @include('fragments.about-menu')
</section>
<section class="layout-pt-lg layout-pb-lg bg-accent-2">
    <div class="container">
        <div class="row y-gap-30">
        <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                        <img src="/assets/images/Executive/eben.png" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Eben Swanepoel</h3>
                    <div class="teamCard__job uppercase">VP Technical Services & Capital Projects</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Adriano.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Adriano Sobreira</h3>
                    <div class="teamCard__job uppercase">VP Operations</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Din.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Dindiok Chialin</h3>
                    <div class="teamCard__job uppercase">Deputy Chief Financial Officer</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/walter.png" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Walter Agbey</h3>
                    <div class="teamCard__job uppercase">Group Metallurgical Manager</div>
                </div>
            </div>
        </div>
        <div class="row y-gap-30">
        <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Juliet.png" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Juliet Ofeibea Manteaw-Kutin</h3>
                    <div class="teamCard__job uppercase">General Counsel</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Stev.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Stephen Yamoah</h3>
                    <div class="teamCard__job uppercase">General Manager Chirano Mine</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Sam.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Samuel Takyi</h3>
                    <div class="teamCard__job uppercase">General Manager Bibiani Mine</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/dean.png" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Dean A. Bertram</h3>
                    <div class="teamCard__job uppercase">MD - Mensin Gold</div>
                </div>
            </div>
        </div>
        <div class="row y-gap-30">
        <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Dan.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Daniel Apau</h3>
                    <div class="teamCard__job uppercase">Manager Exploration & Resources Chirano Mine</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection