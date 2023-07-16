<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Описує працівника туристичного агенства.
 * Має зв'язок багато-до-багатьох з таблицею employee_roles.
 */
class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function employeeRoles(): BelongsToMany
    {
        return $this->belongsToMany(EmployeeRole::class);
    }

    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }
}

?>
