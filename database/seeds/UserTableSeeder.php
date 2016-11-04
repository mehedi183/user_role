<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_user = Role::where('name', 'User')->first();
    	$role_author = Role::where('name', 'Author')->first();
    	$role_admin = Role::where('name', 'Admin')->first();


        $user = new User();
        $user->name = "Mehedi";
        $user->email = "user@gmail.com";
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($role_user);

        $author = new User();
        $author->name = "Hassan";
        $author->email = "author@gmail.com";
        $author->password = bcrypt('author');
        $author->save();
        $author->roles()->attach($role_author);


        $admin = new User();
        $admin->name = "Sovon";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);


    }
}
