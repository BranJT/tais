<?php

use Illuminate\Database\Seeder;
use App\Model\Consumidor;

class ConsumidorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('consumidor')->delete();

        $consumidor = new Consumidor();
        $consumidor->empresa_id = 1;
        $consumidor->nombre = 'DINO SRL';
        $consumidor->imagen = 'dino.png';
        $consumidor->nivel = 0;
        $comsumidor->dependencia = 0;
        $consumidor->save();

    }
}
