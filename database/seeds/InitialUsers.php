<?php

use Illuminate\Database\Seeder;
use Coinvit\User;
class InitialUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
          'name' => "Fake User",
          'email' => "fake_user@gmail.com",
          'password' => Hash::make("fakeuser"),
          'level'=>"member",
      ]);
      User::create([
          'name' => "Fake Funder",
          'email' => "fake_funder@gmail.com",
          'password' => Hash::make("fakefunder"),
          'level'=>"funder",
      ]);
      User::create([
          'name' => "Fake Moderator",
          'email' => "fake_moderator@gmail.com",
          'password' => Hash::make("fakemoderator"),
          'level'=>"moderator",
      ]);
      User::create([
          'name' => "Fake Admin",
          'email' => "fake_admin@gmail.com",
          'password' => Hash::make("fakeadmin"),
          'level'=>"admin",
      ]);
    }
}
