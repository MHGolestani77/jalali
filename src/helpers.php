<?php

if (! function_exists('jalali')) {
    /**
     * @param null $datetime
     * @param null $timezone
     * @return \Mhgolestani77\Jalali\Jalali
     */
    function jalali($datetime = null, $timezone = null)
    {
        return new \Mhgolestani77\Jalali\Jalali($datetime, $timezone);
    }
}
