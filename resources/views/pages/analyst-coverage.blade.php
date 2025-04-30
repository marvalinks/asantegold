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
        <img src="/assets/images/8.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Analyst Coverage</h1>
    </div>
</section>
<section class="layout-pt-lg">
  <div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="row" style="margin-bottom: 50px;">
            <div class="col-md-12">
                <h2 class="text-62 md:text-38 uppercase fw-500">Analyst Coverage</h2>
            </div>
        </div>
        <br>
        <div class="row vb">
            <div class="col-md-4">
                <p>Eight Capital</p>
            </div>
            <div class="col-md-8">
                <p>Puneet Singh | <a href="mailto:psingh@viiicapital.com">psingh@viiicapital.com</a> | (647) 265-8216</p>
                <p>Jack Keating | <a href="mailto:jkeating@viiicapital.com">jkeating@viiicapital.com</a> | (647) 832-0908</p>
            </div>
        </div> <br>
        <hr>
        <!-- <div class="row vb">
            <div class="col-md-4">
                <p>Canaccord Genuity</p>
            </div>
            <div class="col-md-8">
                <p>Kevin MacKenzie, P.Geo., MBA | Analyst | <a href="mailto:kmackenzie@cgf.com">kmackenzie@cgf.com</a> | 1.604.643.7357</p>
                <p>Steve Searles | Associate | <a href="mailto:SSearles@cgf.com">SSearles@cgf.com</a> | 1.416.883.4223</p>
            </div>
        </div> <br>
        <hr> -->
        <div class="row">
            <p>
                Asante is being tracked by the research analysts mentioned. Please be aware that any assessments, estimations, or projections regarding Asante's performance made by these analysts are solely their own and do not reflect the viewpoints, forecasts, or predictions of Asante or its management. By referencing them or distributing their work, Asante does not indicate its support for or agreement with such information, conclusions, or recommendations.
            </p>
            <br><br>
            <p>
                Please note that Asante does not furnish analyst reports. Kindly reach out to the research analyst directly to acquire a report.
            </p>
        </div>
      
    </div>
  </div>
</section>
<br><br>

@endsection