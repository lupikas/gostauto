<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class DoctorsTableSeeder extends Seeder
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
                'title' => 'Evelina Ginevičiūtė',
                'slug' => Str::slug('Evelina Ginevičiūtė'),
                'specialty' => json_encode([
                    'lt' => 'Burnos chirurgė',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Laura Mekšraitytė',
                'slug' => Str::slug('Laura Mekšraitytė'),
                'specialty' => json_encode([
                    'lt' => 'Gydytoja odontologė',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Saulė Guronskienė',
                'slug' => Str::slug('Saulė Guronskienė'),
                'specialty' => json_encode([
                    'lt' => 'Gydytoja odontologė',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Ula Česnakavičiūtė',
                'slug' => Str::slug('Ula Česnakavičiūtė'),
                'specialty' => json_encode([
                    'lt' => 'Burnos higienistė',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        Doctor::insert($data);
    }
}
