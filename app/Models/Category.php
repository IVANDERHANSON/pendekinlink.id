<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'CreatedBy'
    ];

    public function customizedLinks(): HasMany
    {
        return $this->hasMany(CustomizedLink::class, 'CategoryId');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'CreatedBy');
    }
}
