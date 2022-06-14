<?php

namespace Database\Seeders;

use App\Models\HostelSeat;
use Illuminate\Database\Seeder;

class HostelSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\HostelSeat::factory(100)->create();
    }
}
