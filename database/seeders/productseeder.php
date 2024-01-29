<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Trees data
        DB::table('products')->insert([
            [
                'name' => 'Ficus',
                'price' => '100',
                'description' => 'Ficus is a genus of about 850 species of woody trees, shrubs, vines, epiphytes and hemiepiphytes in the family Moraceae.',
                'category' => 'Trees',
                'gallery' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Ficus_retusa_1.jpg/1200px-Ficus_retusa_1.jpg',
            ],
            [
                'name' => 'Bonsai',
                'price' => '200',
                'description' => 'Bonsai is a Japanese art form which utilizes cultivation techniques to produce, in containers, small trees that mimic the shape and scale of full size trees.',
                'category' => 'Trees',
                'gallery' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Bonsai_trident_maple.jpg/1200px-Bonsai_trident_maple.jpg',
            ],
            [
                'name' => 'Pine',
                'price' => '300',
                'description' => 'A pine is any conifer in the genus Pinus of the family Pinaceae. Pinus is the sole genus in the subfamily Pinoideae. The Plant List compiled by the Royal Botanic Gardens, Kew and Missouri Botanical Garden accepts 126 species names of pines as current, together with 35 unresolved species and many more synonyms.',
                'category' => 'Trees',
                'gallery' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Pinus_sylvestris_01.jpg/1200px-Pinus_sylvestris_01.jpg',
            ]
        ]);
}
}
