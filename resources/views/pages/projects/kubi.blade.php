@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/projects/{{str_replace(' ', '-', strtolower($name))}}.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">{{$name}} Project</h1>
    </div>
</section>
<section class="layout-pt-lg">
  <div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-62 md:text-38 uppercase fw-500">{{$name}} Project Summary</h2>
  
                <p class="mt-30 md:mt-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                </p>
                <p class="mt-30 md:mt-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                </p>
                <p class="mt-30 md:mt-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                </p>
                <p class="mt-30 md:mt-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                </p>
                <p class="mt-30 md:mt-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum itaque tempora iusto quidem explicabo sunt, exercitationem culpa eaque accusantium. Dolorem porro quidem iste esse, libero vero ut praesentium natus dolores!
                </p>
            </div>
            {{-- <div class="col-md-4">
                <div class="imageCard__image ratio ratio-1:1">
                    <img src="/assets/images/mines/bibiani.jpg" alt="image" class="img-ratio" style="height: 400px;" />
                </div>
            </div> --}}
        </div>
    
      
    </div>
  </div>
</section>
<br><br>

@endsection