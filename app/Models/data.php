<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;
    public $table="data";
    protected $fillable=[
        "name",
        "id"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];
}