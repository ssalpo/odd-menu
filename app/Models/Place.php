<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'user_id',
        'theme',
        'theme_color',
        'currency',
        'phone',
        'logo',
        'background_img',
        'wifi_password',
        'can_make_order',
        'country',
        'city',
        'address',
        'description',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class);
    }
}
