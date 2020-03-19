<?php

use Illuminate\Database\Seeder;

/**
 * Seeds the database with a user record that uses the settings from the .env configuration
 * file.
 */
class MeSeeder extends Seeder
{
    /**
     * Run the database seed
     *
     * @return void
     */
    public function run()
    {
        /**
         * @var App\User $me
         */
        $me = App\User::where('email', env('MY_EMAIL'))->first();
        if (!$me) {
            $me = factory(App\User::class)->create([
                'name' => env('MY_NAME'),
                'email' => env('MY_EMAIL'),
            ]);
        }
        $this->command->info('To reset password for ' . $me->email . ', go to: ' . url('password/reset'));
    }
}
