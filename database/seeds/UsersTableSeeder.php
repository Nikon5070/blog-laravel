<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_user = Role::where('name','User')->first();
        $role_author = Role::where('name','Author')->first();
        $role_admin = Role::where('name','Admin')->first();

        $user = new User();
        $user->name = 'Alex';
        $user->email = 'alex@example.com';
        $user->password = bcrypt('visitor');
        $user->save();
        $user->roles()->attach($role_user);

        $author = new User();
        $author->name = 'Victor';
        $author->email = 'victor@example.com';
        $author->password = bcrypt('author');
        $author->save();
        $user->roles()->attach($role_author);

        $admin = new User();
        $admin->name = 'Nikita';
        $admin->email = 'nikita@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $user->roles()->attach($role_admin);


    }
}
