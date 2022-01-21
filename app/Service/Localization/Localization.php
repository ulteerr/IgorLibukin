<?php

namespace App\Service\Localization;

class Localization
{
    public static function locale() {
        $locale = request()->segment(1, '');
        if($locale && in_array($locale, config("app.locales"))) {
            return $locale;
        }
        return '';
    }
}
