<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(EmployeeSeed::class);
      $this->call(ProyectsSeed::class);
      $this->call(DepartmentsSeed::class);
    }
}
