<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();
        for($i=1; $i<4; $i++){
            for($j=1; $j<4; $j++){
                Comment::create([
                    'task_id' => $i,
                    'desc' => 'Description comment №'.$j.' for task'
                ]);
            }
        }
    }
}
