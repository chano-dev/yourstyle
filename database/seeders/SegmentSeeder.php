<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SegmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('_segments')->insert([
            [
                'name' => 'Mulher',
                'slug' => 'mulher',
                'description' => 'Moda feminina',
                'meta_title' => 'Moda Feminina - Teu Estilo | Roupas, Calçados, Acessórios, Cosméticos e Serviços Especiais para Mulheres',
                'meta_description' => 'Descubra as últimas tendências em moda feminina. Vestidos, calças, blusas, calçados e acessórios com estilo único. Entrega em Luanda.',
                'display_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Homem',
                'slug' => 'homem',
                'description' => 'Moda masculina',
                'meta_title' => 'Moda Masculina - Teu Estilo | Roupa, Calçado, Acessórios, Cosméticos e Serviços Especiais para Homens',
                'meta_description' => 'Estilo e elegância masculina. Camisas, calças, sapatos e acessórios de qualidade para o homem moderno. Compre online.',
                'display_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Criança',
                'slug' => 'crianca',
                'description' => 'Moda infantil',
                'meta_title' => 'Moda Infantil - Teu Estilo | Roupas para Crianças',
                'meta_description' => 'Roupas confortáveis e estilosas para os mais pequenos. Moda infantil com qualidade e preços acessíveis.',
                'display_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Blog',
                'slug' => 'blog',
                'description' => 'Novidades e tendências',
                'meta_title' => 'Blog - Teu Estilo | Dicas de Moda e Tendências',
                'meta_description' => 'Fique por dentro das últimas tendências de moda, dicas de estilo e novidades do mundo fashion.',
                'display_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Sobre',
                'slug' => 'sobre',
                'description' => 'Sobre a Teu Estilo',
                'meta_title' => 'Sobre Nós - Teu Estilo | A Nossa História',
                'meta_description' => 'Conheça a história da Teu Estilo, a nossa missão e valores. Moda angolana com qualidade internacional.',
                'display_order' => 5,
                'is_active' => true,
            ],
        ]);
    }
}
