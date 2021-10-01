<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data[]=[
        'id'=>'1',
        'name'=>'maru1006',
        'email'=>'user1006@.gmail',
        'email_verified_at'=>null,
        'password'=>Hash::make('user1006'),
        'remember_token'=>'',
        'created_at'=>null,
        'updated_at'=>null,
  ];

DB::table('admin_users')->insert($data);
   }
  }