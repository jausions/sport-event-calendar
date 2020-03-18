<?php

use App\SportsCategory;
use App\SportsEvent;
use Illuminate\Database\Seeder;

class SportsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SportsCategory::class, 5)
            ->create()
            ->each(function (SportsCategory $category) {
                factory(SportsEvent::class, 5)
                    ->create([
                        '_SPORTS_CATEGORY_ID' => $category->id,
                    ]);
            });
    }
}
