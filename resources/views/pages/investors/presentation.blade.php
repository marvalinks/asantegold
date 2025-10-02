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
      <img src="/assets/images/presentation/ps5.jpg" alt="">
      <br><br>
      <a target="_blank" href="https://drive.google.com/file/d/10rK3euVlyR7u98DcXD-LLp28v09UgnNY/view?usp=sharing" class="button -md -dark-1 bg-accent-1 text-white col-12">
        DOWNLOAD INVESTOR PRESENTATION
      </a>
    </div>
    <br><br>
    <hr>
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="row" style="margin-bottom: 50px;">
            <div class="col-md-12">
                <h2 class="text-62 md:text-38 uppercase fw-500">Upcoming Events</h2>
            </div>
        </div>
        <div class="row event-up">
            @foreach ($events as $event)
            <div class="col-md-12 event" class="event" data-title="{{$event->name}}" data-start="{{$event->start_date}}" data-end="{{$event->end_date}}" data-description="{{$event->name}}" data-location="{{$event->location_str}}">
                <p>{{$event->date_str}}</p>
                <h5 class="text-accent-1">
                    <a href="{{route('event.details', [$event->slug])}}">{{$event->name}}</a>
                </h5>
                <p><small>{{$event->location_str}}</small></p>
                @if ($event->url)
                <div class="mt-30">
                    <a href="{{$event->url}}" target="_blank" class="button -md -outline-accent-1 text-18 text-accent-1 col-xs-12 col-md-4 add-to-calendar">
                        ADD TO CALENDAR
                    </a>
                </div>
                @endif
                <br>
            </div> 
            <hr>
            @endforeach
            
        </div> <br>
        <hr>
      
    </div>
  </div>

</section>
<br><br>

@endsection