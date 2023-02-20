<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => '東京タワー',
            'description' => 'これはタイトル1の説明文です',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);
        DB::table('posts')->insert([
            'title' => 'スカイツリー',
            'description' => 'これはタイトル2の説明文です',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);
        DB::table('posts')->insert([
            'title' => '上野公園',
            'description' => 'これはタイトル3の説明文です',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 2,
        ]);
        DB::table('posts')->insert([
            'title' => '平和記念公園',
            'description' => 'これはタイトル4の説明文です',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 2,
        ]);
    }
}
