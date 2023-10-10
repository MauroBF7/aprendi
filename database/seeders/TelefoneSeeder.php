<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TelefoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $telefone=[
            'telefone'=>"3091-2017",
            'responsa'=>"Fulano da Silva",
            'local'=>"Bloco K - 1º andar",
            'divisa'=>"DvCreches",
            'secao'=>"secretaria"
        ];
        \App\Models\Telefone::create($telefone);
        \App\Models\Telefone::factory(15)->create();
    }
}
