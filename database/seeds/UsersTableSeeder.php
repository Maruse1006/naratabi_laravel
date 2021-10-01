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
      $data[]=[
         'id'=>'3',
         'name'=>'maru1006',
         'email'=>'aaa1006@.gmail',
         'email_verified_at'=>null,
         'password'=>Hash::make('ivusa1006'),
         'remember_token'=>'',
         'created_at'=>null,
         'updated_at'=>null,
   ];

 DB::table('users')->insert($data);
    }
}
