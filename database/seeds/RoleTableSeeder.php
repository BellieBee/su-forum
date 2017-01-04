<?php

use Illuminate\Database\Seeder;
use HttpOz\Roles\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $diamondRole = Role::create([
        	'name' => 'Diamond',
        	'slug' => 'diamond',
        	'description' => 'Diamond is admin, superior by other gems and humans.',
        	'group' => 'default',
        ]);

        $gemRole = Role::create([
        	'name' => 'Gem',
        	'slug' => 'gem',
        	'description' => 'Gem is moderator or privilegiate users.',
        ]);

        $humanRole = Role::create([
        	'name' => 'Human',
        	'slug' => 'human',
        	'description' => 'Human is a comon user.',
        ]);
    }
}
