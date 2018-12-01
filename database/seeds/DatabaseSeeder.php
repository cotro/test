<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $user = factory(App\User::class)->create(['email' => 'admin@local.fr','is_admin' => '1']);
            $user2 = factory(App\User::class)->create(['name' => 'user', 'email' => 'user@local.fr','is_admin' => '0']);

            $module1 = factory(App\Module::class)->create(['name' => 'animation Adulte']);
            $module2 = factory(App\Module::class)->create(['name' => 'animation enfant']);
            $module3 = factory(App\Module::class)->create(['name' => 'dj']);
            $module4 = factory(App\Module::class)->create(['name' => 'pianiste']);

            $forfait = factory(App\Forfait::class)->create(['name' => 'basique']);
            $forfait = factory(App\Forfait::class)->create(['name' => 'vacance']);
            $forfait = factory(App\Forfait::class)->create(['name' => 'évenement']);
            $forfait = factory(App\Forfait::class)->create(['name' => 'luxe']);
    }
}
