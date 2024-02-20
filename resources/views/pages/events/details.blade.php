@extends('layouts.app')

@section('styles')
    <style>
        .event-up h5 a:hover {
            color: #d1ba42!important;
        }
    </style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all events
        
        const events = document.querySelectorAll('.event');

        // Function to add event to calendar
        function addToCalendar(event) {
            const title = event.dataset.title;
            const start = event.dataset.start + 'T11:00:00';
            const end = event.dataset.end+ 'T11:00:00';
            const description = event.dataset.description;
            const location = event.dataset.location;

            // Your code to add event to calendar goes here
            console.log('Adding to calendar:');
            console.log('Title:', title);
            console.log('Start:', start);
            console.log('End:', end);
            console.log('Description:', description);
            console.log('Location:', location);

            
        }

        // Attach event listener to each event
        events.forEach(function(event) {
            const addToCalendarButton = event.querySelector('.add-to-calendar');
            addToCalendarButton.addEventListener('click', function() {
                addToCalendar(event);
            });
        });
    });
</script>
@endsection

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
        <img src="/assets/images/6.JPG" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">{{$event->name}}</h1>
    </div>
</section>
<section class="layout-pt-lg">
  <div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="row event-up">
            <div class="col-md-12 event" class="event" data-title="{{$event->name}}" data-start="{{$event->start_date}}" data-end="{{$event->end_date}}" data-description="{{$event->name}}" data-location="{{$event->location_str}}">
                <p>{{$event->date_str}}</p>
                <h5 class="text-accent-1">
                    <a href="#">{{$event->name}}</a>
                </h5>
                <p><small>{{$event->location_str}}</small></p>
                <div class="mt-30">
                    <a href="{{$event->url}}" target="_blank" class="button -md -outline-accent-1 text-18 text-accent-1 col-xs-12 col-md-4 add-to-calendar">
                        ADD TO CALENDAR
                    </a>
                </div>
                <br>
            </div> 
            <hr>
        </div> <br>
        <hr>
      
    </div>
  </div>
</section>
<br><br>

@endsection