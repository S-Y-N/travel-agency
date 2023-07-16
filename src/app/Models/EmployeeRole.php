<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Описує роль працівника туристичного агенства.
 * Має зв'язок багато-до-багатьох з таблицею employees.
 */
class EmployeeRole extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class);
    }
}

?>
