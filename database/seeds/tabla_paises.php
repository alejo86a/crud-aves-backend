<?php

use Illuminate\Database\Seeder;
use App\Tont_paise;

class tabla_paises extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $cont=1;
        for ($i = $cont; $i <= 20; $i++) {
            Tont_paise::create([
                'CDPAIS'=>$i,
                'CDZONA'=>rand (1,10),
                'DSNOMBRE'=>'Pais N° '.$i
            ]);  
        }
    }
}
