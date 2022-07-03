<?php
if (!function_exists(function:'currency_IDR')) {
    function currency_IDR($value)
    {
        return "Rp." . number_format($value, 0, ',', '.');
    }
}

if (!function_exists(function:'intTOrb')) {
    function intTOrb($value)
    {
        return number_format($value, 0, ',', '.');
    }
}

if (!function_exists(function:'currencyIDRTONumeric')) {
    function currencyIDRTONumeric($value){
        return preg_replace('/\D/','',$value);
    }
}