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
        'surname' => 'Jones',
        'email' => 'miscojones@gmail.com',
        'telephone' => '987456123'

      ]);
      DB::table('employees')->insert([
        'name' => 'Elfo',
        'surname' => 'Yador',
        'email' => 'elfoyador@gmail.com',
        'telephone' => '000000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Ana',
        'surname' => 'Conda',
        'email' => 'anaconda@gmail.com',
        'telephone' => '010000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Rosa',
        'surname' => 'Melano',
        'email' => 'rosamelano@gmail.com',
        'telephone' => '020000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Casa',
        'surname' => 'nova',
        'email' => 'casanova@gmail.com',
        'telephone' => '030000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Don',
        'surname' => 'Limpio',
        'email' => 'donlimpio@gmail.com',
        'telephone' => '040000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Lola',
        'surname' => 'Mento',
        'email' => 'lolamento@gmail.com',
        'telephone' => '050000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Armando',
        'surname' => 'Parda',
        'email' => 'armandoparda@gmail.com',
        'telephone' => '060000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Ana',
        'surname' => 'Tomía',
        'email' => 'anatomia@gmail.com',
        'telephone' => '070000'
      ]);
      DB::table('employees')->insert([
        'name' => 'Dolores',
        'surname' => 'Delano',
        'email' => 'doloresdelano@gmail.com',
        'telephone' => '080000'
      ]);
    }
}
