<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $x = 0;
        while($x<1000){
            DB::table('cars')->insert([
                'userId' => User::all()->random()->id,
                'name' => Str::random(10),
            ]);
            $x++;
        }
        
    }
}
