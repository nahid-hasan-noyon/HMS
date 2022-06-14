<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HostelSeat extends Model
{
    use HasFactory;

    protected $table = 'hostel_seat';
    protected $fillable = ['floor','flat','seatNumber','status'];
}
