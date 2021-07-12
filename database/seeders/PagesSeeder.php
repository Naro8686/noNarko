<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => Page::BASE],
            ['name' => Page::BLOG],
            ['name' => Page::NEWS],
            ['name' => Page::FAQ],
            ['name' => Page::SERVICES],
            ['name' => Page::CASES],
            ['name' => Page::ABC],
            ['name' => Page::REQUESTS],
            ['name' => Page::PRICES],
            ['name' => Page::ADVANTAGE],
            ['name' => Page::WRITE_DOCTOR],
            ['name' => Page::STEPS],
        ];
        foreach ($categories as $category) Category::create($category);
        $blog = Category::whereName(Page::BLOG)->whereNull('parent_id')->first();
        $news = Category::whereName(Page::NEWS)->whereNull('parent_id')->first();
        $cases = Category::whereName(Page::CASES)->whereNull('parent_id')->first();
        Category::insert([
            ['name' => 'ЛЕЧЕНИЕ', 'parent_id' => $blog->id],
            ['name' => 'НАПРАВЛЕНИЕ', 'parent_id' => $blog->id],
            ['name' => 'ВИД', 'parent_id' => $blog->id],
            ['name' => 'СФЕРА', 'parent_id' => $blog->id],
            ['name' => 'ЛЕЧЕНИЕ', 'parent_id' => $news->id],
            ['name' => 'НАПРАВЛЕНИЕ', 'parent_id' => $news->id],
            ['name' => 'ВИД', 'parent_id' => $news->id],
            ['name' => 'СФЕРА', 'parent_id' => $news->id],
            ['name' => 'ЛЕЧЕНИЕ', 'parent_id' => $cases->id],
            ['name' => 'НАПРАВЛЕНИЕ', 'parent_id' => $cases->id],
            ['name' => 'ВИД', 'parent_id' => $cases->id],
            ['name' => 'СФЕРА', 'parent_id' => $cases->id],
        ]);

        $text = "СЕО текст";
        $body = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the";
        $pages = [
            [
                'name' => 'home',
                'slug' => '',
                'title' => 'Главная',
                'image' => null,
                'seoTitle' => 'Главная',
            ],
            [
                'name' => 'about',
                'slug' => 'about',
                'title' => 'О нас',
                'image' => asset('img/pages/about/default.png'),
                'seoTitle' => 'О компании',
            ],
            [
                'name' => 'blog',
                'slug' => 'blog',
                'title' => 'Блог',
                'image' => null,
                'seoTitle' => 'Блог',
            ],
            [
                'name' => 'news',
                'slug' => 'news',
                'title' => 'Новости',
                'image' => null,
                'seoTitle' => 'Новости',
            ],
            [
                'name' => 'faq',
                'slug' => 'faq',
                'title' => 'Часто задаваемые вопросы',
                'image' => null,
                'seoTitle' => 'Вопросы и ответы',
            ],
            [
                'name' => 'contacts',
                'slug' => 'contacts',
                'title' => 'Контакты',
                'image' => null,
                'seoTitle' => 'Контакты',
            ],
            [
                'name' => 'services',
                'slug' => 'services',
                'title' => 'Услуги',
                'image' => null,
                'seoTitle' => 'Услуги',
            ],
            [
                'name' => 'treatmentProgram',
                'slug' => 'treatment-program',
                'title' => 'О программе лечения',
                'image' => null,
                'seoTitle' => 'О программе лечения',
            ],
            [
                'name' => 'abc',
                'slug' => 'abc',
                'title' => 'Азбука наркомана',
                'image' => null,
                'seoTitle' => 'Азбука наркомана',
            ],
            [
                'name' => 'cases',
                'slug' => 'cases',
                'title' => 'Успешные кейсы лечения',
                'image' => null,
                'seoTitle' => 'Кейсы лечения',
            ],
            [
                'name' => 'requests',
                'slug' => 'requests',
                'title' => 'Отзывы',
                'image' => null,
                'seoTitle' => 'Отзывы',
            ],
            [
                'name' => 'prices',
                'slug' => 'prices',
                'title' => 'Прайс на услуги',
                'image' => null,
                'seoTitle' => 'Прайс на услуги',
            ],
            [
                'name' => 'writeToDoctor',
                'slug' => 'write-to-doctor',
                'title' => 'Написать врачу',
                'image' => null,
                'seoTitle' => 'Написать врачу',
            ],
            [
                'slug' => null,
                'image' => null,
                'seoTitle' => null,
                'name' => 'advantage',
                'title' => 'Преймущества компании',
                'body' => '',
            ],
            [
                'slug' => null,
                'image' => null,
                'seoTitle' => null,
                'name' => 'ourServices',
                'title' => 'Наши услуги',
                'body' => '',
            ],
            [
                'slug' => null,
                'image' => null,
                'seoTitle' => null,
                'name' => 'treatmentSteps',
                'title' => 'Шаги лечения',
                'body' => '',
            ],
            [
                'slug' => null,
                'image' => asset('img/pages/submitApplication/default.png'),
                'seoTitle' => null,
                'name' => 'submitApplication',
                'title' => 'Оставить заявку',
                'body' => '',
            ],
            [
                'slug' => null,
                'image' => null,
                'seoTitle' => null,
                'name' => 'giveFeedback',
                'title' => 'Оставить отзыв',
                'desc' => 'Проходили ли вы лечение?',
                'body' => '',
            ],
            [
                'slug' => null,
                'image' => null,
                'seoTitle' => __('Page not found'),
                'name' => 'error404',
                'title' => __('Page not found'),
                'body' => '<h1 style="text-align:center"><strong><big>404</big></strong></h1><hr /><p style="text-align:center"><a href="' . url('/') . '">Возврат на главную страницу</a></p>',
            ],
        ];

        $category = Category::whereName(Page::BASE)->whereNull('parent_id')->first();
        foreach ($pages as $data) {
            $page = $category->pages()->create([
                'name' => $data['name'],
                'title' => $data['title'],
                'desc' => $data['desc'] ?? null,
                'body' => $data['body'] ?? null,
                'image' => $data['image'],
            ]);
            if (!is_null($data['slug'])) $page->seo()->create([
                'slug' => $data['slug'],
                'title' => $data['seoTitle'],
                'text' => $text,
                'body' => $body
            ]);
        }
    }
}
