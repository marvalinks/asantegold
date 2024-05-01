@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">News Coverage</h1>
    </div>
</section>
<section class="layout-pt-lg layout-pb-lg relative news-ns rxrx">
    <div class="sectionBg -mx-60 bg-accent-2 z--1"></div>

    <div class="container">
        <div class="row y-gap-30 pt-60 md:pt-30 new-section">
            <div class="col-auto">
                <h2 class="text-62 md:text-38 uppercase fw-500 hdd">
                    <span class="text-accent-1">News </span><br />
                    Coverage
                </h2>
            </div>
            
            <ul class="">
                <li>
                    <h4>Apr 30, 2024</h4>
                    <a target="_blank" href="https://www.proactiveinvestors.co.uk/companies/news/1046466/how-digbee-s-assessments-are-shaping-asante-gold-s-future-sustainability-1046466.html">
                        <h3>How Digbee's assessments are shaping Asante Gold's future sustainability</h3>
                    </a>
                </li>
            </ui>
        </div>
    </div>
</section>

@endsection