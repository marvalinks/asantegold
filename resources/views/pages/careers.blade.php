@extends('layouts.app')

@section('styles')
    <style>
        .pl0{
            justify-content: center;
            align-items: baseline;
            display: flex;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
@endsection

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/1Asante-Career-scaled.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Careers</h1>
    </div>
</section>
<section class="layout-pt-lg">
    <div class="container">
        <div class="row justify-center text-center">
            <div class="col-auto">
                <h2 class="text-62 md:text-38 uppercase fw-500">
                    <span class="text-accent-1">AVAILABLE</span>
                    JOBS
                </h2>
            </div>
        </div>

        <div class="row y-gap-30 justify-center pt-40 sm:pt-20 jobs">
            <div class="container">
                {{-- <p style="text-align: center;">No jobs currently available</p> --}}
                <div class="row pl0">
                    <h4 style="text-align: center;">National Service Registration</h4>
                    <br><br>
                    <img src="/assets/images/qr01.jpg" style="width: 220px;">
                    <br><br><br>
                    <p>
                        <strong>
                            Scan QR code with your phone camera to submit your NSS Application or click below link in your browser for registration
                        </strong>
                    </p>
                    <br><br>
                    <hr>
                    <p>
                        <strong>
                            <a target="_blank" href="https://forms.gle/WLfeDQ5G7wKYcpWJ7" style="color: #bfad58;"> https://forms.gle/WLfeDQ5G7wKYcpWJ7</a>
                        </strong>
                    </p>
                    <hr>
                    <br><br>
                    <p>
                        <strong>Please note the following:</strong>
                    </p>
                    
                    <ul>
                        <li>1. Before you scan or connect to the link, please ensure you have a gmail account.</li>
                        <li>2. Have a copy of your National Service appointment letter readily available to upload.</li>
                        <li>3. National Service posting submissions without attaching appointment letters will be automatically rejected.</li>
                        <li>4. The system allows for one-time submission only.</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- <div class="row y-gap-30 justify-center pt-40 sm:pt-20 jobs">
            <div class="col-xl-8 col-lg-10">
                <div class="accordion -simple row js-accordion">
                    <div class="col-12">
                        <div class="accordion__item pt-15">
                            <div class="accordion__button pb-15 d-flex items-center">
                                <div class="button text-18 md:text-16 uppercase fw-500 text-dark-1">
                                    1. Senior Security Systems Administrator <small>&nbsp;&nbsp; ( Full-time )</small>
                                </div>

                                <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                    <i class="icon-plus"></i>
                                    <i class="icon-minus-1"></i>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <div class="pt-30 mb-15">
                                    <p class="text-18 md:text-16">
                                        Responsible for the strategic planning,  design,  implementation,  and management  of  security systems infrastructure to ensure the protection of personnel, assets, and operations against potential security threats.
                                    </p>
                                    <br>
                                    <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-3">
                                        VIEW
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="accordion__item pt-15">
                            <div class="accordion__button pb-15 d-flex items-center">
                                <div class="button text-18 md:text-16 uppercase fw-500 text-dark-1">
                                    2. Risk Supervisor <small>&nbsp;&nbsp; ( Full-time )</small>
                                </div>

                                <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                    <i class="icon-plus"></i>
                                    <i class="icon-minus-1"></i>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <div class="pt-30 mb-15">
                                    <p class="text-18 md:text-16">
                                        To protect all stakeholders including staff, products and assets as well as utilize available policies, procedures and resources to conduct operations in order to meet the short and long-term safeguarding and protection demands of MGBL.
                                    </p>
                                    <br>
                                    <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-3">
                                        VIEW
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="accordion__item pt-15">
                            <div class="accordion__button pb-15 d-flex items-center">
                                <div class="button text-18 md:text-16 uppercase fw-500 text-dark-1">
                                    3. Risk Superintendent <small>&nbsp;&nbsp; ( Full-time )</small>
                                </div>

                                <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                    <i class="icon-plus"></i>
                                    <i class="icon-minus-1"></i>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <div class="pt-30 mb-15">
                                    <p class="text-18 md:text-16">
                                        To oversee and manage the security risk management programme to ensure the safety and protection of our personnel, assets, and operations against potential security threats and risks.
                                    </p>
                                    <br>
                                    <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-3">
                                        VIEW
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}

        {{-- <div class="row y-gap-30 justify-center pt-40 sm:pt-20 jobs">
            <form action="{{route('careers')}}" enctype="multipart/form-data" autocomplete="off" method="post">
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
                                <div class="contactForm__caption">Cover Letter</div>
                                <input type="file" name="cover_letter" required />
                            </div>
                            <div class="contactForm__field mt-30">
                                <div class="contactForm__caption">CV</div>
                                <input type="file" name="cv" required />
                            </div>
                            <input type="hidden" name="timestamp" value="{{ now()->timestamp }}">
                            <input type="hidden" name="ip_address" value="{{ request()->ip() }}">
        
                            <div class="mt-30">
                                <button type="submit" class="button -md -dark-1 bg-accent-1 text-white col-12">
                                    SUBMIT REQUEST
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div> --}}
    </div>
</section>
<br><br>

@endsection