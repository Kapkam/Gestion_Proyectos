<?php

use Illuminate\Database\Seeder;

class ProyectsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $fecha = date('Y/m/d');
      for ($i=0;$i<20;$i++) {
        $startDate = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
        $startDate = date ( 'Y/m/d' , $startDate);
        $endDate = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
        $endDate = date ( 'Y/m/d' , $endDate );
          DB::table('proyects')->insert([
            'name' => Str::random(10),
            'title' => Str::random(20),
            'startDate' => $startDate,
            'endDate'  => $endDate,
            'StimatedHours' => rand(500,3000)
        ]);
      }
    }
}
