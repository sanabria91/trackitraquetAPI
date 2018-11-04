<?php

use Illuminate\Database\Seeder;
use App\Sports;

class SportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sports = ['Tennis','Squash','Badminton'];
        $count = count($sports);

        for($i = 0; $i < $count ; $i++)
        {
            Sports::create([
                'name' => $sports[$i]
            ]);
        }
    }
}
