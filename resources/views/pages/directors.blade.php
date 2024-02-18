@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
        <img src="/assets/images/8.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Directors</h1>
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
                        <img src="/assets/images/Executive/malik.png" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Malik Easah</h3>
                    <div class="teamCard__job uppercase">Executive Chairman</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Dave.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Dave Anthony</h3>
                    <div class="teamCard__job uppercase">President & CEO</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Alex.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Alex Heath</h3>
                    <div class="teamCard__job uppercase">Lead independent Director, Audit Committee Chair</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Bash.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Bashir Ahmed</h3>
                    <div class="teamCard__job uppercase">Director & Technical Committee Chair</div>
                </div>
            </div>
        </div>
        <div class="row y-gap-30">
        <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/douglas.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Douglas R. Macquarrie</h3>
                    <div class="teamCard__job uppercase">Director</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/carsten.png" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Carsten Korch</h3>
                    <div class="teamCard__job uppercase">Independent Director, Member of Audit Committee</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Mohammad.png" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Mohammad Alothman</h3>
                    <div class="teamCard__job uppercase">Independent Director</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Nana.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Edward Nana Yaw Koranteng</h3>
                    <div class="teamCard__job uppercase">Independent Director</div>
                </div>
            </div>
        </div>
        <div class="row y-gap-30">
        <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Roger.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Dr. Roger Norwich</h3>
                    <div class="teamCard__job uppercase">Independent Director</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Alexander.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Alexander Smirnov</h3>
                    <div class="teamCard__job uppercase">Independent Director</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection