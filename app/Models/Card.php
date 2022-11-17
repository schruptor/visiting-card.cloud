<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Card
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property int $active
 * @property string $uuid
 * @property int $cardable_id
 * @property string $cardable_type
 * @property int|null $card_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $cardable
 * @method static \Illuminate\Database\Eloquent\Builder|Card newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Card newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Card query()
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereCardableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereCardableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereUuid($value)
 * @mixin \Eloquent
 */
class Card extends Model
{
    protected $guarded = [];

    public function cardable(): MorphTo
    {
        return $this->morphTo();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
