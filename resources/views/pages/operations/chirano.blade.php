@extends('layouts.app')

@section('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Get all elements with class 'elementor-button'
        const buttons = document.querySelectorAll('.nhk');

        // Loop through each button element
        buttons.forEach(button => {
            // Add additional class to the button element
            button.classList.add('col-12');
        });
    });

  </script>
@endsection

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/Chirano.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Chirano</h1>
    </div>
</section>
<section>
    <div class="row gl-2">
        <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-4 bg-wht"></a>
        <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-4 bg-wht"></a>
        <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-4">Download Chirano Technical Report</a>
    </div>
</section>
<section class="layout-pt-lg pj">
  <div class="container">
    {{--  --}}
    <div class="tabs -type-3 js-tabs">
      <div class="tabs__controls row x-gap-10 -mobileScroll js-tabs-controls yt">
          <div class="col-auto">
              <button class="tabs__button js-tabs-button -md -dark-1 bg-accent-1 text-white col-3 is-tab-el-active" data-tab-target=".-tab-item-1">
                Introduction
              </button>
          </div>
  
          <div class="col-auto">
              <button class="tabs__button js-tabs-button -md -dark-1 bg-accent-1 text-white col-3" data-tab-target=".-tab-item-2">
                PROCESS PLANT
              </button>
          </div>
  
          <div class="col-auto">
              <button class="tabs__button js-tabs-button -md -dark-1 bg-accent-1 text-white col-3" data-tab-target=".-tab-item-3">
                RESULTS
              </button>
          </div>
      </div>
  
      <div class="tabs__content js-tabs-content">
          <div class="tabs__pane -tab-item-1 is-tab-el-active">
              <h2 class="text-accent-1">CHIRANO – BUSINESS IMPROVEMENT</h2> <br><br>
              <p>
                Increase gold production by 45% and reduce AISC by 20% by 2024
              </p>
              <br><br>
              <h2 class="text-accent-1">EXPLORATION</h2>
              <p>
                Invest $6M/y in near mine and regional exploration for years 2023, 2024, 2025 to increase LOM from 5 to >10 years
              </p>
              <br><br>
              <h2>MINE PLANNING</h2>
              <p>Utilize $1750/oz for resource & reserve calculation (from $1200/oz) – Resource upgrade and NI-43-101 update to be issued Q1 2024</p>
              <p>Mining sequence and schedule adjusted Q4 2022 to improve mill feed grade and increase tonnes milled</p>
            
              
          </div>
  
          <div class="tabs__pane -tab-item-2">
            <h2 class="text-accent-1">Process Plant</h2> <br><br>
            <p>
              Install Gravity Recovery Plant – completion November 2023
            </p> <br>
            <p>
              Install Oxygen Plant and Aachen Reactor – to improve shear of mineral surfaces & liberation of gold, increase dissolved oxygen and improve leach performance – completion November 2023
            </p> <br>
            <p>
              Increase throughput to +4 Mt/y from Q4 2023
            </p>
            

          </div>
  
          <div class="tabs__pane -tab-item-3">
            <h2 class="text-accent-1">RESULTS</h2> <br><br>
            <p>
              Gold recovery has increased from 85 to 87% and is planned to increase further, to 92% at Q1 2024 with completion of gravity recovery and oxygen plants, plus Aachen reactor and upgrade of grinding classification system
            </p> <br>
            <p>
              Mill feed grade improved from 1.38g/t  to 1.5 (Q4 2022) and is planned improve further to 1.65g/t (Q3 2023)
            </p> <br>
            <p>
              Increase gold production from 133Koz (2022) to 145Koz (2023) & +200Koz/y from 2027 
            </p> <br>
            <p>
              Reduce AISC from $1389 to $1200/oz
            </p> <br>
            <p>
              1  The Government of Ghana has 10% ownership of all mines
            </p>
          </div>
      </div>
  </div>
  
    {{--  --}}
</section>
<br><br>

@endsection