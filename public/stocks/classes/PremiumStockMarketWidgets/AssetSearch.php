<?php
/**
 *   Premium Stock Market Widgets
 *   ----------------------
 *   AssetSearch.php
 * 
 *   @copyright  Copyright (c) FinancialPlugins, All rights reserved
 *   @author     FinancialPlugins <info@financialplugins.com>
 *   @see        https://financialplugins.com
*/

namespace PremiumStockMarketWidgets;


class AssetSearch
{
    const URL = 'https://finance.yahoo.com/_finance_doubledown/api/resource/searchassist;searchTerm=%s?&intl=us&lang=en-US';

    protected $query;

    function __construct(array $request)
    {
        $this->query = $request['query'] ?: NULL;
    }

    public function get(): string
    {
        $data = [];

        if ($this->query) {
            $url = sprintf(self::URL, urlencode($this->query));
            $http = new Http($url);
            $response = Helper::decode($http->get());

            if (isset($response->items)) {
                foreach ($response->items as $key => $item) {
                    
                    $data[$key]['symbol']           = str_replace(' ', '', $item->symbol); 
                    $data[$key]['id']               = $data[$key]['symbol'];
                    $data[$key]['name']             = $item->name;
                    $data[$key]['type']             = $item->typeDisp;
                    $data[$key]['exchange_code']    = $item->exch;
                    $data[$key]['exchange_name']    = $item->exchDisp;
                }
            }
        }

        return json_encode($data);
    }
}
