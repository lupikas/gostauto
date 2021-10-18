<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProceduresTableSeeder extends Seeder
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
                'title' => json_encode([
                    'lt' => 'Odontologija',
                    'en' => '',
                    'ru' => '',
                ]),
                'slug' => Str::slug('Odontologija'),
                'desc' => json_encode([
                    'lt' => 'Lorem ipsum dolor sit amet...',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 1,
            ],
            [
                'title' => json_encode([
                    'lt' => 'Periodontologija',
                    'en' => '',
                    'ru' => '',
                ]),
                'slug' => Str::slug('Periodontologija'),
                'desc' => json_encode([
                    'lt' => 'Lorem ipsum dolor sit amet...',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 2
            ],
            [
                'title' => json_encode([
                    'lt' => 'Protezavimas',
                    'en' => '',
                    'ru' => '',
                ]),
                'slug' => Str::slug('Protezavimas'),
                'desc' => json_encode([
                    'lt' => 'Lorem ipsum dolor sit amet...',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 3
            ],
            [
                'title' => json_encode([
                    'lt' => 'Implantacija',
                    'en' => '',
                    'ru' => '',
                ]),
                'slug' => Str::slug('Implantacija'),
                'desc' => json_encode([
                    'lt' => 'Lorem ipsum dolor sit amet...',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 4
            ],
            [
                'title' => json_encode([
                    'lt' => 'Endodontija',
                    'en' => '',
                    'ru' => '',
                ]),
                'slug' => Str::slug('Endodontija'),
                'desc' => json_encode([
                    'lt' => 'Lorem ipsum dolor sit amet...',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 5
            ],
            [
                'title' => json_encode([
                    'lt' => 'Ortodontija',
                    'en' => '',
                    'ru' => '',
                ]),
                'slug' => Str::slug('Ortodontija'),
                'desc' => json_encode([
                    'lt' => 'Lorem ipsum dolor sit amet...',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 6
            ],
            [
                'title' => json_encode([
                    'lt' => 'Chirurgija',
                    'en' => '',
                    'ru' => '',
                ]),
                'slug' => Str::slug('Chirurgija'),
                'desc' => json_encode([
                    'lt' => 'Lorem ipsum dolor sit amet...',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 7
            ],
            [
                'title' => json_encode([
                    'lt' => 'Vaikų odontologija',
                    'en' => '',
                    'ru' => '',
                ]),
                'slug' => Str::slug('Vaikų odontologija'),
                'desc' => json_encode([
                    'lt' => 'Lorem ipsum dolor sit amet...',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 8
            ],
            [
                'title' => json_encode([
                    'lt' => 'Burnos higiena',
                    'en' => '',
                    'ru' => '',
                ]),
                'slug' => Str::slug('Burnos higiena'),
                'desc' => json_encode([
                    'lt' => 'Lorem ipsum dolor sit amet...',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 9
            ],
            [
                'title' => json_encode([
                    'lt' => 'Dantų balinimas',
                    'en' => '',
                    'ru' => '',
                ]),
                'slug' => Str::slug('Dantų balinimas'),
                'desc' => json_encode([
                    'lt' => 'Lorem ipsum dolor sit amet...',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 10
            ],
            [
                'title' => json_encode([
                    'lt' => 'Bendros paslaugos',
                    'en' => '',
                    'ru' => '',
                ]),
                'slug' => Str::slug('Bendros paslaugos'),
                'desc' => json_encode([
                    'lt' => 'Lorem ipsum dolor sit amet...',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 11
            ],
            [
                'title' => json_encode([
                    'lt' => 'TLK kompensavimas',
                    'en' => '',
                    'ru' => '',
                ]),
                'slug' => Str::slug('TLK kompensavimas'),
                'desc' => json_encode([
                    'lt' => 'Lorem ipsum dolor sit amet...',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 12
            ],
            [
                'title' => json_encode([
                    'lt' => 'Kainos',
                    'en' => '',
                    'ru' => '',
                ]),
                'slug' => Str::slug('Kainos'),
                'desc' => json_encode([
                    'lt' => 'Lorem ipsum dolor sit amet...',
                    'en' => '',
                    'ru' => '',
                ]),
                'sort_order' => 13
            ],
        ];

        Procedure::insert($data);
    }
}
