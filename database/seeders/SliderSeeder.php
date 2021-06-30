<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultImage = public_path(Slider::IMAGE_PATH . '/coworkers.svg');
        if (file_exists($defaultImage)) {
            $fileName = time() . '.svg';
            if (File::copy($defaultImage, public_path(Slider::IMAGE_PATH . "/$fileName"))) {
                Slider::create([
                    'img' => $fileName,
                    'title' => 'Посморите на наркотики глазами наркомана',
                    'desc' => 'Спросить совета, поделиться своей болью, своими переживаниями, и получив совет от тех, кому выпало пройти по этой дорожке дальше них, может быть успокоиться, может быть найти в себе силы для дальнейших действий.',
                    'button' => [
                        'text' => 'Подробнее',
                        'link' => '#'
                    ],
                ]);
            }
        }
    }
}
