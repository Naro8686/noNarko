<?php

use App\Models\Page;

function dynamicRoute($name)
{
    $page = page($name);
    return $page->exists ? url($page->slug) : null;
}

function page($name, $select = null)
{
    $page = pages()->where('name', $name)->first();
    if (is_null($page)) {
        Cache::forget("pages");
        $page = Page::whereName($name)->firstOrNew();
    }
    return !is_null($select) ? $page->$select : $page;
}

function pages()
{
    return Cache::rememberForever('pages', function () {
        return Page::get();
    });
}
