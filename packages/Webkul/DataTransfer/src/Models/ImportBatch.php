<?php

namespace Webkul\DataTransfer\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\DataTransfer\Contracts\ImportBatch as ImportBatchContract;

class ImportBatch extends Model implements ImportBatchContract
{
    protected $table = 'import_batches';

    protected $fillable = [
        'import_id',
        'batch_number',
        'status',
        'created_at',
        'updated_at',
        'processed_records',
        'failed_records',
        'total_records',
        'error_message',
        'file_path',
        // Definiši potrebne kolone baze
    ];
}
