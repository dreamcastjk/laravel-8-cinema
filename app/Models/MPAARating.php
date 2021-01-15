<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\MPAARating.
 *
 * @property int $id
 * @property string $title
 * @property string $value
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|MPAARating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MPAARating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MPAARating query()
 * @method static \Illuminate\Database\Eloquent\Builder|MPAARating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MPAARating whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MPAARating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MPAARating whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MPAARating whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MPAARating whereValue($value)
 * @mixin \Eloquent
 */
class MPAARating extends Model
{
    use HasFactory;
}
