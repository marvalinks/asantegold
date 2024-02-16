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
            <h2 class="text-62 md:text-38 uppercase fw-500"><span class="text-accent-1">As of September, 2023</span></h2>
        </div>
        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20">
            <div class="table -type-2 uppercase text-18 md:text-16">
                <table>
            
                    <tbody>
                        <tr>
                            <td>Common shares are listed on</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Canadian Securites Exchange</td>
                            <td>CSE: ASE</td>
                        </tr>
                        <tr>
                            <td>Ghana Securities Exchange</td>
                            <td>GSE:ASG</td>
                        </tr>
                        <tr>
                            <td>Frankfurt Exchange</td>
                            <td>FSE:1A9</td>
                        </tr>
                        <tr>
                            <td>U.S.OTC</td>
                            <td>ASGOF</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Common Shares</td>
                            <td>443,364,986</td>
                        </tr>
                        <tr>
                            <td>Stock Options Outstanding</td>
                            <td>18,939,340</td>
                        </tr>
                        <tr>
                            <td>Warrants Outstanding</td>
                            <td>23,232,000</td>
                        </tr>
                        <tr>
                            <td>RSU/DSU</td>
                            <td>5,713,160</td>
                        </tr>
                        <tr>
                            <td>Fully Diluted Share Capital</td>
                            <td>491,249,486</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<br><br>

@endsection