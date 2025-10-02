@extends('layouts.app')

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Share Structure</h1>
    </div>
</section>

<section class="layout-pt-lg layout-pb-lg bg-accent-3 our-projects">
    <div class="container">
        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20" style="text-align: center;">
            <h2 class="text-62 md:text-38 uppercase fw-500"><span class="text-accent-1">As of September 15, 2025</span></h2>
        </div>

        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20" style="text-align: center;">
            <p style="font-size: 20px;">Asante shares are traded on the TSX Venture Exchange (ASE), the Ghana Securities Exchange (ASG) and the OTCQX (ASGOF).</p>
        </div>
        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20">
            <div class="table -type-2 uppercase text-18 md:text-16">
                <table>
            
                    <tbody>
                        <tr>
                            <td>Common Shares</td>
                            <td>712,734,491</td>
                        </tr>
                        <tr>
                            <td>Stock Options Outstanding</td>
                            <td>14,136,340</td>
                        </tr>
                        <tr>
                            <td>Warrants Outstanding</td>
                            <td>21,180,864</td>
                        </tr>
                        <tr>
                            <td>RSUs Outstanding</td>
                            <td>9,587,360</td>
                        </tr>
                        <tr>
                            <td>DSUs Outstanding</td>
                            <td>7,007,300</td>
                        </tr>
                        <tr>
                            <td>Fully Diluted Share Capital</td>
                            <td>764,689,255</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<br><br>

@endsection