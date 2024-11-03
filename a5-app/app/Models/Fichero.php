<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Fichero extends Model
{
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function size() 
    {
        return Storage::size($this->path);
    }
}
