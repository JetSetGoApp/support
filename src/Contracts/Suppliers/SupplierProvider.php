<?php

declare(strict_types=1);

namespace JetSetGo\Support\Contracts\Suppliers;

interface SupplierProvider
{
    public function search(SearchData $data): ResultData;
}
