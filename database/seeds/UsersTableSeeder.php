<?php

use Illuminate\Database\Seeder;
use HttpOz\Roles\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = new User();
        $admin->name = 'White Diamond';
        $admin->email = 'whitediamond@homeworld.com';
        $admin->password = bcrypt('diamond1234');
        $admin->country = 'Homeworld';
        $admin->id_role = '1';
        $admin->address = 'Palace';
        $admin->phone = '999 999 999';
        $admin->birthdate = '1990-02-09';
        $admin->save();

        $gem = new User();
        $gem->name = 'Pearl';
        $gem->email = 'pearl@crystalgem.com';
        $gem->password = bcrypt('pearl1234');
        $gem->country = 'Earth';
        $gem->id_role = '2';
        $gem->address = 'Beach City';
        $gem->phone = '555 555 555';
        $gem->birthdate = '1991-02-22';
        $gem->save();

        $user = new User();
        $user->name = 'Steven Universe';
        $user->email = 'millionarie.tiger@crystalgem.com';
        $user->password = bcrypt('steven1234');
        $user->country = 'Earth';
        $user->id_role = '3';
        $user->address = 'Beach City';
        $user->phone = '943 999 888';
        $user->birthdate = '1993-12-11';
        $user->save();
    }
}