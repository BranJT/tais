<?php

use Illuminate\Database\Seeder;
use App\Model\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('table');

        $cliente = new Cliente();
        $cliente->id = 30;
        $cliente->empresa_id = 1;
        $cliente->nombre = 'DINO SRL';
        $cliente->ruc = 12345678911;
        $cliente->imagen = 'dino.png';
        $cliente->nivel = 0;
        $cliente->dependencia = 0;
        $cliente->save();

        $cliente = new Cliente();
        $cliente->empresa_id = 1;
        $cliente->nombre = 'Empresas Mineras';
        $cliente->ruc = 22345678911;
        $cliente->imagen = 'noimage.jpg';
        $cliente->nivel = 0;
        $cliente->dependencia = 0;
        $cliente->save();

        $cliente = new Cliente();
        $cliente->empresa_id = 1;
        $cliente->nombre = 'Maestro Home Center';
        $cliente->ruc = 12322678911;
        $cliente->imagen = 'maestro.png';
        $cliente->nivel = 1;
        $cliente->dependencia = 30;
        $cliente->save();

        $cliente = new Cliente();
        $cliente->empresa_id = 1;
        $cliente->nombre = 'Sodimac';
        $cliente->imagen = 'sodimac.png';
        $cliente->ruc = 12654378911;
        $cliente->nivel = 1;
        $cliente->dependencia = 30;
        $cliente->save();
    }
}
