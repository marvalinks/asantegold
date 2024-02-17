@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/Bibiani.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Bibiani</h1>
    </div>
</section>
<section>
    <div class="row gl-2">
        <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-3 bg-wht"></a>
        <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-3 bg-wht"></a>
        <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-3 bg-wht"></a>
        <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-3">Download Bibiani Technical Report</a>
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
                Operational Status
              </button>
          </div>
  
          <div class="col-auto">
              <button class="tabs__button js-tabs-button -md -dark-1 bg-accent-1 text-white col-3" data-tab-target=".-tab-item-3">
                Forecast production & Resource Block
              </button>
          </div>
      </div>
  
      <div class="tabs__content js-tabs-content">
          <div class="tabs__pane -tab-item-1 is-tab-el-active">
              <h2 class="text-accent-1">Ghana – Major Gold Deposits</h2>
              <ul>
                <li>Ghana has the largest gold endowment in West Africa, with over 130Moz in minable reserves. The majority of gold deposits in Ghana are located in or adjacent to the Ashanti Belt and the Bibiani-Sefwi Belt</li>
                <li>The Bibiani deposit is hosted within meta-sediments of the Kumasi-Afema basin, on the eastern margin of the Bibiani-Sefwi Belt</li>
                <li>Other world-class deposits within the Belt include:</li>
                <ul>
                  <li>Ahafo – 20 Moz(Newmont)</li>
                  <li>Chirano – 5 Moz (former Kinross)</li>
                </ul>
                <li>Paleoproterozoic Birimian Series hosts all the significant gold deposits in West Africa.</li>
              </ul>
              <h2 class="text-accent-1">Background</h2>
            <ul>
              <li>Drilling activities have been focused on the Bibiani Main Pit deposit from surface and underground positions</li>
              <li>Resolute was successful in expanding the resource base with improved confidence</li>
            </ul>
            <h2 class="text-accent-1">Drilling Campaigns Under Resolute Ownership</h2>
            <ul>
              <li>Phase 1 drilling program (26,100m DD) during 2015 (2015 Resource below)</li>
              <li>Phase 2 drilling program (23,400m DD) during 2016-2017 culminating in updated resource model (2017 Resource below)</li>
              <li>Also: Diamond drilling program at Strauss-Walsh (1,000m DD) during 2017</li>
            </ul>
            <h2 class="text-accent-1">Drilling Campaigns Under Asante Ownership</h2>
            <ul>
              <li>Phase 1 drilling program (15,000m - 20,000m DD) initiated September 2021</li>
            </ul>
              
          </div>
  
          <div class="tabs__pane -tab-item-2">
            <h2 class="text-accent-1">Operations Status</h2>
            <ul>
              <li>First gold poured July 7, 2022. Gold shipments ramp-up is progressing, to produce +250Koz/ year from 2027(with underground mining to commence 2025)</li>
              <li>Process Plant capacity will increase from 3.oMt/y to 4Mt/y by Q4 2024</li>
              <li>The open pit Mining Contractor will deliver +3 Mt/y ore to the process plant, from the open pit mines. This will increase to 4Mt/y by 2024</li>
              <li>4 stage development of the Main Pit to support mining to +/- 350m depth and +8 years operation. This will access the approximate 2.3 Moz open pit resource</li>
              <li>Underground mine planning has been initiated, to add +/- 100Koz/y from 2025 and increase LOM to +12years</li>
              <li>Exploration continues, to develop satellite deposits and extend open pit mining beyond 10 years</li>
              <li>Tailings Dam is fully reconditioned and has +12 months storage capacity. A lift to provide additional 4 years storage capacity will start Q1 2024</li>
              <li>The Bibiani NI-43-101 Technical Report was issued mid July 2022. An update will follow at Q4 2023, to capture 2022/2023 exploration and mine planning results</li>
            </ul>
            

          </div>
  
          <div class="tabs__pane -tab-item-3">
            <h2 class="text-accent-1">Bibiani Forecast Gold Production</h2>
            <p>
              Includes planned business improvement initiatives
            </p>
            <p>Underground development starts Q4 2025</p>
            <h2 class="text-accent-1">Exploration Program</h2>
            <p>BIBIANI EXPLORATION OVERVIEW</p>
            <p>MAIN PIT</p>
            <p>A substantial gold deposit:</p>
            <p>Production to date >4Moz </p>
            <p>2Moz Reserve presented in NI 43-101</p>
            <p>Mineralization is continuous to 800m below surface & at least 250m below the resource model. The geology suggests that mineralization may continue to considerable depth below historic underground workings</p>
            <p>Open along strike to North and South</p>
            <p>Near Mine exploration program has achieved significant success to date, with +120,000 oz added</p>
            <p>Several satellite pits in production or development</p>
            <p>Asante controls 53km of the Bibiani shear zone</p>
            <h2 class="text-accent-1">BIBIANI – NEAR MINE EXPLORATION PROGRAM</h2>
            <p>
              Very little regional exploration was conducted in the goldfield since the 1990’s when the Bibiani main pit became the focus.  Asante initiated the Near Mine Exploration Program in September 2021 and has achieved excellent results to date
            </p>
            <p>
              <u>Walsh</u>     2021/22 drill program has delivered +100,000oz to date
            </p>
            <p>
              <u>Grasshopper</u>    Recent drill results from Grasshopper demonstrated significant resource increase
            </p>
            <p>
              Satellite Pit mining started at Q2 2023.  Approximately 50,000oz gold will be mined, with upside potential to the north and south toward Aheman
            </p>
            <p>
              <u>Elizabeth Hill</u>     Strike extension from the main zone is currently being explored. Early drill results indicate potential for near surface ounces
            </p>
            <p>
              <u>Satellite Underground Exploration</u>     Drilling has started beneath the Walsh, Strauss and Big Mug pits to determine resource potential at depth. Additional deep drilling is planned
            </p>
            <p>
              <u>Russell South</u>     Footprint of mineralization has expanded from 200m strike initially to over 500m and remains open along strike and at depth. Drill intercepts to date confirm continuity of high-grade mineralization near surface with consistent grades and widths. Recent drill intercepts include 21.5m at 3.37g/t from 22m down hole. Russell South is expected to connect to the Russell deposit 
            </p>
          </div>
      </div>
  </div>
  
    {{--  --}}
</section>
<br><br>

@endsection