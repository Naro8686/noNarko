<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Advantage
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Advantage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Advantage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Advantage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Advantage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advantage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advantage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advantage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Advantage extends Model
{
    use HasFactory;

    protected $fillable = ['title'];
}
