<?php

use Illuminate\Database\Seeder;

class EmployeeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('empleados')->insert([
        'name' => 'Misco',
        'surname' => 'Jones',
        'email' => 'miscojones@gmail.com',
        'telephone' => '987456123'

      ]);
      DB::table('empleados')->insert([
        'name' => 'Elfo',
        'surname' => 'Yador',
        'email' => 'elfoyador@gmail.com',
        'telephone' => '000000'
      ]);
    }
}
