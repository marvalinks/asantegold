@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/abt.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">About Asante Gold Corporation</h1>
    </div>
</section>
<section>
  @include('fragments.about-menu')
</section>
<section class="layout-pt-lg">
  <div class="container">
    <div data-anim-child="slide-up delay-1" class="col-xl-10 col-lg-10 md:order-1 is-in-view">
      <h2 class="text-62 md:text-38 uppercase fw-500">Asante Gold  <span class="text-accent-1">Corporation</span></h2>
  
      <p class="mt-60 md:mt-30">Asante is a gold exploration, development and operating company with a high-quality portfolio of projects and mines in Ghana.</p>
      <p class="mt-30 md:mt-5">
        Asante is currently operating the Bibiani and Chirano Gold Mines and continues with detailed technical studies at its Kubi Gold Project for early production.
      </p>
      <p class="mt-30 md:mt-5">
        All mines and projects are located on the prolific Bibiani and Ashanti Gold Belts.  Asante is also exploring its Keyhole, Fahiakoba, and Betenase projects 
        for new discoveries, all adjoining or along strike of major gold mines near the centre of Ghana’s Golden Triangle. Asante has also made a strategic investment in Roscan Gold Corporation.
      </p>
      <p class="mt-30 md:mt-5">
        Asante is listed on the Canadian Securities Exchange, the Ghana Stock Exchange and the Frankfurt Stock Exchange.
      </p>
      <p class="mt-30 md:mt-5">
        We co-listed our shares on the Ghana Stock Exchange to allow a whole new group of Ghanaian investors the opportunity 
        to invest in the growth of their own local gold mining industry.
      </p>
    </div>
    {{--  --}}
    <div data-anim-child="slide-up delay-1" class="col-xl-12 col-lg-12 md:order-1 is-in-view">
      <p class="mt-30 md:mt-5">
        Asante has an experienced and skilled team of mine finders, builders and operators, with extensive experience in Ghana. 
      </p>
      <p class="mt-30 md:mt-5">
        Our experienced team members are our most precious asset, having discovered, explored and developed more than 24Moz of gold resources and reserves in Ghana; and having managed Ghana’s largest underground mine. 
      </p>
      <ul>
        <li>- CSE: ASE</li>
        <li>- GSE: ASG</li>
        <li>- FRANKFURT: 1A9</li>
        <li>- OTC: ASGOF</li>
        <li>- LEI# 529900F9PV1G9S5YD446</li>
      </ul>
      <p class="mt-30 md:mt-5">
        Our current objective is to commence initiatives to capture synergies between our Bibiani and Chirano mines, which are situated with their process plants approximately 15 km apart.  
      </p>
      <p class="mt-30 md:mt-5">
        These initiatives include the development of an access road to directly link the process plants and provide access for exploration along the highly mineralized Bibiani-Chirano shear zone.  
      </p>
      <p class="mt-30 md:mt-5">
        This road will be upgraded to become a mine haul road, so that ore can be treated where most appropriate, based upon availability and mineralogy.
      </p>
      <p class="mt-30 md:mt-5">
        Asante continues to develop opportunities to share infrastructure and realize operational cost reductions.
      </p>
      <p class="mt-30 md:mt-5">
        Asante has recognized additional exploration upside opportunities, from near surface, and underground targets.
      </p>
    </div>
  </div>

</section>
<section class="layout-pt-lg">
  <div class="container">
    <div class="row y-gap-30 justify-between items-center">
      <div class="col-lg-6">
        <div class="ratio ratio-1:1">
          <img src="/assets/images/backgrounds/bg05.jpg" alt="image" class="img-ratio rounded-12">
        </div>
      </div>

      <div class="col-xl-5 col-lg-6">
        <h2 class="text-62 md:text-38 uppercase">
          <span class="text-accent-1">Our </span><br>
          determination
        </h2>

        <p class="text-18 md:text-16 mt-60 md:mt-20">
          At Asante Gold Corporation, we are determined to create a better world and benefit the local population. Where possible, we will use industry best practices and methods to lower our mining impact and improve total economic returns.
        </p>
        {{-- <button class="button -md -dark-1 -min-260 rounded-12 text-accent-1 border-accent-1 mt-60 md:mt-20">Explore</button> --}}
      </div>
    </div>
  </div>
</section>
<br><br>

@endsection