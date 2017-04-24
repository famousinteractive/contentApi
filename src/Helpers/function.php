<?php
/**
 * Created by PhpStorm.
 * User: jeremydillenbourg
 * Date: 18/04/2017
 * Time: 15:44
 */

if (! function_exists('fitrans')) {
    function fitrans($key, $params = [], $lang = null, $default = '', $preferCache = true)
    {

        if(config('famousContentApi.useApi')) {
            return \Famousinteractive\ContentApi\Library\Trans::get($key, $params, $lang, $default, $preferCache);
        } else {
            return trans($key, $params);
        }
    }
}