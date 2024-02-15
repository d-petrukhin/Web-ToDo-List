<?php

namespace App\Services;

use Carbon\Carbon;

class DateFormatterService
{
    public function format($date)
    {
        return Carbon::parse($date)->format('d-m-Y');
    }
}
