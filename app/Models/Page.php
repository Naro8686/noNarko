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
 */
class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'title', 'body', 'image', 'seoTitle', 'seoDescription', 'seoKeywords', 'seoText', 'seoBody'];

    public function seo(): object
    {
        $seo = new \stdClass();
        $seo->id = $this->id;
        $seo->slug = $this->slug;
        $seo->title = $this->seoTitle;
        $seo->description = $this->seoDescription;
        $seo->keywords = $this->seoKeywords;
        $seo->text = $this->seoText;
        $seo->body = $this->seoBody;
        return $seo;
    }

    public function url()
    {
        return url($this->slug ?? '/');
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
                Cache::forget("pages");
                Artisan::call("route:clear");
            }
        });
    }
}
