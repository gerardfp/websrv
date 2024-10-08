<?php

namespace Database\Seeders;

use App\Models\Noticia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    public function run(): void
    {
        Noticia::factory(300)->create();
    }
}
