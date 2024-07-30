@extends('layouts.app')

@section('styles')
    <style>
      .cb00{
        text-align: center;
        padding: 40px;
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;

        position: relative; 
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 100px;
      }

      .cb01::before {    
        content: "";
        background-image: url('/assets/images/gb0/01.png');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        opacity: 0.15;
      }
      .cb02::before {    
        content: "";
        background-image: url('/assets/images/gb0/03.png');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        opacity: 0.15;
      }
      .cb03::before {    
        content: "";
        background-image: url('/assets/images/gb0/02.png');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        opacity: 0.15;
      }
      .cb04::before {    
        content: "";
        background-image: url('/assets/images/gb0/04.png');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        opacity: 0.15;
      }
      .cb00 h4{
        font-weight: 900;
        position: relative;
        text-align: center;
        font-size: 40px;
      }

      .lst{
        background: #dcdbce;
        padding: 20px;
        border-radius: 20px;
        margin-top: 40px;
        margin-bottom: 40px;
        margin-right: 0px;
        margin-left: 0px;
        min-height: 680px;
      }
      .lst li{
        list-style-type: disc;
        margin-bottom: 20px;
      }
    </style>
@endsection

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
    <div data-anim-child="slide-up delay-1" class="col-xl-12 col-lg-12 md:order-1 is-in-view k6p">
      <h2 class="text-62 md:text-38 uppercase fw-500">Asante Gold  <span class="text-accent-1">Corporation</span></h2>
  
      <p class="md:mt-30">Asante is a gold exploration, development and operating company with a high-quality portfolio of projects and mines in Ghana. Asante is currently operating the Bibiani and Chirano Gold Mines and continues with detailed technical studies at its Kubi Gold Project for early production.</p>
      
      <p class="mt-30 md:mt-5">
        All mines and projects are located on the prolific Bibiani and Ashanti Gold Belts.  Asante is also exploring its Keyhole, Fahiakoba, and Betenase projects 
        for new discoveries, all adjoining or along strike of major gold mines near the centre of Ghana’s Golden Triangle.
        Asante is listed on the Canadian Securities Exchange, the Ghana Stock Exchange and the Frankfurt Stock Exchange.
        We co-listed our shares on the Ghana Stock Exchange to allow a whole new group of Ghanaian investors the opportunity 
        to invest in the growth of their own local gold mining industry.
      </p>
    </div>
    {{--  --}}
    <div data-anim-child="slide-up delay-1" class="col-xl-12 col-lg-12 md:order-1 is-in-view k6p">
      <p class="mt-30 md:mt-5">
        Asante has an experienced and skilled team of mine finders, builders and operators, with extensive experience in Ghana. 
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
        These initiatives include the development of an access road to directly link the process plants and provide access for exploration along the highly mineralized Bibiani-Chirano shear zone.  
        This road will be upgraded to become a mine haul road, so that ore can be treated where most appropriate, based upon availability and mineralogy.
        Asante continues to develop opportunities to share infrastructure and realize operational cost reductions.
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

<section class="layout-pt-lg">
  <div class="container">
    <div data-anim-child="slide-up delay-1" class="col-xl-12 col-lg-12 md:order-1 is-in-view k6p">
      <h2 class="text-62 md:text-38 uppercase fw-500" style="text-align: center;">Core Values</h2>
      <br><br><br>
  
      <div class="row">
        <div class="col-md-3">

          <div class="row cb00 cb01">
            <h4 class="fw-900"><span class="text-accent-1">Safety</span></h4>
          </div>
          {{-- <div class="row lst">
            <ul>
              <li>We ensure no harm to our people, the community ofr the environment.</li>
              <li>Our people comes first and our work environment must provide physical and mental safety.</li>
              <li>We maintain correct procedures, standards and practice.</li>
              <li>We lead with the courage to assess and address situations correctly.</li>
              <li>We value importance of risk management and anyone who puts themselvesor others at risk cannot work for our business.</li>
            </ul>
          </div> --}}

        </div>
        <div class="col-md-3">

          <div class="row cb00 cb02">
            <h4 class="fw-900"><span class="text-accent-1">Ownership</span></h4>
          </div>
          {{-- <div class="row lst">
            <ul>
              <li>We act like the business is ours.</li>
              <li>We hold each other accountable for commitments and actions.</li>
              <li>We act promptly and deligently to Deliver Results.</li>
              <li>We take responsibility for our decisions and results.</li>
              <li>We demonstrate Integrity and good Ethical Behaviour at all times.</li>
            </ul>
          </div> --}}

        </div>
        <div class="col-md-3">

          <div class="row cb00 cb03">
            <h4 class="fw-900"><span class="text-accent-1">Teamwork</span></h4>
          </div>
          {{-- <div class="row lst">
            <ul>
              <li>We care for one another and collaborate with respect to achieve success.</li>
              <li>We act with trust and verify to add value.</li>
              <li>We acknowledge and celebrate our success.</li>
              <li>We are transparent and honest in our work.</li>
              <li>We communicate clearly, honestly and effectively.</li>
            </ul>
          </div> --}}

        </div>
        <div class="col-md-3">

          <div class="row cb00 cb04">
            <h4 class="fw-900"><span class="text-accent-1">Continuous Improvement</span></h4>
          </div>
          {{-- <div class="row lst">
            <ul>
              <li>We are a learning organization.</li>
              <li>We are agile and embrace change.</li>
              <li>We look beyond current practice to add value.</li>
              <li>We identify and work to exceed best practice.</li>
              <li>We demonstrate a structured approach to identify and act upon opportunities to add value.</li>
            </ul>
          </div> --}}

        </div>
      </div>
      
    </div>
  </div>

</section>

@endsection