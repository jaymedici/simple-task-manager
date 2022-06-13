<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DefaultProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Default Project',
                'description' => 'A default project to help you started',
                'created_at' => '2022-06-13 13:00:00',
                'updated_at' => '2022-06-13 13:00:00'
            )
        ));
    }
}
