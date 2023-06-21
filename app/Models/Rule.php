<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $guarded = ['kode_rule'];
    
    public function jawaban(): BelongsTo
    {
        return $this->belongsTo(Jawaban::class);
    }
}
