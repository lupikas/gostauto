<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Romualdas D.',
                'email' => 'hello@prodev.lt',
                'password' => Hash::make('abbsuud7wpdfr3r'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Zygimantas',
                'email' => 'zygimantas@expertmedia.lt',
                'password' => Hash::make('zygimantas123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Edgaras',
                'email' => 'edgaras@expertmedia.lt',
                'password' => Hash::make('edgaras123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        User::insert($data);
    }
}
