<?php

declare(strict_types=1);

namespace JetSetGo\Support\Contracts\Suppliers;

interface SupplierProvider
{
    /**
     * Search...
     */
    public function search(SearchData $data): ResultData;
}
