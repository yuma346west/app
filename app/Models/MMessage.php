<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MMessage
 *
 * @property int $id
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MMessage whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MMessage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MMessage extends Model
{
    //
}
