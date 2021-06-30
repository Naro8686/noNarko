<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $schedule
 * @property string|null $address
 * @property array|null $social
 * @property array|null $coordinates
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCoordinates($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSchedule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSocial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'phone', 'schedule', 'address', 'social', 'coordinates'];
    protected $attributes = [
        'schedule'=>'{"from":"","to":""}',
        'social'=>'{"vk":{"title":"\u0412\u041a\u043e\u043d\u0442\u0430\u043a\u0442\u0435","link":"","icon":""},"instagram":{"title":"Instagram","link":""},"youtube":{"title":"YouTube","link":""}}',
        'coordinates'=>'{"x":"","y":""}'
    ];
    protected $casts = [
        'schedule' => 'array',
        'social' => 'array',
        'coordinates' => 'array',
    ];
}
