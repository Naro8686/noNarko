<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;

/**
 * App\Models\Page
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $title
 * @property string|null $body
 * @property string|null $image
 * @property string|null $seoTitle
 * @property string|null $seoDescription
 * @property string|null $seoKeywords
 * @property string|null $seoText
 * @property string|null $seoBody
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSeoBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSeoKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSeoText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $category_id
 * @property string|null $desc
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Seo|null $seo
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereDesc($value)
 * @property string|null $note
 * @property string|null $price
 * @property-read \Illuminate\Database\Eloquent\Collection|Page[] $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page wherePrice($value)
 */
class Page extends Model
{
    use HasFactory;

    const BASE = "pages";
    const BLOG = "blog";
    const NEWS = "news";
    const SERVICES = "services";
    const CASES = "cases";
    const FAQ = "faq";
    const ABC = "abc";
    const REQUESTS = "requests";
    const PRICES = "prices";
    const ADVANTAGE = "advantage";
    const WRITE_DOCTOR = "writeToDoctor";
    const STEPS = "steps";

    protected $fillable = ['category_id', 'name', 'title', 'note', 'price', 'desc', 'body', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function posts()
    {
        return $this->belongsToMany(self::class, 'page_posts', 'page_id', 'post_id');
    }

    public function advantages()
    {
        return $this->posts()->whereHas('category', function ($query) {
            $query->where('parent_id', null);
            $query->where('name', self::ADVANTAGE);
        });
    }

    public function blog()
    {
        return $this->posts()->whereHas('category.parent.parent', function ($query) {
            $query->where('parent_id', null);
            $query->where('name', self::BLOG);
        });
    }

    public function services()
    {
        return $this->posts()->whereHas('category.parent', function ($query) {
            $query->where('parent_id', null);
            $query->where('name', self::SERVICES);
        });
    }

    public function seo(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Seo::class);
    }

    public function url()
    {
        return $this->seo ? url($this->seo->slug) : url('/');
    }

    public function deleteImg()
    {
        $deleted = false;
        if (!is_null($this->image) && file_exists($this->image)) {
            $deleted = unlink($this->image);
        }
        return $deleted;
    }

    protected static function booted()
    {
        static::updated(function (Page $page) {
            if ($page->isDirty()) {
                Cache::forget(self::BASE);
                Artisan::call("route:clear");
            }
        });
    }
}
