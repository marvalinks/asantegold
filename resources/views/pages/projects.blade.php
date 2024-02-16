@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Our Projects</h1>
    </div>
</section>

<section class="layout-pt-lg layout-pb-lg bg-accent-2 our-projects bg-accent-2">
    <div class="container">
        

        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20">
            @include('fragments.projects')
        </div>
    </div>
</section>
<br><br>

@endsection