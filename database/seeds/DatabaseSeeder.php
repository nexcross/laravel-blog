<?php

use App\Role;
use App\Token;
use App\User;
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
        // Roles
        Role::firstOrCreate(['name' => Role::ROLE_EDITOR]);
        $role_admin = Role::firstOrCreate(['name' => Role::ROLE_ADMIN]);

        // Users
        if (User::where('email', 'me@aqhmal.com')->doesntExist()) {
            $user = User::create([
                'name' => 'Aqhmal Hafizi',
                'email' => 'me@aqhmal.com',
                'password' => 'secret'
            ]);

            $user->roles()->attach($role_admin->id);
        }

        // API tokens
        User::where('api_token', null)->get()->each->update([
            'api_token' => Token::generate()
        ]);
    }
}
