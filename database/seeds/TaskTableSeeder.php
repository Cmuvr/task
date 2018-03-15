<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tasks')->delete();

        for ($i=1; $i<4; $i++){
            Task::create([
                'id' => $i,
                'name' => 'Task '.$i,
                'desc' => 'Description Task '.$i,
                'status_id' => $i
            ]);
        }

    }
}
