<?php

use Illuminate\Database\Seeder;

class DepartmentsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('departments')->insert([
        'name' => 'Explotación',
      ]);
      DB::table('departments')->insert([
        'name' => 'Desarrollo',
      ]);
      DB::table('departments')->insert([
        'name' => 'Ejecución',
      ]);
    }
}
