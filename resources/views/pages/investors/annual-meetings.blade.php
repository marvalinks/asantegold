@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view"> Annual General Meeting documents</h1>
    </div>
</section>
<section class="layout-pt-lg">
  <div class="container">
    <div class="row">
        <p class="mt-30 md:mt-5"></p>
        <ul>
            <li>Date of Meeting: <span>Tuesday, April 23, 2024</span></li>
            <li>Time of Meeting: <span>10:00 am Toronto, Canada</span></li>
            <li>Location of Meeting: <span>100 King Street West, Suite 3400, Toronto, Ontario, Canada, M5X 1A4</span></li>
        </ul>
        
    </div>
    <br><br><br>
    <div class="row gl-2">
        <h2>Click below for meeting documents</h2>
    </div>
    <br><br><br>
    <div class="row gl-2">
        <a href="https://drive.google.com/file/d/1bWohLh4rJluMMfWbV5WnSCFpjjj-bmrh/view?usp=drive_link" target="_blank" class="button -md -dark-1 bg-accent-1 text-white col-3">Management Information Circular</a>
        <a href="https://drive.google.com/file/d/1bWohLh4rJluMMfWbV5WnSCFpjjj-bmrh/view?usp=drive_link" target="_blank" class="button -md -dark-1 bg-accent-1 text-white col-3">Notice of Meeting</a>
        <a href="https://drive.google.com/file/d/1xncFB6HKg-uBQ5rKri6VOyKozex2D0eG/view?usp=drive_link" class="button -md -dark-1 bg-accent-1 text-white col-3">Proxy Form</a>
        <a href="https://drive.google.com/file/d/1r0-jLXuABji-af97LHni6Vr0RmIk2CH_/view?usp=drive_link" target="_blank" class="button -md -dark-1 bg-accent-1 text-white col-3">How To Vote</a>
    </div>
    <br><br><br><br><br><br>
  </div>

</section>
<br><br>

@endsection