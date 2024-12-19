<?php

namespace JetSetGo\Support\Contracts\Suppliers;

use Spatie\LaravelData\Data;

/**
 * @mixin Data
 *
 * @property int $code
 * @property string $name
 * @property int $stars
 * @property string $location
 * @property float $latitude
 * @property float $longitude
 * @property string $rate
 */
interface HotelData
{
    //
}
