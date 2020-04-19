<?php

use Illuminate\Database\Seeder;
use App\Model\Proveedor;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('proveedor')->delete();

        $proveedor = new Proveedor();
        $proveedor->empresa_id = 1;
        $proveedor->nombre= 'Vega Industries';
        $proveedor->imagen= 'noimage.jpg';
        $proveedor->nivel = 1;
        $proveedor->dependencia = 0;
        $proveedor->save();

        $proveedor = new Proveedor();
        $proveedor->empresa_id = 1;
        $proveedor->nombre= 'Transporte acuario';
        $proveedor->imagen= 'noimage.jpg';
        $proveedor->nivel = 1;
        $proveedor->dependencia = 0;
        $proveedor->save();
    }
}
