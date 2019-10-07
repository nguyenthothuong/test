<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime=date('Y-m-d H:i:s');
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'Khách hàng',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 2,
                'name' => 'Admin',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 3,
                'name' => 'Quản lý',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 4,
                'name' => 'Nhân viên kho',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 5,
                'name' => 'Nhân viên giao hàng',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
        ]);
    }
}
