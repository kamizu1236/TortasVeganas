<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TortasSeeder extends Seeder
{
    public function run()
    {
        DB::table('tortas')->insert([
            [
                'nombre' => 'Torta de Chocolate',
                'descripcion' => 'Deliciosa torta de chocolate con crema.',
                'precio' => 15.00,
                'cantidad' => 10,
                'sabor' => 'Chocolate',
                'tamaño' => 'Grande',
                'tipo' => 'Cumpleaños',
                'fecha_creacion' => Carbon::now()->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Torta de Vainilla',
                'descripcion' => 'Torta suave de vainilla con frutas.',
                'precio' => 20.00,
                'cantidad' => 5,
                'sabor' => 'Vainilla',
                'tamaño' => 'Mediana',
                'tipo' => 'Aniversario',
                'fecha_creacion' => Carbon::now()->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Torta de Fresa',
                'descripcion' => 'Torta fresca de fresa con crema batida.',
                'precio' => 18.00,
                'cantidad' => 8,
                'sabor' => 'Fresa',
                'tamaño' => 'Pequeña',
                'tipo' => 'Baby Shower',
                'fecha_creacion' => Carbon::now()->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Torta Red Velvet',
                'descripcion' => 'Torta Red Velvet con glaseado de queso crema.',
                'precio' => 22.00,
                'cantidad' => 6,
                'sabor' => 'Red Velvet',
                'tamaño' => 'Grande',
                'tipo' => 'Boda',
                'fecha_creacion' => Carbon::now()->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Torta de Café',
                'descripcion' => 'Torta con sabor a café y nueces.',
                'precio' => 17.00,
                'cantidad' => 7,
                'sabor' => 'Café',
                'tamaño' => 'Mediana',
                'tipo' => 'Graduación',
                'fecha_creacion' => Carbon::now()->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Torta de Zanahoria',
                'descripcion' => 'Torta de zanahoria con glaseado de queso crema.',
                'precio' => 19.00,
                'cantidad' => 9,
                'sabor' => 'Zanahoria',
                'tamaño' => 'Mediana',
                'tipo' => 'Aniversario',
                'fecha_creacion' => Carbon::now()->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Torta de Limón',
                'descripcion' => 'Torta ligera de limón con glaseado de limón.',
                'precio' => 16.00,
                'cantidad' => 12,
                'sabor' => 'Limón',
                'tamaño' => 'Pequeña',
                'tipo' => 'Cumpleaños',
                'fecha_creacion' => Carbon::now()->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}


        


