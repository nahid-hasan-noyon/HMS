<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookMeal extends Model
{
    protected $table ='meal_bill';
    protected $guarded = ['id'];
    protected $appends = ['total'];
    
    public function getTotalAttribute(){
        return $this->breakfast_price+$this->lunch_price+$this->dinner_price;
    }

}
