<?php

namespace Database\Factories;

use App\Models\HostelSeat;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class HostelSeatFactory extends Factory
{
    protected $model = HostelSeat::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'floor' => mt_rand(1,20),
            'flat'=> Str::random(1),
            'seatNumber' => mt_rand(1,10),
            'status' => 0
        ];
    }
}
