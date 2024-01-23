@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
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
            @for ($i=0; $i < 12; $i++)
            <div class="col-lg-3 col-sm-6">
                <div class="teamCard -type-1">
                    <div class="teamCard__image ratio ratio-33:35">
                        <img src="https://placehold.co/600x400" alt="image" class="img-ratio" />
                    </div>

                    <h3 class="teamCard__title text-20 mt-20 uppercase">Executive Name</h3>
                    <div class="teamCard__job uppercase">Position</div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

@endsection