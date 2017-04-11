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
        for ($i=0; $i < 9; $i++) { 
            $rand = mt_rand();
            DB::table('posts')->insert([
                'created_by' => mt_rand(1, 10),
                'category_id' => 5,
                'title' => '这是一条测试新闻'.$rand,
                'keyword' => '',
                'description' => '',
                'content' => '新闻内容 of '.$rand,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            }
    }
}
