@extends('layouts.app')

@section('content')

<section data-anim-wrap="" class="pageHeader -type-1 animated">
    <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
      <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
    </div>

    <div class="container">
      <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Stock Information</h1>
    </div>
</section>
<section class="layout-pt-lg layout-pb-lg bg-accent-3 our-projects">
    <div class="container-fluid">
        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20" style="text-align: center;">
            <h2 class="text-62 md:text-38 uppercase fw-500"><span class="text-accent-1">Stock Information</span></h2>
        </div>
        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20 ert" style="text-align: center;">
            <div class="col-md-6">
                <div class="tradingview-widget-container" style="height: 100%; width: 100%;">
                    <div class="tradingview-widget-container__widget" style="height: calc(100% - 32px); width: 100%;"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                        {
                        "autosize": true,
                        "symbol": "CSE:ASE",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "light",
                        "style": "3",
                        "locale": "en",
                        "enable_publishing": false,
                        "allow_symbol_change": true,
                        "calendar": false,
                        "support_host": "https://www.tradingview.com"
                        }
                    </script>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tradingview-widget-container" style="height: 100%; width: 100%;">
                    <div class="tradingview-widget-container__widget" style="height: calc(100% - 32px); width: 100%;"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                        {
                        "autosize": true,
                        "symbol": "FWB:1A9",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "light",
                        "style": "3",
                        "locale": "en",
                        "enable_publishing": false,
                        "allow_symbol_change": true,
                        "calendar": false,
                        "support_host": "https://www.tradingview.com"
                        }
                    </script>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tradingview-widget-container" style="height: 100%; width: 100%;">
                    <div class="tradingview-widget-container__widget" style="height: calc(100% - 32px); width: 100%;"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                        {
                        "autosize": true,
                        "symbol": "OTC:ASGOF",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "light",
                        "style": "3",
                        "locale": "en",
                        "enable_publishing": false,
                        "allow_symbol_change": true,
                        "calendar": false,
                        "support_host": "https://www.tradingview.com"
                        }
                    </script>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tradingview-widget-container" style="height: 100%; width: 100%;">
                    <div class="tradingview-widget-container__widget" style="height: calc(100% - 32px); width: 100%;"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                        {
                        "autosize": true,
                        "symbol": "COMEX:GC1!",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "light",
                        "style": "3",
                        "locale": "en",
                        "enable_publishing": false,
                        "allow_symbol_change": true,
                        "calendar": false,
                        "support_host": "https://www.tradingview.com"
                        }
                    </script>
                </div>
            </div>
        </div>
        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20" style="text-align: center;">
            
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                {{-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div> --}}
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                    {
                        "width": "1920",
                        "height": 550,
                        "symbolsGroups": [
                        {
                            "name": "Indices",
                            "originalName": "Indices",
                            "symbols": [
                            {
                                "name": "CSE:ASE",
                                "displayName": "CSE"
                            },
                            {
                                "name": "FWB:1A9",
                                "displayName": "FRANKFURT EXCHANGE"
                            },
                            {
                                "name": "OTC:ASGOF",
                                "displayName": "U.S.O.T.C"
                            },
                            {
                                "name": "COMEX:GC1!",
                                "displayName": "GOLD GC1"
                            }
                            ]
                        }
                        ],
                        "showSymbolLogo": true,
                        "isTransparent": false,
                        "colorTheme": "light",
                        "locale": "en"
                    }
                </script>
            </div>
        </div>
    </div>
</section>
@endsection