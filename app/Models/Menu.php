<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use RichanFongdasen\EloquentBlameable\BlameableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory, SoftDeletes, BlameableTrait;

    protected $table = "menus";

    protected $guarded = [];

    public function foods()
    {
        return $this->belongsToMany(Food::class, 'food_menu', 'menu_id');
    }
}
