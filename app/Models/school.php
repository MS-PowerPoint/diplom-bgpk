<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class school extends Model
{
    use HasFactory;
    protected $fillable=['name','number','quantity','year','desk'];

    public function Schoolboys(): HasMany
    {
        return $this->hasMany(schoolboys::class);
    }
}
