<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TUserMessage
 *
 * @property int $id
 * @property int $user_id
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TUserMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TUserMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TUserMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TUserMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TUserMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TUserMessage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TUserMessage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TUserMessage whereUserId($value)
 * @mixin \Eloquent
 */
class TUserMessage extends Model
{
    // ユーザーの呟きを保存するテーブルクラスです
}
