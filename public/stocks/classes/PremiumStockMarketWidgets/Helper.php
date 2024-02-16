<?php
/**
 *   Premium Stock Market Widgets
 *   ----------------------
 *   Helper.php
 * 
 *   @copyright  Copyright (c) FinancialPlugins, All rights reserved
 *   @author     FinancialPlugins <info@financialplugins.com>
 *   @see        https://financialplugins.com
*/

namespace PremiumStockMarketWidgets;

use Exception;


class Helper
{
    
    public static function p($msg)
    {
        if (is_array($msg) || is_object($msg)) {
            print '<pre>' . print_r($msg, TRUE) . '</pre>';
        } else {
            print $msg;
        }
    }

    
    public static function fileIsUpToDate($fileName, $cacheTime)
    {
        $filePath = SMW_ROOT_DIR . '/' . $fileName;
        return file_exists($filePath) && (time() - filemtime($filePath) < $cacheTime);
    }

    
    public static function readJson($fileName)
    {
        return file_exists(SMW_ROOT_DIR . '/' . $fileName) ?
            json_decode(file_get_contents(SMW_ROOT_DIR . '/' . $fileName)) :
            NULL;
    }

    public static function readFile($fileName)
    {
        return file_exists(SMW_ROOT_DIR . '/' . $fileName) ?
            file_get_contents(SMW_ROOT_DIR . '/' . $fileName) :
            NULL;
    }

    
    public static function saveJson($fileName, $contents)
    {
        return file_put_contents(SMW_ROOT_DIR . '/' . $fileName, json_encode($contents, JSON_PRETTY_PRINT));
    }

    public static function saveFile($fileName, $contents)
    {
        return file_put_contents(SMW_ROOT_DIR . '/' . $fileName, $contents);
    }

    public static function log($msg)
    {
        error_log(is_string($msg) ? $msg : json_encode($msg));
    }

    public static function isCurrencySymbol($symbol)
    {
        return substr($symbol, -2) == '=X';
    }

    
    public static function value($object, ?string $path)
    {
        if (is_null($path) || $path === '') {
            return $object;
        }

        return array_reduce(explode('.', $path), function ($carry, $item) {
            
            return ctype_digit($item) || is_array($carry) ?
                (isset($carry[$item]) ? $carry[$item] : NULL) :
                (isset($carry->$item) ? $carry->$item : NULL);
        }, $object);
    }

    
    public static function cleanString($jsonString)
    {
        if (!is_string($jsonString) || !$jsonString) return '';

        
        
        for ($i = 0; $i <= 31; ++$i)
            $jsonString = str_replace(chr($i), "", $jsonString);

        $jsonString = str_replace(chr(127), "", $jsonString);

        
        
        
        if (0 === strpos(bin2hex($jsonString), 'efbbbf')) $jsonString = substr($jsonString, 3);

        
        return preg_replace('/[[:^print:]]/', '', $jsonString);
    }

    public static function encodeSymbol($symbol)
    {
        return str_replace('&', urlencode('&'), $symbol);
    }

    
    public static function arrayContains (array $needles, array $haystack)
    {
        foreach ($needles as $needle) {
            if (in_array($needle, $haystack)) {
                return TRUE;
            }
        }

        return FALSE;
    }

    
    public static function arrayContainsAll (array $needles, array $haystack)
    {
        foreach ($needles as $needle) {
            if (!in_array($needle, $haystack)) {
                return FALSE;
            }
        }

        return TRUE;
    }

    public static function decode($string)
    {
        try {
            $result = json_decode($string);
        } catch (Exception $e) {
            $result = json_decode(self::cleanString($string));
        }

        return $result;
    }

    
    public static function camelToSnakeCase(string $input) {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
        }
        return implode('_', $ret);
    }

    
    public static function substituteVariables(array $data, string $template): string
    {
        
        preg_match_all('/{(\w+)}/', $template, $matches);

        
        foreach ($matches[1] as $varName) {
            if (isset($data[$varName])) {
                $template = str_replace("{{$varName}}", $data[$varName], $template);
            }
        }

        return $template;
    }
}
