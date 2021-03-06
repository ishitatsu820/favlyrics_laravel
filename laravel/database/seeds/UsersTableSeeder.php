<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'test01' ,
            'email' => 'test01@sample.com',
            'password' => bcrypt('test01'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),            
        ]);
    }
}
