<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $type
 * @property string|null $name
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $children
 * @property-read int|null $children_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Page[] $pages
 * @property-read int|null $pages_count
 * @property-read Category|null $parent
 */
class Category extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['parent_id', 'name'];

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public static function services()
    {
        return Page::whereHas('category.parent', function ($query) {
            $query->where('parent_id', null);
            $query->where('name', Page::SERVICES);
        });
    }

    public static function abc()
    {
        return Page::whereHas('category.parent', function ($query) {
            $query->where('parent_id', null);
            $query->where('name', Page::ABC);
        });
    }

    public static function cases()
    {
        return Page::whereHas('category.parent.parent', function ($query) {
            $query->where('parent_id', null);
            $query->where('name', Page::CASES);
        });
    }

    public static function blog()
    {
        return Page::whereHas('category.parent.parent', function ($query) {
            $query->where('parent_id', null);
            $query->where('name', Page::BLOG);
        });
    }

    public static function news()
    {
        return Page::whereHas('category.parent.parent', function ($query) {
            $query->where('parent_id', null);
            $query->where('name', Page::NEWS);
        });
    }

    public static function requests()
    {
        return Page::whereHas('category', function ($query) {
            $query->where('parent_id', null);
            $query->where('name', Page::REQUESTS);
        });
    }
    public static function writeDoctor()
    {
        return Page::whereHas('category', function ($query) {
            $query->where('parent_id', null);
            $query->where('name', Page::WRITE_DOCTOR);
        });
    }
}
