<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Statuses')->delete();
        Status::create([
            'id' => 1,
            'name' => 'TODO',
        ]);
        Status::create([
            'id' => 2,
            'name' => 'DOING',
        ]);
        Status::create([
            'id' => 3,
            'name' => 'DONE',
        ]);
    }
}
