<?php

namespace Database\Factories;


use Illuminate\Support\Str;
use App\Models\StudentInformation;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentInformationFactory extends Factory
{
    
    protected $model = StudentInformation::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'studentID' => $this->faker->postcode(4),
            'name' => $this->faker->name(),
            'department' => Str::random(3),
            'gender'=> Str::random(6),
            'email'=> $this->faker->unique()->safeEmail(),
            'dob'=> Str::random(8),
            'phone'=> Str::random(11),
            'guardianPhone'=> Str::random(11),
            'address'=> $this->faker->address(),
            'seatNumber'=> Str::random(5),
            'paymentStatus'=> Str::random(2),
            'status'=> Str::random(1)
        ];
    }
}
