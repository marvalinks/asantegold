@extends('layouts.app')

@section('styles')
    <style>
        .event-up h5 a:hover {
            color: #d1ba42!important;
        }
    </style>
@endsection


@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
        <img src="/assets/images/8.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Video Media</h1>
    </div>
</section>
<section class="layout-pt-lg layout-pb-lg">
    <div class="container">
        <div class="tabs js-tabs">
            <div class="row y-gap-20 justify-between items-end">
                <div class="col-auto">
                    <h2 class="text-62 md:text-38 uppercase fw-500">
                        <span class="text-accent-1">Video</span><br />
                        Media
                    </h2>
                </div>

                {{-- <div class="col-auto">
                    <div class="tabs__controls d-flex x-gap-10 -mobileScroll js-tabs-controls">
                        <button class="tabs__button -base-active button -md uppercase fw-500 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">
                            Sustainability
                        </button>

                        <button class="tabs__button -base-active button -md uppercase fw-500 js-tabs-button" data-tab-target=".-tab-item-2">
                            Projects
                        </button>
                    </div>
                </div> --}}
            </div>

            <div data-anim-wrap="" class="tabs__content pt-60 md:pt-30 js-tabs-content animated">
                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <div class="row y-gap-30">
                        @foreach ($medias as $key => $media)
                            
                        <div data-anim-child="slide-up delay-{{$key+1}}" class="col-xl-4 col-md-6 is-in-view">
                            <iframe width="420" height="345" src="{{$media->url}}">
                            </iframe>
                        </div>
                        @endforeach
                        
                    </div>
                </div>

                <div class="tabs__pane -tab-item-2">
                    <div class="row y-gap-30">
                        <div data-anim-child="slide-up delay-1" class="col-xl-4 col-md-6 is-in-view">
                            <a href="#" class="imageCard -type-2 hover-btn-explore">
                                <div class="imageCard__image relative ratio ratio-45:40 mb-0">
                                    <img src="img/imageSlider/2/1.png" alt="image" class="img-ratio" />

                                    <div class="hover-btn-explore__item">
                                        <button class="button text-white bg-dark-1 size-120 fw-500 rounded-full">View</button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div data-anim-child="slide-up delay-2" class="col-xl-4 col-md-6 is-in-view">
                            <a href="#" class="imageCard -type-2 hover-btn-explore">
                                <div class="imageCard__image relative ratio ratio-45:40 mb-0">
                                    <img src="img/imageSlider/2/2.png" alt="image" class="img-ratio" />

                                    <div class="hover-btn-explore__item">
                                        <button class="button text-white bg-dark-1 size-120 fw-500 rounded-full">View</button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div data-anim-child="slide-up delay-3" class="col-xl-4 col-md-6 is-in-view">
                            <a href="#" class="imageCard -type-2 hover-btn-explore">
                                <div class="imageCard__image relative ratio ratio-45:40 mb-0">
                                    <img src="img/imageSlider/2/3.png" alt="image" class="img-ratio" />

                                    <div class="hover-btn-explore__item">
                                        <button class="button text-white bg-dark-1 size-120 fw-500 rounded-full">View</button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div data-anim-child="slide-up delay-4" class="col-xl-4 col-md-6 is-in-view">
                            <a href="#" class="imageCard -type-2 hover-btn-explore">
                                <div class="imageCard__image relative ratio ratio-45:40 mb-0">
                                    <img src="img/imageSlider/2/4.png" alt="image" class="img-ratio" />

                                    <div class="hover-btn-explore__item">
                                        <button class="button text-white bg-dark-1 size-120 fw-500 rounded-full">View</button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div data-anim-child="slide-up delay-5" class="col-xl-4 col-md-6 is-in-view">
                            <a href="#" class="imageCard -type-2 hover-btn-explore">
                                <div class="imageCard__image relative ratio ratio-45:40 mb-0">
                                    <img src="img/imageSlider/2/5.png" alt="image" class="img-ratio" />

                                    <div class="hover-btn-explore__item">
                                        <button class="button text-white bg-dark-1 size-120 fw-500 rounded-full">View</button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div data-anim-child="slide-up delay-6" class="col-xl-4 col-md-6 is-in-view">
                            <a href="#" class="imageCard -type-2 hover-btn-explore">
                                <div class="imageCard__image relative ratio ratio-45:40 mb-0">
                                    <img src="img/imageSlider/2/6.png" alt="image" class="img-ratio" />

                                    <div class="hover-btn-explore__item">
                                        <button class="button text-white bg-dark-1 size-120 fw-500 rounded-full">View</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>

@endsection