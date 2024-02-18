@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/8.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">management</h1>
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
                    <img src="/assets/images/Executive/Dave.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Dave Anthony</h3>
                    <div class="teamCard__job uppercase">President & CEO</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/Fred.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Frederick Attakumah</h3>
                    <div class="teamCard__job uppercase">Executive Vice President & Country Director</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                    <img src="/assets/images/Executive/David.jpg" alt="image" class="img-ratio">
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">David Wiens</h3>
                    <div class="teamCard__job uppercase">Chief Financial Officer</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
