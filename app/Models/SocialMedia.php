<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'user_id',
    ];

    // Relation avec la table 'users'
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
