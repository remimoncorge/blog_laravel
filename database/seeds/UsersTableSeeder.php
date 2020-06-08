<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 10)->create()->each(function ($user) {
            $user->posts()->save(factory(App\Post::class)->create());
        });

        // ajout d'un admin
        
        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => 'admin',
            'remember_token' => Str::random(10),
        ]); 
 
    }
}
