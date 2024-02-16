@extends('layouts.app')

@section('content')
{{-- @php
    $assetsLogoImages = array_slice(scandir('../../../public/stocks/assets/images/logo/AAPL.webp'), 2);

$assetsLogoImages = array_combine(
    array_map(function ($image) {
        return substr($image, 0, strrpos($image, '.'));
    }, $assetsLogoImages),
    array_map(function ($image) {
        return '../../../public/stocks/assets/images/logo' . $image;
    }, $assetsLogoImages)
);
@endphp --}}

<section class="layout-pt-lg">
    <div class="container">
      <div data-anim-child="slide-up delay-1" class="col-xl-6 col-lg-6 md:order-1 is-in-view">
        
      </div>
    </div>
  
  </section>
@endsection