@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">News Releases</h1>
    </div>
</section>
<section class="layout-pt-lg layout-pb-lg relative news-ns rxrx">
    <div class="sectionBg -mx-60 bg-accent-2 z--1"></div>

    <div class="container">
        <div class="row y-gap-30 pt-60 md:pt-30 new-section">
            <div class="col-auto">
                <h2 class="text-62 md:text-38 uppercase fw-500 hdd">
                    <span class="text-accent-1">Our Latest </span><br />
                    News
                </h2>
            </div>
            @foreach($posts as $post)
            <ul class="">
                <li>
                    <h4>{{\Carbon\Carbon::parse($post['date_gmt'])->toFormattedDateString()}}</h4>
                    <a href="{{route('news.releases.details', [$post['slug']])}}">
                        <h3> {{$post['title']['rendered']}}</h3>
                    </a>
                </li>
            </ui>
            @endforeach
        </div>
    </div>
</section>

@endsection