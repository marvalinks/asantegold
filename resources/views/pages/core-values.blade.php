@extends('layouts.app')

@section('styles')
    <style>
      .cb00{
        text-align: center;
        padding: 40px;
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 140px;

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
        background-size: 140px;
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
        background-size: 140px;
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
        background-size: 140px;
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
        background-size: 140px;
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
        font-size: 30px;
      }

      .lst{
        padding: 0px;
        margin-top: 25px;
        margin-bottom: 25px;
        margin-right: 0px;
        margin-left: 0px;
      }
      .lst li{
        list-style-type: disc;
        margin-bottom: 10px;
      }
      .layout-pt-lg {
        padding-top: 25px;
      }
      .fn-img{
        width: 85px;
      }
      .sel{
        background: #f7f0eb;
      }
      .gl-2 a {
          border: none;
      }
      .gl-2 a:hover {
          border: 1px solid #e7dfdf;
      }
      .t-center{
        text-align: center;
      }
      .box{
        width: 60%;
        margin: auto;
        border: 3px solid #b09c34;
        padding: 5px;
        height: 220px;
      }
      .f20{
        font-size: 20px;
        margin-bottom: 7px;
        margin-top: 7px;
      }
      .box p{
        line-height: 22px;
        font-size: 16px;
      }
    </style>
@endsection

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/abt.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Our Core Values</h1>
    </div>
</section>
<section style="margin-top: 30px;">
    <div class="row gl-2">
        <div class="col-md-3 cb00 cb01 {{$page == 'safety' ? 'sel' : ''}}">
            <a href="{{route('core.values', 'safety')}}">
                <h4 class="fw-900"><span class="text-accent-1">Safety</span></h4>
            </a>
        </div>
        <div class="col-md-3 cb00 cb02 {{$page == 'ownership' ? 'sel' : ''}}">
            <a href="{{route('core.values', 'ownership')}}">
                <h4 class="fw-900"><span class="text-accent-1">Ownership</span></h4>
            </a>
        </div>
        <div class="col-md-3 cb00 cb04 {{$page == 'teamwork' ? 'sel' : ''}}">
            <a href="{{route('core.values', 'teamwork')}}">
                <h4 class="fw-900"><span class="text-accent-1">Teamwork</span></h4>
            </a>
        </div>
        <div class="col-md-3 cb00 cb03 {{$page == 'continuous-improvement' ? 'sel' : ''}}">
            <a href="{{route('core.values', 'continuous-improvement')}}">
                <h4 class="fw-900"><span class="text-accent-1">Continuous Improvement</span></h4>
            </a>
        </div>
    </div>
</section>
<section class="layout-pt-lg">
  <div class="container">
    <div data-anim-child="slide-up delay-1" class="col-xl-12 col-lg-12 md:order-1 is-in-view k6p">
        @if ($page == 'safety')
        <h2 class="text-62 md:text-38 fw-500">
            <img src="/assets/images/gb0/01.png" class="fn-img">  <span class="text-accent-1">Safety</span>
        </h2>
        <div class="row lst">
            <ul>
              <li>We ensure no harm to our people, the community ofr the environment.</li>
              <li>Our people comes first and our work environment must provide physical and mental safety.</li>
              <li>We maintain correct procedures, standards and practice.</li>
              <li>We lead with the courage to assess and address situations correctly.</li>
              <li>We value importance of risk management and anyone who puts themselvesor others at risk cannot work for our business.</li>
            </ul>
        </div>
        @endif
        @if ($page == 'ownership')
        <h2 class="text-62 md:text-38 fw-500">
            <img src="/assets/images/gb0/03.png" class="fn-img">  <span class="text-accent-1">Ownership</span>
        </h2>
        <div class="row lst">
            <ul>
                <li>We act like the business is ours.</li>
                <li>We hold each other accountable for commitments and actions.</li>
                <li>We act promptly and deligently to Deliver Results.</li>
                <li>We take responsibility for our decisions and results.</li>
                <li>We demonstrate Integrity and good Ethical Behaviour at all times.</li>
            </ul>
        </div>
        @endif
        @if ($page == 'teamwork')
        <h2 class="text-62 md:text-38 fw-500">
            <img src="/assets/images/gb0/04.png" class="fn-img">  <span class="text-accent-1">Teamwork</span>
        </h2>
        <div class="row lst">
            <ul>
                <li>We care for one another and collaborate with respect to achieve success.</li>
                <li>We act with trust and verify to add value.</li>
                <li>We acknowledge and celebrate our success.</li>
                <li>We are transparent and honest in our work.</li>
                <li>We communicate clearly, honestly and effectively.</li>
            </ul>
        </div>
        @endif
        @if ($page == 'continuous-improvement')
        <h2 class="text-62 md:text-38 fw-500">
            <img src="/assets/images/gb0/02.png" class="fn-img">  <span class="text-accent-1">Continuous Improvement</span>
        </h2>
        <div class="row lst">
            <ul>
                <li>We are a learning organization.</li>
                <li>We are agile and embrace change.</li>
                <li>We look beyond current practice to add value.</li>
                <li>We identify and work to exceed best practice.</li>
                <li>We demonstrate a structured approach to identify and act upon opportunities to add value.</li>
            </ul>
        </div>
        @endif

        <div class="row lst" style="margin-top: 80px;">
          <div class="col-md-3 t-center">
            <img src="/assets/images/gb0/01.png" class="fn-img">
            <h4 class="f20">Eban</h4>
            <div class="box">
              <p><strong>Fence:</strong></p>
              <p>A symbol of safety, security and Love</p>
            </div>
          </div>
          <div class="col-md-3 t-center">
            <img src="/assets/images/gb0/03.png" class="fn-img">
            <h4 class="f20">Agyinduwura</h4>
            <div class="box">
              <p><strong>Agyin's Gong:</strong></p>
              <p>A symbol of loyalty, faithfulness, alertness and dutifulness</p>
            </div>
          </div>
          <div class="col-md-3 t-center">
            <img src="/assets/images/gb0/04.png" class="fn-img">
            <h4 class="f20">Ti koro nko agyina</h4>
            <div class="box">
              <p><strong>Two heads are better than one:</strong></p>
              <p>Emphasizing the importance of corporation and teamwork</p>
            </div>
          </div>
          <div class="col-md-3 t-center">
            <img src="/assets/images/gb0/02.png" class="fn-img">
            <h4 class="f20">Nkyinkyim</h4>
            <div class="box">
              <p><strong>Twisting:</strong></p>
              <p>Symbol of Initiative, Dynamism and LoVersatilityve</p>
            </div>
          </div>
        </div>
  
     
      
    </div>
  </div>

</section>
<br><br>

@endsection