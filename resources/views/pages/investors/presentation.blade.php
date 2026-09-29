@extends('layouts.app')

@section('content')
    <section class="pageHeader -type-1 animated" data-anim-wrap="">
        <div class="pageHeader__image is-in-view" data-anim-child="fade delay-1">
            <img alt="image" src="/assets/images/backgrounds/bg06.jpg">
        </div>

        <div class="container">
            <h1 class="pageHeader__title is-in-view" data-anim-child="slide-up delay-1">Presentations and Events </h1>
        </div>
    </section>
    <section class="layout-pt-lg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 is-in-view md:order-1" data-anim-child="slide-up delay-1">
                    <h2 class="text-62 md:text-38 fw-500 uppercase">Presentation</h2>
                    <br><br>
                    <img alt="" src="/assets/images/presentation/ps3.jpg">
                    <br><br>
                    <a class="button -md -dark-1 bg-accent-1 col-12 text-white"
                        href="https://drive.google.com/file/d/1viaqfKqxKdffy6PdbSiEsO0GrqHgQl1p/view" target="_blank">
                        DOWNLOAD INVESTOR PRESENTATION
                    </a>
                </div>
                <!-- <div class="col-xl-6 col-lg-6 is-in-view md:order-1" data-anim-child="slide-up delay-1">
            <h2 class="text-62 md:text-38 fw-500 uppercase">Q2 FY2026 Earnings Webcast</h2>
              <br><br>
            <img alt="" src="/assets/images/presentation/ps5.jpg">
            <br><br>
            <h4 class="md:text-38 fw-500 uppercase" style="font-size: 23px;">Q2 FY2026 Earnings Webcast</h4>
            <a class="button -md -dark-1 bg-accent-1 col-12 text-white" href="https://view.knowledgevision.com/presentation/99cbdadfa7954ead8e2e03f4a8229ef9" target="_blank">
              Watch Q2 FY2026 Earnings Webcast
            </a>
          </div> -->
            </div>
            <!-- <br><br>
        <hr> -->
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-md-12">
                        <h2 class="text-62 md:text-38 fw-500 uppercase">Upcoming Events</h2>
                    </div>
                </div>
                <div class="row event-up">
                    @foreach ($events as $event)
                        <div class="col-md-12 event" data-description="{{ $event->name }}"
                            data-end="{{ $event->end_date }}" data-location="{{ $event->location_str }}"
                            data-start="{{ $event->start_date }}" data-title="{{ $event->name }}">

                            <p>{{ $event->date_str }}</p>

                            <h5 class="text-accent-1">
                                <a href="{{ route('event.details', [$event->slug]) }}">
                                    {{ $event->name }}
                                </a>
                            </h5>

                            <p><small>{{ $event->location_str }}</small></p>

                            @if ($event->url)
                                <div class="mt-30">
                                    <a class="button -md -outline-accent-1 text-18 text-accent-1 col-xs-12 col-md-4 add-to-calendar"
                                        href="{{ $event->url }}" target="_blank">
                                        ADD TO CALENDAR
                                    </a>
                                </div>
                            @endif

                            <br>
                            <hr>
                        </div>
                    @endforeach
                </div>
                {{ $events->links('vendor.pagination.view-more') }}


                <hr>

            </div>
        </div>

    </section>
    <br><br>
@endsection
