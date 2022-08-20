<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'degree', 'establishment',
        'start_date',
        'end_date',
        'description',
        'user_id'
    ];

    // Relation avec l'utilsateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
