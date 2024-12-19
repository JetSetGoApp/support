<?php

declare(strict_types=1);

namespace JetSetGo\Support\Contracts\Suppliers;

use Spatie\LaravelData\Data;

/**
 * @mixin Data
 *
 * @property string $query
 * @property SearchDate $date
 * @property int $adults
 * @property int $children
 * @property int $rooms
 * @property string $signature
 * @property int $expires
 */
interface SearchData
{
    //
}
