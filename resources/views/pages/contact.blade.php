@extends('layouts.app')

@section('content')
<section class="layout-pt-lg layout-pb-lg bg-dark-1">
    <div data-anim-wrap="" class="container layout-pt-lg animated">
        <div class="row y-gap-30">
            <div data-anim-child="slide-left delay-1" class="col-lg-6 col-md-6 is-in-view">
                <h3 class="text-44 md:text-30 uppercase fw-500 text-white">
                    <span class="text-accent-1">HEAD</span><br />
                    OFFICE
                </h3>

                <h4 class="fw-500 text-15 text-dark-4 mt-20">ADDRESS</h4>
                <p class="fw-500 text-white">
                    Suite 615-800 West Pender Street<br />
                    V6C 2V6 <br>
                    Vancouver - Canada
                </p>

                <h4 class="fw-500 text-15 text-dark-4 mt-20">PHONE</h4>
                <p class="fw-500 text-white">
                    (+1) 604 558 1134
                </p>

                <h4 class="fw-500 text-15 text-dark-4 mt-20">E-mail</h4>
                <p class="fw-500 text-white">
                    info@asantegold.com
                </p>
            </div>

            <div data-anim-child="slide-left delay-2" class="col-lg-6 col-md-6 is-in-view">
                <h3 class="text-44 md:text-30 uppercase fw-500 text-white">
                    <span class="text-accent-1">GHANA</span><br />
                    OFFICE
                </h3>

                <h4 class="fw-500 text-15 text-dark-4 mt-20">ADDRESS</h4>
                <p class="fw-500 text-white">
                    17 Jungle Avenue<br />
                    East Legon <br>
                    Accra - Ghana
                </p>

                <h4 class="fw-500 text-15 text-dark-4 mt-20">PHONE</h4>
                <p class="fw-500 text-white">
                    (+233) 303 972 147
                </p>

                <h4 class="fw-500 text-15 text-dark-4 mt-20">E-mail</h4>
                <p class="fw-500 text-white">
                    info@asantegold.com
                </p>
            </div>

            
        </div>
    </div>
</section>
{{-- Maps --}}
<div class="mapSection -hover bg-dark-1">
    <img src="/assets/img/tabs/4/map.png" alt="image">

    <div class="mapSection__markers">

      <div class="mapSectionMarker">
        <div data-cursor="" class="mapSectionMarker__dot"></div>

        <div class="mapSectionMarker__hover">
          <div>Head Office</div>
        </div>
      </div>

      <div class="mapSectionMarker">
        <div data-cursor="" class="mapSectionMarker__dot"></div>

        <div class="mapSectionMarker__hover">
          <div>Ghana Office</div>
        </div>
      </div>

      
      </div>

    </div>
</div>
{{-- Questions --}}
<section class="layout-pt-lg layout-pb-lg bg-accent-2 bg-white">
    <div class="container">
        <div class="row justify-center">
            <div class="col-lg-10">
                <h2 class="text-center text-62 md:text-30">
                    <span class="text-accent-1">GET IN</span>
                    TOUCH !
                </h2>
            </div>
        </div>

        <form action="{{route('contactus')}}" method="post">
            @csrf
            <div class="row justify-center pt-60 md:pt-30">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="contactForm">
                        <div class="contactForm__field">
                            <div class="contactForm__caption">Name</div>
                            <input type="text" name="name" required/>
                        </div>
    
                        <div class="contactForm__field mt-30">
                            <div class="contactForm__caption">email</div>
                            <input type="text" name="email" required />
                        </div>
                        <div class="contactForm__field mt-30">
                            <div class="contactForm__caption">subject</div>
                            <input type="text" name="subject" required />
                        </div>
    
                        <div class="contactForm__field mt-30">
                            <div class="contactForm__caption">message</div>
                            <input type="text" name="message" required />
                        </div>
                        <input type="hidden" name="timestamp" value="{{ now()->timestamp }}">
                        <input type="hidden" name="ip_address" value="{{ request()->ip() }}">
    
                        <div class="mt-30">
                            <button type="submit" class="button -md -dark-1 bg-accent-1 text-white col-12">
                                SEND REQUEST
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection