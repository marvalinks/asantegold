@extends('layouts.app')
@section('styles')
    <style>
        li{
            list-style: circle!important;
        }
    </style>
@show
@section('scripts')
  <script>
    // Get all SVG elements
    const svgs = document.querySelectorAll('svg');

    // Remove each SVG element
    svgs.forEach(svg => {
        svg.parentNode.removeChild(svg);
    });

    document.addEventListener('DOMContentLoaded', function() {
      // Get all elements with class 'elementor-button'
      const buttons = document.querySelectorAll('.elementor-button');

      // Loop through each button element
      buttons.forEach(button => {
          // Add additional class to the button element
          button.classList.add('g78');
      });
  });

  </script>
@endsection
@section('content')

<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">News Releases</h1>
    </div>
</section>

@if (isset($post['_embedded']['wp:featuredmedia']['0']['source_url']))
    <div class="layout-pt-lg">
    <img src="{{$post['_embedded']['wp:featuredmedia']['0']['source_url'] ?? ''}}" alt="image" class="singleImage -type-1">
    </div>
@endif

<section class="pt-60">
    <div class="container">
        <div class="row justify-center">
          <div data-anim-child="slide-up delay-2" class="row items-center x-gap-60 y-gap-15 pt-30 is-in-view" style="justify-content: center;">
            

            <div class="col-sm-auto">
              <div>{{\Carbon\Carbon::parse($post['date_gmt'])->toFormattedDateString()}}</div>
            </div>

            <div class="col-sm-auto">
              <div class="text-accent-1">NEWS RELEASES</div>
            </div>
          </div>
            <div class="col-xl-8 col-lg-9">
                <div class="blogContent">
                    <p class="mt-20 md:mt-15">{!! $post['content']['rendered'] !!}</p>
                </div>
            </div>

            <div class="col-xl-8 col-lg-9">
                <div class="blogDivider mt-60 mb-60 md:mt-30 md:mb-30"></div>

                <div class="row y-gap-15 justify-between">
                    <div class="col-auto">
                        <div class="row x-gap-0 y-gap-10">
                            <div class="col-auto">
                                <a href="#" class="blogSocial icon-facebook"></a>
                            </div>

                            <div class="col-auto">
                                <a href="#" class="blogSocial icon-twitter"></a>
                            </div>

                            <div class="col-auto">
                                <a href="#" class="blogSocial icon-instagram"></a>
                            </div>

                            <div class="col-auto">
                                <a href="#" class="blogSocial icon-linkedin"></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="blogDivider mt-60 mb-60 md:mt-30 md:mb-30"></div>

            </div>
        </div>
    </div>
</section>

@endsection