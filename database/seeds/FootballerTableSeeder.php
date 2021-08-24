<?php

use Illuminate\Database\Seeder;
use App\Footballer;
class FootballerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footballer::truncate();
        Footballer::create([
            'name' => 'Sadio Mane',
            'position' => 'Winger',
        ]);
        Footballer::create([
            'name' => 'Oxlade Chamberlain',
            'position' => 'Midfielder',
        ]);
        Footballer::create([
            'name' => 'Virgil Van Dijk',
            'position' => 'Defender',
        ]);
        Footballer::create([
            'name' => 'Allison Becker',
            'position' => 'Goalkeeper',
        ]);
    }
}
