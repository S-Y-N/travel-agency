<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Описує месенджери, які можуть бути доступні за телефоном.
 * Має зв'язок багато-до-багатьох з таблицею tourist_phones.
 */
class Messenger extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function touristPhones(): BelongsToMany
    {
        return $this->belongsToMany(TouristPhone::class);
    }
}

?>
