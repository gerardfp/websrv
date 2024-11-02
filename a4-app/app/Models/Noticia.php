<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Noticia extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['titulo', 'cuerpo', 'enlace'];

    public function comentarios(): HasMany
    {
        return $this->hasMany(Comentario::class)->where('comentario_id', null);
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function votos(): HasMany
    {
        return $this->hasMany(Voto::class);
    }
}
