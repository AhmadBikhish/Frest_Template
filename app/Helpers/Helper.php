<?php

use Morilog\Jalali\Jalalian;

function jalali($date, $format = '%A, %d %B %Y'){
    return Jalalian::forge($date)->format($format);
}