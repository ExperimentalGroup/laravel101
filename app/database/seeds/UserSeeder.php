<?php

class UserSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $roles = Role::get();

        // dd($roles->count());

        for ($role_index = 0; $role_index < $roles->count(); $role_index++) {
        	$role = $roles[$role_index];

        	for ($user_index = 0; $user_index < $role_index + 1; $user_index++) {
        		User::create(array('first_name' => 'Morriel', 'last_name' => 'Aquino', 'role_id' => $role->id));
        	}
        }
    }
}