<?php

use App\Role;
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
    	$employerRole = Role::whereName('employer')->first();
    	$candidateRole = Role::whereName('candidate')->first();

        factory('App\User')->states('employer')->create()->attachRole($employerRole);
        factory('App\User')->states('candidate')->create()->attachRole($candidateRole);

        factory('App\User', 50)->create()->each(
            function($user) use($candidateRole){
                $user->attachRole($candidateRole);
            }
        );
    }
}
