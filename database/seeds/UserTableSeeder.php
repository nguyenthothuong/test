<?php

use Illuminate\Database\Seeder;

class UsserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        $currentTime=date('Y-m-d H:i:s');
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => Str::random(10),
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$7c565QlZCU54BHNnR.Wt4.q/is7Gis83igawDCjp4YrP5JL6fUEjG',
                'address' => 'Điện phong, Điện Bàn, Quảng Nam',
                'phone' => '9999999',
                'active' => 1,
                'role_id' => 2,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 2,
                'name' => Str::random(10),
                'email' => 'admin2@gmail.com',
                'password' => '$2y$10$7c565QlZCU54BHNnR.Wt4.q/is7Gis83igawDCjp4YrP5JL6fUEjG',
                'address' => 'Điện phong, Điện Bàn, Quảng Nam',
                'phone' => '9999999',
                'active' => 1,
                'role_id' => 1,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
 
        ]);
    }
}
