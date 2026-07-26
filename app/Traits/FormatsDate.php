<?php

namespace App\Traits;

use Carbon\Carbon;

trait FormatsDate
{
    protected static function formatDate(string $date): array
    {
        $carbon = Carbon::parse($date);

        return [
            'date'      => $carbon->toDateString(),
            'month'     => strtoupper($carbon->translatedFormat('M')),
            'day'       => $carbon->translatedFormat('d'),
            'full_date' => $carbon->translatedFormat('d F Y'),
        ];
    }
}
