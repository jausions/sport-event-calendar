<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class representing a sports category
 *
 * @property int $id
 * @property \DateTime $created_at
 * @property \DateTime $updated_at
 * @property \DateTime $deleted_at
 * @property string $slug
 * @property string $name
 * @property SportsEvent[] $events
 */
class SportsCategory extends Model
{
    /**
     * Sports category have many sports events
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * @see SportsEvent
     */
    public function events()
    {
        return $this->hasMany('App\SportsEvents', '_SPORTS_CATEGORY_ID');
    }
}
