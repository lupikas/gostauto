<?php

function getRepeaterTrans($obj) {

    $current_locale = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();

    if (!is_object($obj)) {
        return $obj;
    }

    if (property_exists($obj, $current_locale)) {
        return $obj->{$current_locale};
    }

    return $obj->{config('app.fallback_locale')};
}
