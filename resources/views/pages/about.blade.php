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
      .spolicies .button{
        margin-bottom: 13px;
      }
      .hn{
        width: 89%;
        margin: auto;
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
  
      <p class="md:mt-30">
        Asante Gold Corporation is a gold exploration, development and operating company headquartered in Vancouver, Canada. Asante owns and operates the Bibiani and Chirano Gold Mines and continues with detailed technical studies at its Kubi Gold Project for early production. All mines and projects are located on the Bibiani and Ashanti Gold Belts in the Republic of Ghana (“Ghana”). Asante is also exploring its Keyhole, Fahiakoba and Betenase projects near the centre of Ghana's Golden Triangle.
      </p>
      
      <p class="mt-30 md:mt-5">
        Asante is publicly listed on the Canadian Securities Exchange (CSE:ASE) and the Ghana Stock Exchange (GSE:ASG). The company owns 90% of both operating mines, with the Ghanaian government retaining a 10% free carried interest under Section 8 of the Ghanaian Mining Act.
      </p>
      <p class="mt-30 md:mt-5">
        Asante is committed to conducting its business operations in a socially responsible and environmentally sustainable manner, integrating ESG principles into its core business strategies. Asante has adopted the IFC Performance Standards and is guided by the ICMM Mining principles : performance expectations.
      </p>
      <p class="mt-30 md:mt-5">
        
      </p>
    </div>
    {{--  --}}
  </div>
  </div>

</section>

<section class="layout-pt-lg">
  <div class="row hn" style="margin-top: 20px;">
    <h2 style="margin-bottom: 30px;">Governance</h2>
    <div class="row spolicies">
      <div class="col-md-12">
        <div class="row">
          @foreach ($reports as $report)
          <div class="col-md-6">
            <a target="_blank" href="{{$report->url}}" class="button -md -dark-1 bg-accent-1 text-white col-12">
              {{$report->name}}
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<br><br>
<section class="layout-pt-lg">
  <div class="row hn">
    <img src="https://tt3.ams3.digitaloceanspaces.com/asante-gold/P1.jpeg" alt="">
  </div>
</section>

{{-- <section class="layout-pt-lg">
  <div class="container">
    <div data-anim-child="slide-up delay-1" class="col-xl-12 col-lg-12 md:order-1 is-in-view k6p">
      <h2 class="text-62 md:text-38 uppercase fw-500" style="text-align: center;">Core Values</h2>
      <br><br><br>
  
      <div class="row">
        <div class="col-md-3">

          <div class="row cb00 cb01">
            <h4 class="fw-900"><span class="text-accent-1">Safety</span></h4>
          </div>
          <div class="row lst">
            <ul>
              <li>We ensure no harm to our people, the community ofr the environment.</li>
              <li>Our people comes first and our work environment must provide physical and mental safety.</li>
              <li>We maintain correct procedures, standards and practice.</li>
              <li>We lead with the courage to assess and address situations correctly.</li>
              <li>We value importance of risk management and anyone who puts themselvesor others at risk cannot work for our business.</li>
            </ul>
          </div>

        </div>
        <div class="col-md-3">

          <div class="row cb00 cb02">
            <h4 class="fw-900"><span class="text-accent-1">Ownership</span></h4>
          </div>
          <div class="row lst">
            <ul>
              <li>We act like the business is ours.</li>
              <li>We hold each other accountable for commitments and actions.</li>
              <li>We act promptly and deligently to Deliver Results.</li>
              <li>We take responsibility for our decisions and results.</li>
              <li>We demonstrate Integrity and good Ethical Behaviour at all times.</li>
            </ul>
          </div>

        </div>
        <div class="col-md-3">

          <div class="row cb00 cb04">
            <h4 class="fw-900"><span class="text-accent-1">Teamwork</span></h4>
          </div>
          <div class="row lst">
            <ul>
              <li>We care for one another and collaborate with respect to achieve success.</li>
              <li>We act with trust and verify to add value.</li>
              <li>We acknowledge and celebrate our success.</li>
              <li>We are transparent and honest in our work.</li>
              <li>We communicate clearly, honestly and effectively.</li>
            </ul>
          </div>

        </div>
        <div class="col-md-3">

          <div class="row cb00 cb03">
            <h4 class="fw-900"><span class="text-accent-1">Continuous Improvement</span></h4>
          </div>
          <div class="row lst">
            <ul>
              <li>We are a learning organization.</li>
              <li>We are agile and embrace change.</li>
              <li>We look beyond current practice to add value.</li>
              <li>We identify and work to exceed best practice.</li>
              <li>We demonstrate a structured approach to identify and act upon opportunities to add value.</li>
            </ul>
          </div>

        </div>
      </div>
      
    </div>
  </div>

</section> --}}

@endsection