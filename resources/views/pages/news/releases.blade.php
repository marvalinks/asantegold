@extends('layouts.app')

@section('styles')
<style>
    .pagination-wrapper {
        display: flex !important;
        flex-direction: row !important;
        justify-content: center;
        align-items: center;
        gap: 10px;
        list-style: none;
        padding-left: 0;
    }

    .pagination-wrapper a {
        padding: 15px!important;
    }
</style>
@endsection

@section('content')

{{-- ================= PAGE HEADER ================= --}}
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
        <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
    </div>

    <div class="container">
        <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">
            News Releases
        </h1>
    </div>
</section>

{{-- ================= NEWS SECTION ================= --}}
<section class="layout-pt-lg layout-pb-lg relative news-ns rxrx">
    <div class="sectionBg -mx-60 bg-accent-2 z--1"></div>

    <div class="container">

        {{-- ================= FILTER BAR ================= --}}
        <div class="row pt-40 pb-50 justify-content-between align-items-end">

            {{-- Title --}}
            <div class="col-lg-4">
                <h3 class="text-24 fw-500 mb-10">Filter News</h3>
                <p class="text-14 text-muted">
                    Refine news releases by date
                </p>
            </div>

            {{-- Filters --}}
            <div class="col-lg-8">
                <form method="GET" action="{{ url()->current() }}"
                    class="row y-gap-20 align-items-end bg-white p-30 rounded-8 shadow-sm">

                    {{-- Year --}}
                    <div class="col-md-12">
                        <label class="text-13 fw-500 mb-5 d-block">Year</label>
                        <select name="year" class="form-select" style="border: 1px solid #e9e9e9;padding: 20px;">
                            <option value="">All Years</option>
                            @for($y = now()->year; $y >= 2015; $y--)
                                <option value="{{ $y }}" {{ request('year') == $y ? 'selected' : '' }}>
                                    {{ $y }}
                                </option>
                            @endfor
                        </select>
                    </div>

                    {{-- Actions --}}
                    <div class="col-12 d-flex justify-content-end gap-15 pt-10">
                        <button type="submit" class="button -md -dark-1">
                            Apply Filter
                        </button>

                        <a href="{{ url()->current() }}" class="button -md -outline-dark">
                            Reset
                        </a>
                    </div>

                </form>
            </div>

        </div>


        {{-- ================= NEWS LIST ================= --}}
        <div class="row y-gap-30 pt-60 md:pt-30 new-section">

            <div class="col-auto">
                <h2 class="text-62 md:text-38 uppercase fw-500 hdd">
                    <span class="text-accent-1">Our Latest </span><br />
                    News
                </h2>
            </div>

            <div class="col-12">

                @forelse($posts as $post)
                    <ul class="news-list mb-40">
                        <li>
                            <h4 class="text-14 text-accent-1 mb-10">
                                {{ \Carbon\Carbon::parse($post['date_gmt'])->toFormattedDateString() }}
                            </h4>

                            <a href="{{ route('news.releases.details', $post['slug']) }}">
                                <h3 class="text-24 fw-500">
                                    {!! $post['title']['rendered'] !!}
                                </h3>
                            </a>
                        </li>
                    </ul>
                @empty
                    <p class="text-18 mt-30">
                        No news releases found for the selected date.
                    </p>
                @endforelse

                @if($totalPages > 1)
                    <div class="pagination-wrapper mt-60">
                        <div class="d-flex justify-content-center align-items-center gap-10 flex-wrap">

                            {{-- Previous --}}
                            @if($currentPage > 1)
                                <a class="button -sm -outline-dark"
                                href="{{ request()->fullUrlWithQuery(['page' => $currentPage - 1]) }}">
                                    Prev
                                </a>
                            @endif

                            {{-- Pages --}}
                            @for($i = 1; $i <= $totalPages; $i++)
                                <a class="button -sm {{ $i == $currentPage ? '-dark-1' : '-outline-dark' }}"
                                href="{{ request()->fullUrlWithQuery(['page' => $i]) }}">
                                    {{ $i }}
                                </a>
                            @endfor

                            {{-- Next --}}
                            @if($currentPage < $totalPages)
                                <a class="button -sm -outline-dark"
                                href="{{ request()->fullUrlWithQuery(['page' => $currentPage + 1]) }}">
                                    Next
                                </a>
                            @endif

                        </div>
                    </div>
                @endif



            </div>

        </div>

    </div>
</section>

@endsection
