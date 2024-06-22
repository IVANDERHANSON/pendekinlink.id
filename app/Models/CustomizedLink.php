<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomizedLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'Link',
        'Source',
        'CreatedBy'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'CreatedBy');
    }
}
