<?php

declare(strict_types=1);

namespace JetSetGo\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static bool add(string $id, string $supplierProviderClass)
 * @method static array search(array $data)
 */
final class Supplier extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor(): string
    {
        return 'jetsetgo.supplier';
    }
}
