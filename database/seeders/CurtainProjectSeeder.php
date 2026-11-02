<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CurtainProject;

class CurtainProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CurtainProject::insert([
            ['client_name' => 'Rumah Tinggal Bpk. Hendra (Citraland)', 'curtain_type_used' => 'Gorden Lipat Blackout Double Vitrase', 'image_url' => 'https://unsplash.com'],
            ['client_name' => 'Kediaman Ibu Selvi (Graha Family)', 'curtain_type_used' => 'Gorden Kain Beludru Kustom Ruang Tamu', 'image_url' => 'https://unsplash.com'],
            ['client_name' => 'Kantor PT. Maju Bersama', 'curtain_type_used' => 'Roller Blind Sunscreen Minimalis Kantor', 'image_url' => 'https://unsplash.com'],
            ['client_name' => 'Showroom Interior Gedung Pakuwon', 'curtain_type_used' => 'Luxury Wooden Blind Basswood 50mm', 'image_url' => 'https://unsplash.com'],
            ['client_name' => 'Villa Modern Sanur (Bali Project)', 'curtain_type_used' => 'Gorden Linen Alami Sentuhan Elegan', 'image_url' => 'https://unsplash.com'],
            ['client_name' => 'Apartemen Studio Bpk. Kevin', 'curtain_type_used' => 'Zebra Blind Ekonomis Hemat Ruang', 'image_url' => 'https://unsplash.com'],
        ]);

    }
}
