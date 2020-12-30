<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'title' => 'テストデータ',
            'lyrics' => Str::random(10).'♪',
            'music_title' => 'テストミュージック',
            'artist' => 'UVERworld',
            'user_id' => 1,
        ]);
    }
}
