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
        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20" style="text-align: center;">
            
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener nofollow" target="_blank"><span class="blue-text">Market summary</span></a><span class="trademark"> by TradingView</span></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
            {
            "colorTheme": "light",
            "locale": "en",
            "largeChartUrl": "",
            "isTransparent": false,
            "showSymbolLogo": true,
            "backgroundColor": "#ffffff",
            "support_host": "https://www.tradingview.com",
            "width": 1920,
            "height": 550,
            "symbolsGroups": [
                {
                "name": "Indices",
                "symbols": [
                    {
                    "name": "TSXV:ASE",
                    "displayName": ""
                    },
                    {
                    "name": "OTC:ASGOF",
                    "displayName": ""
                    },
                    {
                    "name": "FWB:1A9",
                    "displayName": ""
                    },
                    {
                    "name": "TVC:GOLD",
                    "displayName": ""
                    }
                ]
                }
            ]
            }
            </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
        <div class="row y-gap-30 mt-60 md:mt-40 sm:mt-20 ert" style="text-align: center;">
            <div class="col-md-6">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="height:100%;width:100%">
                <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/TSXV-ASE/" rel="noopener nofollow" target="_blank"><span class="blue-text">ASE stock chart</span></a><span class="trademark"> by TradingView</span></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                {
                "allow_symbol_change": true,
                "calendar": false,
                "details": false,
                "hide_side_toolbar": true,
                "hide_top_toolbar": false,
                "hide_legend": false,
                "hide_volume": false,
                "hotlist": false,
                "interval": "D",
                "locale": "en",
                "save_image": true,
                "style": "1",
                "symbol": "TSXV:ASE",
                "theme": "light",
                "timezone": "Etc/UTC",
                "backgroundColor": "#ffffff",
                "gridColor": "rgba(46, 46, 46, 0.06)",
                "watchlist": [],
                "withdateranges": false,
                "compareSymbols": [],
                "studies": [],
                "autosize": true
                }
                </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
            <div class="col-md-6">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="height:100%;width:100%">
                <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/OTC-ASGOF/" rel="noopener nofollow" target="_blank"><span class="blue-text">ASGOF stock chart</span></a><span class="trademark"> by TradingView</span></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                {
                "allow_symbol_change": true,
                "calendar": false,
                "details": false,
                "hide_side_toolbar": true,
                "hide_top_toolbar": false,
                "hide_legend": false,
                "hide_volume": false,
                "hotlist": false,
                "interval": "D",
                "locale": "en",
                "save_image": true,
                "style": "1",
                "symbol": "OTC:ASGOF",
                "theme": "light",
                "timezone": "Etc/UTC",
                "backgroundColor": "#ffffff",
                "gridColor": "rgba(46, 46, 46, 0.06)",
                "watchlist": [],
                "withdateranges": false,
                "compareSymbols": [],
                "studies": [],
                "autosize": true
                }
                </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
            <div class="col-md-6">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="height:100%;width:100%">
                <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/FWB-1A9/" rel="noopener nofollow" target="_blank"><span class="blue-text">1A9 chart</span></a><span class="trademark"> by TradingView</span></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                {
                "allow_symbol_change": true,
                "calendar": false,
                "details": false,
                "hide_side_toolbar": true,
                "hide_top_toolbar": false,
                "hide_legend": false,
                "hide_volume": false,
                "hotlist": false,
                "interval": "D",
                "locale": "en",
                "save_image": true,
                "style": "1",
                "symbol": "FWB:1A9",
                "theme": "light",
                "timezone": "Etc/UTC",
                "backgroundColor": "#ffffff",
                "gridColor": "rgba(46, 46, 46, 0.06)",
                "watchlist": [],
                "withdateranges": false,
                "compareSymbols": [],
                "studies": [],
                "autosize": true
                }
                </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
            <div class="col-md-6">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="height:100%;width:100%">
                <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/GOLD/?exchange=TVC" rel="noopener nofollow" target="_blank"><span class="blue-text">GOLD chart</span></a><span class="trademark"> by TradingView</span></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                {
                "allow_symbol_change": true,
                "calendar": false,
                "details": false,
                "hide_side_toolbar": true,
                "hide_top_toolbar": false,
                "hide_legend": false,
                "hide_volume": false,
                "hotlist": false,
                "interval": "D",
                "locale": "en",
                "save_image": true,
                "style": "1",
                "symbol": "TVC:GOLD",
                "theme": "light",
                "timezone": "Etc/UTC",
                "backgroundColor": "#ffffff",
                "gridColor": "rgba(46, 46, 46, 0.06)",
                "watchlist": [],
                "withdateranges": false,
                "compareSymbols": [],
                "studies": [],
                "autosize": true
                }
                </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
        
    </div>
</section>
@endsection