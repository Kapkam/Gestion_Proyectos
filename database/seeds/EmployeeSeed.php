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
      DB::table('employees')->insert([
        'name' => 'Misco',
        'department_id' => '1',
        'surname' => 'Jones',
        'email' => 'miscojones@gmail.com',
        'telephone' => '987456123'

      ]);
      DB::table('employees')->insert([
        'name' => 'Elfo',
        'department_id' => '1',
        'surname' => 'Yador',
        'email' => 'elfoyador@gmail.com',
        'telephone' => '000000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Ana',
        'department_id' => '1',
        'surname' => 'Conda',
        'email' => 'anaconda@gmail.com',
        'telephone' => '010000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Rosa',
        'department_id' => '1',
        'surname' => 'Melano',
        'email' => 'rosamelano@gmail.com',
        'telephone' => '020000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Casa',
        'department_id' => '2',
        'surname' => 'nova',
        'email' => 'casanova@gmail.com',
        'telephone' => '030000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Don',
        'department_id' => '2',
        'surname' => 'Limpio',
        'email' => 'donlimpio@gmail.com',
        'telephone' => '040000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Lola',
        'department_id' => '2',
        'surname' => 'Mento',
        'email' => 'lolamento@gmail.com',
        'telephone' => '050000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Armando',
        'department_id' => '2',
        'surname' => 'Parda',
        'email' => 'armandoparda@gmail.com',
        'telephone' => '060000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Ana',
        'department_id' => '3',
        'surname' => 'Tomía',
        'email' => 'anatomia@gmail.com',
        'telephone' => '070000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Dolores',
        'department_id' => '3',
        'surname' => 'Delano',
        'email' => 'doloresdelano@gmail.com',
        'telephone' => '080000'
      ]);
    }
}
