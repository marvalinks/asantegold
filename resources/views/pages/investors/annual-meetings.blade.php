@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view"> Shareholder Meeting documents</h1>
    </div>
</section>
<section class="layout-pt-lg">
  <div class="container">
    <div class="row">
        <p class="mt-30 md:mt-5"></p>
        <ul>
            <li>Date of Meeting: <span>Tuesday, October 21, 2025</span></li>
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
        <a href="https://drive.google.com/file/d/1ciW9JJ1ca8D9l1P5znsHf57mEN397zd_/view?usp=drive_link" target="_blank" class="button -md -dark-1 bg-accent-1 text-white col-3">Management Information Circular</a>
        <a href="https://drive.google.com/file/d/1CrUw64oHJHwIO7kbZNu6HfRoqw4JAJxT/view?usp=drive_link" target="_blank" class="button -md -dark-1 bg-accent-1 text-white col-3">Notice of Meeting</a>
        <a href="https://drive.google.com/file/d/1zRXpK1i7g_WrsttBP6suYWsk0UtP1zvw/view?usp=drive_link" class="button -md -dark-1 bg-accent-1 text-white col-3">Proxy Form</a>
        <a href="https://drive.google.com/file/d/1959hXrFTWpKAxgvRlBI1zI0AV2laBzsh/view?usp=drive_link" target="_blank" class="button -md -dark-1 bg-accent-1 text-white col-3">How To Vote</a>
    </div>
    <br><br><br><br><br><br>
  </div>

</section>
<br><br>

@endsection