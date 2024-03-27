<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

protected $fillable=['name','surname','patronymic','class','estimation','school_id','img'];
class favorites extends Model
{
    use HasFactory;
}
