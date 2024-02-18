@extends('layouts.app')

@section('styles')
    <style>
        .noPageSection__content{
            color: black;
        }
    </style>
@endsection

@section('content')
<section class="noPageSection">
    {{-- <div class="noPageSection__bg">
      <img src="/assets/images/Chirano.jpg" alt="image">
    </div> --}}

    <div class="noPageSection__content">
      <div class="noPageSection__num">📨</div>
      <h1 class="noPageSection__title">Thank you!</h1>
      <p class="noPageSection__text">Your request have been submitted to us. We will respond to you as soon as possible.</p>

      <div class="noPageSection__button">
        <a href="{{route('home')}}" class="button -md -dark-1 bg-accent-1 text-white">
          BACK TO HOMEPAGE
        </a>
      </div>
    </div>
</section>
@endsection