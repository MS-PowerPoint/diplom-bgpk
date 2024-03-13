<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schoolboy extends Model
{
    // ,'img'

    use HasFactory;
    protected $fillable=['name','surname','patronymic','class','estimation','school_id'];

    public function School(): BelongsTo
    {
        return $this->belongsTo(school::class);
    }
}
