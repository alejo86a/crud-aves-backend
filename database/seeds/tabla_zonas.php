<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummycompo\Factory as TestDummy;
use App\Tont_zona;

class tabla_zonas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cont=1;
        for ($i = $cont; $i <= 10; $i++) {
            Tont_zona::create([
                'CDZONA'=>$i,
                'DSNOMBRE'=>'Zona N° '.$i
            ]);  
        }
    }
}
