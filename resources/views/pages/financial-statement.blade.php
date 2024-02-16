@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Financial Statement</h1>
    </div>
</section>

<section class="layout-pt-lg layout-pb-lg bg-accent-3 our-projects">
    <div class="container-fluid">
        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20" style="text-align: center;">
            <h2 class="text-62 md:text-38 uppercase fw-500"><span class="text-accent-1">Financial Reports</span></h2>
        </div>
        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20" style="text-align: center;">
            {{-- <h2 class="text-62 md:text-38 uppercase fw-500"><span class="text-accent-1">As of September, 2023</span></h2> --}}
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3">
                <div class="contactForm__field">
                  <div class="contactForm__caption">Select Year</div>

                  <div class="select js-select js-liveSearch" data-select-value="">
                    <button class="select__button js-button">
                      <span class="js-button-title">Default</span>
                      <i class="select__icon icon-chevron-down"></i>
                    </button>

                    <div class="select__dropdown js-dropdown">
                      <input type="text" placeholder="Search" class="select__search js-search">

                      <div class="select__options js-options">
                        @foreach ($years as $year)
                        <div class="select__options__button" data-value="{{$year->year}}">{{$year->year}}</div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <br>
                  <button class="button -md -dark-1 text-18 bg-accent-7 text-white" style="width: 100%;">Search</button>
                </div>
              </div>
        </div>
        <div class="row y-gap-30 justify-center pt-40 sm:pt-20 jobs">
            <div class="col-xl-10 col-lg-10">
                <div class="accordion -simple row js-accordion">
                    @foreach ($years as $key => $year)
                        
                    <div class="col-12">
                        <div class="accordion__item pt-15">
                            <div class="accordion__button pb-15 d-flex items-center kl">
                                <div class="button text-18 md:text-16 uppercase fw-500 text-dark-1">
                                    {{$year->year}}
                                </div>

                                <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                    <i class="icon-plus"></i>
                                    <i class="icon-minus-1"></i>
                                </div>
                            </div>

                            <div class="accordion__content kk">
                                <div class="pt-30 mb-15">
                                    <table>
                                        <thead>
                                            <th style="width: 92%;"></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            @forelse ($year->items as $item)
                                            <tr>
                                                <td>{{$item->name}}</td>
                                                <td>
                                                    <a href="{{$item->url}}" target="_blank" style="color: #f1d2ad;text-decoration: underline;">download</a>
                                                </td>
                                            </tr>
                                            @empty
                                                <p>No data available...</p>
                                            @endforelse
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-12">
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
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</section>
<br><br>

@endsection