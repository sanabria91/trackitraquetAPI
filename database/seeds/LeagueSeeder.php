<?php

use Illuminate\Database\Seeder;
use App\{Sports,User,League};

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sports = Sports::all()->pluck('id')->toArray();
        $user   = User::all()->pluck('id')->toArray();

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 15; $i++) {
            League::create([
                'sport_id' => $faker->randomElement($sports),
                'name' => $faker->sentence(3),
                'is_public' => $faker->numberBetween(0,1),
                'created_by_id' => $faker->randomElement($user),
                'admin_id' => $faker->randomElement($user)
            ]);
        }
    }
}
