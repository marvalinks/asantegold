@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">About Asante Gold Corporation</h1>
    </div>
</section>
<section class="layout-pt-lg">
  <div class="container">
    <div data-anim-child="slide-up delay-1" class="col-xl-6 col-lg-6 md:order-1 is-in-view">
      <h2 class="text-62 md:text-38 uppercase fw-500">Corporate Update Presentation</h2>
        <br><br>
      <img src="/assets/images/presentation/presentation-updated.jpg" alt="">
      <br><br>
      <a target="_blank" href="https://drive.google.com/file/d/1QeCJDRd7Mz9PUFrOtkhZFEsBb57ILJ-N/view?usp=drive_link" class="button -md -dark-1 bg-accent-1 text-white col-12">
        DOWNLOAD INVESTOR PRESENTATION
      </a>
      {{-- <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-12">
        UPDATE IN PROGRESS, TO BE RELEASED MAY 01
    </a> --}}
    </div>
  </div>

</section>
<br><br>

@endsection