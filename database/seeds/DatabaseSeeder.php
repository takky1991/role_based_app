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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints
        DB::table('roles')->truncate();
        DB::table('role_user')->truncate();
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints

        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
