<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=30; $i++){
            DB::table('projects')->insert([
                'name' => 'project #' . $i,
                'category' => 1,
                'status' => 1,
                'level' => 1,
            ]);
        }
    }
}
