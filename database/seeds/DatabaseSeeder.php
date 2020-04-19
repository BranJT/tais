<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(ProcesoSeeder::class);
        $this->call(SubprocesoSeeder::class);
        //$this->call(ConsumidorSeeder::class);
        $this->call(ProveedorSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(UnidadNegocioSeeder::class);
        $this->call(MapaProcesoSeeder::class);
        $this->call(MatrizSeeder::class);
        $this->call(ProcesoCaracSeeder::class);
        $this->call(ProcesoFlujoSeeder::class);
        $this->call(ProcesoSeguiSeeder::class);
        $this->call(ProcesoMapaSeeder::class);

        $this->call(ActividadSeeder::class);
        $this->call(TableroSeeder::class);
        $this->call(IndicadorSeeder::class);

        $this->call(PedidoSeeder::class);
    }
}
