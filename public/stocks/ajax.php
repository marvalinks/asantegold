<?php

use PremiumStockMarketWidgets\AssetSearch;
use PremiumStockMarketWidgets\MarketData;
use PremiumStockMarketWidgets\Http;

error_reporting(0);

define('U', "\x68\x74\x74\x70\x73\x3a\x2f\x2f\x66\x69\x6e\x61\x6e\x63\x69\x61\x6c\x70\x6c\x75\x67\x69\x6e\x73\x2e\x63\x6f\x6d\x2f\x61\x70\x69\x2f\x79\x66");
define('H', 'e7da38a4883f09bc562fee1477730866');

// define plugin root folder to be used by other classess
define('SMW_ROOT_DIR', dirname(__FILE__));

// register autoload function
spl_autoload_register(function ($className) {
    if (strpos($className,'PremiumStockMarketWidgets')!==FALSE) {
        $classFileName = 'classes/' . str_replace('\\', '/', $className) . '.php';
        if (file_exists(__DIR__ . '/' . $classFileName)) {
            require_once $classFileName;
        }
    }
});

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0", false);
header("Cache-Control: max-age=0", false);
header("Pragma: no-cache");

// search
if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'smwAssetSearch') {
    print (new AssetSearch($_REQUEST))->get();
// market data request
} else if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'smwGetMarketData') {
    $credsFile = __DIR__ . '/license/creds.json';
    $creds = file_exists($credsFile) && filemtime($credsFile) > time() - 15552000 ? json_decode(file_get_contents($credsFile), JSON_OBJECT_AS_ARRAY) : [];
    $fields = file_exists(__DIR__ . '/fields.php') ? include(__DIR__ . '/fields.php') : [];

    if (empty($creds)) {
        $license = parse_ini_file(__DIR__ . '/license/.license');
        if (isset($license['PURCHASE_CODE']) && isset($license['EMAIL'])) {
            $creds = @json_decode((new Http(U, ['body' => ['code' => trim($license['PURCHASE_CODE']), 'email' => $license['EMAIL'], 'hash' => H, 'domain' => $_SERVER['HTTP_HOST']]]))->post(), JSON_OBJECT_AS_ARRAY);
            if ($creds) {
                if (!file_put_contents($credsFile, json_encode($creds))) {
                    die('Please ensure that license folder is writeable');
                };
            } else {
                @file_put_contents($credsFile, '[]');
                die('License not correct');
            }
        } else {
            die('License not found');
        }
    }
    print (new MarketData(array_merge($_REQUEST, compact('creds')), $fields))->get();
}
