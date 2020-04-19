<?php

use Illuminate\Database\Seeder;
use App\Model\Pedido;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedido')->delete();

        Pedido::unguard();
        factory(Pedido::class, 1000)->create();
        Pedido::reguard();
    }
}
