<?php

function doubleStr($str)
{
    if (!$str)
        return '';
    return $str . $str;
}