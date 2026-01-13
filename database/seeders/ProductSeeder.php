<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'nombre' => 'Laptop Dell XPS 15',
                'descripcion' => 'Laptop de alto rendimiento con procesador Intel i7 y 16GB RAM',
                'codigo' => 'LAP-DELL-XPS15',
                'precio' => 1299.99,
                'stock' => 15,
                'categoria' => 'Electrónica',
            ],
            [
                'nombre' => 'Mouse Logitech MX Master 3',
                'descripcion' => 'Mouse inalámbrico ergonómico con sensor de alta precisión',
                'codigo' => 'MOU-LOG-MX3',
                'precio' => 99.99,
                'stock' => 8,
                'categoria' => 'Periféricos',
            ],
            [
                'nombre' => 'Teclado Mecánico RGB',
                'descripcion' => 'Teclado mecánico con switches Cherry MX y retroiluminación RGB',
                'codigo' => 'TEC-MEC-RGB',
                'precio' => 149.99,
                'stock' => 0,
                'categoria' => 'Periféricos',
            ],
            [
                'nombre' => 'Monitor Samsung 27" 4K',
                'descripcion' => 'Monitor 4K UHD con tecnología HDR y panel IPS',
                'codigo' => 'MON-SAM-27-4K',
                'precio' => 399.99,
                'stock' => 12,
                'categoria' => 'Monitores',
            ],
            [
                'nombre' => 'Auriculares Sony WH-1000XM4',
                'descripcion' => 'Auriculares inalámbricos con cancelación de ruido activa',
                'codigo' => 'AUD-SON-WH1000',
                'precio' => 349.99,
                'stock' => 5,
                'categoria' => 'Audio',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
