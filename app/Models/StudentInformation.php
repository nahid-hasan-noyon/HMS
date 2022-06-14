<?php

namespace App\Models;

use App\Models\BookMeal;
use App\Models\HostelSeat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentInformation extends Model
{
    use HasFactory;

    protected $table = 'student_information';
    protected $guarded = ['id'];

    public function hostelSeat(){
        return $this->belongsTo(HostelSeat::class,'seatNumber','id');
    }
    
    public function hostel_meals(){
        return $this->hasMany(BookMeal::class,'studentID','studentID');
    }

}
