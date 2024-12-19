<?php

declare(strict_types=1);

namespace JetSetGo\Support\Contracts\Suppliers;

use Illuminate\Support\Carbon;
use Spatie\LaravelData\Data;

/**
 * @mixin Data
 *
 * @property Carbon $from
 * @property Carbon $to
 */
interface SearchDate
{
    //
}
