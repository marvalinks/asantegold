@extends('layouts.app')

@section('content')
    <section class="pageHeader -type-1 animated" data-anim-wrap="">
        <div class="pageHeader__image is-in-view" data-anim-child="fade delay-1">
            <img alt="image" src="/assets/images/backgrounds/bg06.jpg">
        </div>

        <div class="container">
            <h1 class="pageHeader__title is-in-view" data-anim-child="slide-up delay-1">News Coverage</h1>
        </div>
    </section>
    <section class="layout-pt-lg layout-pb-lg news-ns rxrx relative">
        <div class="sectionBg bg-accent-2 z--1 -mx-60"></div>

        <div class="container">
            <div class="row y-gap-30 md:pt-30 new-section pt-60">
                <div class="col-12">
                    <iframe
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen frameborder="0" frameborder="0" height="315" height="315"
                        referrerpolicy="strict-origin-when-cross-origin"
                        src="https://www.youtube.com/embed/wAzQTgGqhPs?si=Uwa8QYrhH8_rRk_5"
                        src="https://www.youtube.com/embed/wAzQTgGqhPs?si=Uwa8QYrhH8_rRk_5" title="YouTube video player"
                        title="YouTube video player" width="560" width="560"></iframe>
                </div>
                <div class="col-auto">
                    <h2 class="text-62 md:text-38 fw-500 hdd uppercase">
                        <span class="text-accent-1">News </span><br />
                        Coverage
                    </h2>
                </div>

                <ul>
                    <li>
                        <h4>Apr 30, 2024</h4>
                        <a href="https://www.proactiveinvestors.co.uk/companies/news/1046466/how-digbee-s-assessments-are-shaping-asante-gold-s-future-sustainability-1046466.html"
                            target="_blank">
                            <h3>How Digbee's assessments are shaping Asante Gold's future sustainability</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
