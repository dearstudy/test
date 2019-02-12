<?php

function doubleStr($str)
{
    if (!$str)
        return '';
    return $str . $str;
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}