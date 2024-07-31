@extends('layouts.app')

@section('styles')
    <style>
        .news-ns{
            margin-bottom: 50px;
        }
        .fgh{
            width: 90%;
            margin: auto;
        }
        .fgh img{
            /* height: 400px; */
            border-radius: 20px;
        }
    </style>
@endsection

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
        <img src="/assets/images/8.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">{{$team->name}}</h1>
    </div>
</section>
<section>
    @include('fragments.about-menu')
</section>
<section class="layout-pt-lg news-ns">
    <br><br><br>
    <div class="container">
      <div class="row fgh">
        <div data-anim-wrap="" class="row y-gap-30 justify-between animated">
            <div class="col-md-4 md:order-2">
                <div data-anim-child="slide-up delay-1" class="relative is-in-view">
                  <img src="{{$team->image_url}}" alt="image" style="object-fit: contain;">
                </div>
            </div>
    
            <div data-anim-child="slide-up delay-1" class="col-md-8 md:order-1 is-in-view">
              <h2 class="text-62 md:text-38 uppercase fw-500">
                 <span class="text-accent-1">{{$team->name}}</span>
              </h2>
    
              <p class="mt-60 md:mt-30 f19">
                {{$team->bio}}
              </p>
            </div>
          </div>
      </div>
    </div>
</section>

@endsection