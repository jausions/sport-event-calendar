<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class representing a sports event
 *
 * @property int $id
 * @property \DateTime $created_at
 * @property \DateTime $updated_at
 * @property \DateTime $deleted_at
 * @property \DateTime $starting_at
 * @property SportsCategory $category
 * @property string $title
 * @property string $slug
 */
class SportsEvent extends Model
{
    protected $dates = [
        'starting_at',
    ];

    /**
     * A sports event has one category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * @see SportsCategory
     */
    public function category()
    {
        return $this->belongsTo('App\SportsCategory', '_SPORTS_CATEGORY_ID');
    }
}
