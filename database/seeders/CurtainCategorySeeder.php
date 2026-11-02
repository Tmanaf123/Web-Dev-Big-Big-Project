<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CurtainCategory;

class CurtainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CurtainCategory::insert([
            ['id' => 1, 'name' => 'Gorden Kain Premium', 'description' => 'Koleksi gorden bahan premium custom untuk ruang tidur dan keluarga.'],
            ['id' => 2, 'name' => 'Tirai Gulung Modern', 'description' => 'Tirai modern praktis berbentuk roller blind untuk kantor dan rumah minimalis.'],
            ['id' => 3, 'name' => 'Tirai Kayu Alami', 'description' => 'Tirai bilah kayu mewah untuk memberikan kesan hangat dan natural pada ruangan.'],
        ]);
    }
}
