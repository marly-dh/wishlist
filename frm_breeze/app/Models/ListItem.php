<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'img', 'description', 'price', 'url'
    ];

    protected $table = 'list_items';
}
