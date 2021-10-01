<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for($i=1;$i<=10;$i++){
        //   Post::create([
        //     'title'=>'title'.$i,
        //     'content'=>'content'.$i,
        //     'person_in_charge'=>'person_in_charge'.$i,
        //
        //   ]);

     $data = [
        [
          'id'=>1,
          'name'=>'name',
         'content'=>'content',
        // 'person_in_charge'=>'person_in_charge'
          'category_id'=>'1',
         ]
        ];
        DB::table('posts')->insert($data);
         }

    // 初期値を配列で入れる
    //     $data=[];
    //
    //     for($i=1;$i<=10;$i++){
    //       $data[]=[
    //          'id'=>$i,
    //          'name'=>'name'.$i,
    //          'content'=>'content'.$i,
    //        'person_in_charge'=>'person_in_charge'.$i,
    //        ''
    //    ];

//      }
//      DB::table('posts')->insert($data);
// }
}
