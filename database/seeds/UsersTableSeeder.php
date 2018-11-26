<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        $adminRole = Role::create(['name' => 'Admin']);
        $editorRole = Role::create(['name' => 'Editor']);

        $admin = User::create([
            'name' => 'Juan Admin',
            'email' => 'juan2ramos@gmail.com',
            'country_id' => 1,
            'password' => '123456',
        ]);


        $admin->assignRole($adminRole);

        $editor = User::create([
            'name' => 'Juan Editor',
            'email' => 'juan@artico.io',
            'country_id' => 1,
            'password' => '123456',
        ]);

        $editor->assignRole($editorRole);
    }
}
