<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m1 = factory(Menu::class)->create([
            'name' => 'Inicio',
            'slug' => 'home',
            'icon'=>'mdi mdi-view-dashboard',
            'parent' => 0,
            'order' => 0,
        ]);
        $m2 =factory(Menu::class)->create([
            'name' => 'Clientes',
            'slug' => 'customers',
            'icon'=>'mdi mdi-face',
            'parent' => 0,
            'order' => 1,
        ]);
        $m3 = factory(Menu::class)->create([
            'name' => 'Facturación',
            'slug' => 'billing',
            'icon'=>'mdi mdi-face',
            'parent' => 0,
            'order' => 2,
        ]);
        $m4 = factory(Menu::class)->create([
            'name' => 'Inventario',
            'slug' => 'Inventory',
            'icon'=>'mdi mdi-blur-linear',
            'parent' => 0,
            'order' => 3,
        ]);
        $m5 = factory(Menu::class)->create([
            'name' => 'Reportes',
            'slug' => 'reports',
            'icon'=>'mdi mdi-chart-bar',
            'parent' => 0,
            'order' => 4,
        ]);
        $m6 = factory(Menu::class)->create([
            'name' => 'Configuración',
            'slug' => 'settings',
            'icon'=>'mdi mdi-chart-bubble',
            'parent' => 0,
            'order' => 5,
        ]);
        factory(Menu::class)->create([
            'name' => 'Lista',
            'slug' => 'clientes.lista',
            'parent' => $m2->id,
            'order' => 0,
        ]);
        factory(Menu::class)->create([
            'name' => 'Nuevo',
            'slug' => 'clientes.nuevo',
            'parent' => $m2->id,
            'order' => 1,
        ]);
        factory(Menu::class)->create([
            'name' => 'Factura',
            'slug' => 'bill',
            'parent' => $m3->id,
            'order' => 0,
        ]);
        $m32 = factory(Menu::class)->create([
            'name' => 'Nota Credito',
            'slug' => 'notacredito',
            'parent' => $m3->id,
            'order' => 1,
        ]);
        factory(Menu::class)->create([
            'name' => 'Empresa',
            'slug' => 'build',
            'parent' => $m4->id,
            'order' => 0,
        ]);
        factory(Menu::class)->create([
            'name' => 'Lista',
            'slug' => 'factura.lista',
            'parent' => $m32->id,
            'order' => 0,
        ]);

    }
}
