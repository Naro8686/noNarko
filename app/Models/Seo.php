<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

/**
 * App\Models\Seo
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 * @property string|null $description
 * @property string|null $keywords
 * @property string|null $text
 * @property string|null $body
 * @property int $page_id
 * @property-read \App\Models\Page $page
 * @method static \Illuminate\Database\Eloquent\Builder|Seo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Seo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Seo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Seo whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Seo whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Seo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Seo whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Seo wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Seo whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Seo whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Seo whereTitle($value)
 * @mixin \Eloquent
 */
class Seo extends Model
{
    use HasFactory;

    protected $table = 'seo';
    protected $fillable = ['slug', 'title', 'description', 'keywords', 'text', 'body'];
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    protected static function booted()
    {
        static::updated(function ($seo) {
            if ($seo->isDirty()) {
                Cache::forget(Page::BASE);
                Artisan::call("route:clear");
            }
        });
    }
}
