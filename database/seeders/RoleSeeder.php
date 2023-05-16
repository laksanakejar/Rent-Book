<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Role::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     'admin', 'client'
        // ];

        // foreach($data as $value)
        // {
        //     Role::insert([
        //         'name' => $value,
        //     ]);
        // }
        
        DB::table('users')->insert([
            [
                'name' => 'Laksana Nuur Adi Candra',
                'email' => 'laksananuuradicandra@gmail.com',
                'password' => Hash::make('123456789'),
                'phone' => '081513944076',
                'address' => 'cicurug',
                'role_id' => true,
            ],
            [
                'name' => 'Sei',
                'email' => 'sei@gmail.com',
                'password' => Hash::make('sei123'),
                'phone' => '081513944077',
                'address' => 'sukasari',
                'role_id' => false,
            ],
            [
                'name' => 'Lail Daiki',
                'email' => 'laildaiki@gmail.com',
                'password' => Hash::make('lail123'),
                'phone' => '081513944076',
                'address' => 'v',
                'role_id' => true,
            ],
            [
                'name' => 'Nazib Akbar',
                'email' => 'najib.wikrama4@gmail.com',
                'password' => Hash::make('najib'),
                'phone' => '098765432112',
                'address' => 'sukasari',
                'role_id' => false,
            ],
        ]);
    }
}
