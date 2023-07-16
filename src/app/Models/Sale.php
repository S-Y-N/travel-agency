<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Описує тип туру.
 * Має зв'язок багато-до-багатьох з таблицею tours.
 */
class Sale extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class);
    }

    public function tourist(): BelongsTo
    {
        return $this->belongsTo(Tourist::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}

?>
