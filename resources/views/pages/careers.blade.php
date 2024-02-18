@extends('layouts.app')

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
                <p style="text-align: center;">No jobs currently available</p>
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
    </div>
</section>
<br><br>

@endsection