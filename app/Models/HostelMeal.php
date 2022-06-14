<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostelMeal extends Model
{
    use HasFactory;

    protected $table = 'hostel_meal';
    protected $fillable = ['day','meal_type','meal_item','price'];
}
