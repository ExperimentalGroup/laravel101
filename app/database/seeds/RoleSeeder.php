<?php

class RoleSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        Role::create(array('name' => 'Administrator'));
        Role::create(array('name' => 'Manager'));
        Role::create(array('name' => 'Employee'));
    }
}