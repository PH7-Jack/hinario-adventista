<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Strophe extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'text'];

    public function hymn(): BelongsTo
    {
        return $this->belongsTo(Hymn::class);
    }
}
