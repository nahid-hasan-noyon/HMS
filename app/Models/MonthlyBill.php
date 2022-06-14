<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MonthlyBill extends Model
{
    use HasFactory;

    protected $table = 'monthly_bills';
    protected $fillable = ['title','type','amount'];
}
