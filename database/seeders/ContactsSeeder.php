<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'email'         => 'nonarko@gmail.com',
            'phone'         => '+7 (011) 222 33 44',
            'address'       => 'г. Санкт-Петербург ул. Некрасова',
            'schedule'      => ['from' => '09:00', 'to' => '18:00'],
            'social'        => [
                'vk'        => [
                    'title' => 'ВКонтакте',
                    'link'  => 'https://vk.com'
                ],
                'instagram' => [
                    'title' => 'Instagram',
                    'link'      => 'https://www.instagram.com'
                ],
                'youtube'   => [
                    'title' => 'YouTube',
                    'link'  => 'https://www.youtube.com'
                ]
            ],
            'coordinates'   => [
                'x'         => '59.9383279',
                'y'         => '30.3688537'
            ]
        ]);
    }
}
