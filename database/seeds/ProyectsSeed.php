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
      $startDate = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
        $startDate = date ( 'Y/m/d' , $startDate);
        $endtDate = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
        $endtDate = date ( 'Y/m/d' , $endtDate );
        DB::table('proyects')->insert([
            'name' => Str::random(10),
            'employee_id'=>('1'),
            'title' => Str::random(20),
            'startDate' => $startDate,
            'endDate'  => $endtDate,
            'StimatedHours' => rand(500,3000)
        ]);
        $startDate = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
          $startDate = date ( 'Y/m/d' , $startDate);
          $endtDate = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
          $endtDate = date ( 'Y/m/d' , $endtDate );
          DB::table('proyects')->insert([
              'name' => Str::random(10),
              'employee_id'=>('2'),
              'title' => Str::random(20),
              'startDate' => $startDate,
              'endDate'  => $endtDate,
              'StimatedHours' => rand(500,3000)
          ]);
        $startDate = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
          $startDate = date ( 'Y/m/d' , $startDate);
          $endtDate = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
          $endtDate = date ( 'Y/m/d' , $endtDate );
          DB::table('proyects')->insert([
              'name' => Str::random(10),
              'employee_id'=>('3'),
              'title' => Str::random(20),
              'startDate' => $startDate,
              'endDate'  => $endtDate,
              'StimatedHours' => rand(500,3000)
          ]);
        $startDate = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
          $startDate = date ( 'Y/m/d' , $startDate);
          $endtDate = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
          $endtDate = date ( 'Y/m/d' , $endtDate );
          DB::table('proyects')->insert([
              'name' => Str::random(10),
              'employee_id'=>('4'),
              'title' => Str::random(20),
              'startDate' => $startDate,
              'endDate'  => $endtDate,
              'StimatedHours' => rand(500,3000)
          ]);
        $startDate = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
          $startDate = date ( 'Y/m/d' , $startDate);
          $endtDate = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
          $endtDate = date ( 'Y/m/d' , $endtDate );
          DB::table('proyects')->insert([
              'name' => Str::random(10),
              'employee_id'=>('5'),
              'title' => Str::random(20),
              'startDate' => $startDate,
              'endDate'  => $endtDate,
              'StimatedHours' => rand(500,3000)
          ]);
        $startDate = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
          $startDate = date ( 'Y/m/d' , $startDate);
          $endtDate = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
          $endtDate = date ( 'Y/m/d' , $endtDate );
          DB::table('proyects')->insert([
              'name' => Str::random(10),
              'employee_id'=>('6'),
              'title' => Str::random(20),
              'startDate' => $startDate,
              'endDate'  => $endtDate,
              'StimatedHours' => rand(500,3000)
          ]);
        $startDate = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
          $startDate = date ( 'Y/m/d' , $startDate);
          $endtDate = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
          $endtDate = date ( 'Y/m/d' , $endtDate );
          DB::table('proyects')->insert([
              'name' => Str::random(10),
              'employee_id'=>('7'),
              'title' => Str::random(20),
              'startDate' => $startDate,
              'endDate'  => $endtDate,
              'StimatedHours' => rand(500,3000)
          ]);
        $startDate = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
          $startDate = date ( 'Y/m/d' , $startDate);
          $endtDate = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
          $endtDate = date ( 'Y/m/d' , $endtDate );
          DB::table('proyects')->insert([
              'name' => Str::random(10),
              'employee_id'=>('8'),
              'title' => Str::random(20),
              'startDate' => $startDate,
              'endDate'  => $endtDate,
              'StimatedHours' => rand(500,3000)
          ]);
        $startDate = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
          $startDate = date ( 'Y/m/d' , $startDate);
          $endtDate = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
          $endtDate = date ( 'Y/m/d' , $endtDate );
          DB::table('proyects')->insert([
              'name' => Str::random(10),
              'employee_id'=>('9'),
              'title' => Str::random(20),
              'startDate' => $startDate,
              'endDate'  => $endtDate,
              'StimatedHours' => rand(500,3000)
          ]);
        $startDate = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
          $startDate = date ( 'Y/m/d' , $startDate);
          $endtDate = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
          $endtDate = date ( 'Y/m/d' , $endtDate );
          DB::table('proyects')->insert([
              'name' => Str::random(10),
              'employee_id'=>('10'),
              'title' => Str::random(20),
              'startDate' => $startDate,
              'endDate'  => $endtDate,
              'StimatedHours' => rand(500,3000)
          ]);

    }
}
