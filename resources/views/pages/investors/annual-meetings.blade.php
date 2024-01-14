@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view"> Annual and Special General Meeting documents</h1>
    </div>
</section>
<section class="layout-pt-lg">
  <div class="container">
    <div class="row">
        <p class="mt-30 md:mt-5"></p>
        <ul>
            <li>Date of Meeting: <span>Wednesday, December 21, 2022</span></li>
            <li>Time of Meeting: <span>10 am Pacific</span></li>
            <li>Location of Meeting: <span>Waterfront Centre, 200 Burrard Street, Suite 1200, Vancouver, British Columbia</span></li>
        </ul>
        
    </div>
    <br><br><br>
    <div class="row gl-2">
        <h2>Click below for meeting documents</h2>
    </div>
    <br><br><br>
    <div class="row gl-2">
        <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-3">Management Information Circular</a>
        <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-3">Notice of Meeting</a>
        <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-3">Proxy Form</a>
        <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-3">Voting Information Form</a>
    </div>
    <br><br><br><br><br><br>
  </div>

</section>
<br><br>

@endsection