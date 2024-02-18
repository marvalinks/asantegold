@extends('layouts.app')

@section('content')
<section class="noPageSection">
    <div class="noPageSection__bg">
      <img src="/assets/images/Chirano.jpg" alt="image">
    </div>

    <div class="noPageSection__content">
      <div class="noPageSection__num">404</div>
      <h1 class="noPageSection__title">Sorry we can't find that page!</h1>
      <p class="noPageSection__text">The page you are looking for was never existed.</p>

      <div class="noPageSection__button">
        <a href="{{route('home')}}" class="button -md -dark-1 bg-accent-1 text-white">
          BACK TO HOMEPAGE
        </a>
      </div>
    </div>
</section>
@endsection