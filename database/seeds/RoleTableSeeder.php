<?php

use Illuminate\Database\Seeder;
use App\Role;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = "User";
        $role_user->description = "This is a normal user";
        $role_user->save();

        $role_author = new Role();
        $role_author->name = "Author";
        $role_author->description = "This is an author";
        $role_author->save();

        $role_admin = new Role();
        $role_admin->name = "Admin";
        $role_admin->description = "This is an admin";
        $role_admin->save();
    }
}
