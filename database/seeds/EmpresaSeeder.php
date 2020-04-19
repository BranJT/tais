<?php

use Illuminate\Database\Seeder;
use App\Model\Empresa;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('empresa')->delete();

        $empresa = new Empresa();
        $empresa->nombre = 'Cementos Pacasmayo';
        $empresa->imagen = 'logopacas.png';
        $empresa->save();
    }
}
