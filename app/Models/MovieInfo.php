<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\MovieInfo
 *
 * @property int $id
 * @property int $movie_id
 * @property string $production_year
 * @property int|null $budget
 * @property int|null $us_fees Сборы в США
 * @property int|null $worldwide_fees Сборы в мире
 * @property string|null $premiere_in_russia
 * @property string|null $premiere_worldwide
 * @property int|null $is_imax
 * @property int|null $is_tree_d
 * @property int|null $duration
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Movie $movie
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo whereBudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo whereIsImax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo whereIsTreeD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo whereMovieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo wherePremiereInRussia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo wherePremiereWorldwide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo whereProductionYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo whereUsFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieInfo whereWorldwideFees($value)
 * @mixin \Eloquent
 */
class MovieInfo extends Model
{
    use HasFactory;

    /**
     * Movie that info belongs.
     *
     * @return BelongsTo
     */
    public function movie() : BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }
}
