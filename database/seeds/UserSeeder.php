<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();
      DB::table('role_user')->truncate();

      $adminRole = Role::where('name', 'admin')->first();
      $userRole = Role::where('name', 'user')->first();

      User::create([
        'name' => 'Shalika Ranathunga',
        'email' => 'shalika@root.lk',
        'password' => Hash::make('password'),
      ])->roles()->attach($adminRole);

      User::create([
        'name' => 'Normal User',
        'email' => 'user@app.com',
        'password' => Hash::make('password'),
      ])->roles()->attach($userRole);

    }
}
