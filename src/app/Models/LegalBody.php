<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Описує юридичну сутність, яка виконує оплату.
 */
class LegalBody extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}

?>
