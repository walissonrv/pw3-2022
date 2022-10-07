<?php

namespace Database\Seeders;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Subcategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;






class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::factory(03)// cria 3 categorias
            ->has(Subcategoria::factory()->count(3)//cada categoria vai ter 3 subcategoria
                ->has(Produto::factory()->count(2))//cada subcategoria vai ter 2 produtos
            )
            ->create();
    }
}
