<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
		$admin->name         = 'admin';
		$admin->display_name = ''; // optional
		$admin->description  = ''; // optional
		$admin->save();

		$employer = new Role();
		$employer->name         = 'employer';
		$employer->display_name = ''; // optional
		$employer->description  = ''; // optional
		$employer->save();

		$candidate = new Role();
		$candidate->name         = 'candidate';
		$candidate->display_name = ''; // optional
		$candidate->description  = ''; // optional
		$candidate->save();
    }
}
