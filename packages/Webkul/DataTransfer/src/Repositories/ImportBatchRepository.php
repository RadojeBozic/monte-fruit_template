<?php

namespace Webkul\DataTransfer\Repositories;

use Webkul\Core\Eloquent\Repository;
use Webkul\DataTransfer\Contracts\ImportBatch;

class ImportBatchRepository extends Repository
{
    public function model()
    {
        return ImportBatch::class;
    }
}
