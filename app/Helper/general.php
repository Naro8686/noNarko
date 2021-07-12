<?php

use App\Models\Category;
use App\Models\Page;
use Illuminate\Database\Eloquent\Builder;

function dynamicRoute($name)
{
    $page = page($name);
    return $page->exists && $page->seo ? url($page->seo->slug) : null;
}

function page($name, $select = null)
{
    $page = pages()->where('name', $name)->first();
    if (is_null($page)) {
        $page = new Page([
            'name' => $name,
        ]);
    }
    return !is_null($select) ? $page->$select : $page;
}

function pages()
{
    $name = Page::BASE;
    return Cache::rememberForever($name, function () use ($name) {
        $category = Category::whereName($name)
            ->whereNull('parent_id')
            ->whereHas('pages', function (Builder $query) {
                $query->whereNotNull('name');
            })
            ->with(['pages', 'pages.seo'])
            ->firstOrNew();
        return $category->pages;
    });
}
