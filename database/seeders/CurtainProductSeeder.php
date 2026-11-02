<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CurtainProduct;

class CurtainProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CurtainProduct::insert([
            [
                'curtain_category_id' => 1,
                'product_name' => 'Gorden Lipat Blackout 100%',
                'material' => 'Premium Heavyweight Polyester',
                'variations' => 'Warna: Smokey Grey, Warm Beige, Ivory White',
                'image_url' => 'https://unsplash.com',
                'description' => 'Mampu memblokir cahaya matahari total hingga 100%. Sangat cocok menjaga privasi dan kesejukan di dalam kamar tidur utama.'
            ],
            [
                'curtain_category_id' => 1,
                'product_name' => 'Vitrase Sheer Lembut',
                'material' => 'Soft Linen Silk Blend',
                'variations' => 'Warna: Pure White, Off-White',
                'image_url' => 'https://unsplash.com',
                'description' => 'Tirai tipis transparan elegan yang menyaring terik matahari menjadi pencahayaan lembut yang estetis di ruang tamu.'
            ],
            [
                'curtain_category_id' => 2,
                'product_name' => 'Roller Blind Sunscreen',
                'material' => 'Fiberglass PVC Coating',
                'variations' => 'Warna: Black, Light Grey, Sand Beige',
                'image_url' => 'https://unsplash.com',
                'description' => 'Tirai gulung modern penahan panas yang tetap mempertahankan visibilitas pandangan ke luar ruangan tanpa silau.'
            ],
            [
                'curtain_category_id' => 2,
                'product_name' => 'Zebra Blind Ekonomis',
                'material' => 'Dual-Layer Lightweight Polyester',
                'variations' => 'Warna: Snow White, Slate Grey',
                'image_url' => 'https://unsplash.com',
                'description' => 'Tirai transisi modern bergaris yang dapat diatur tingkat celah cahayanya dengan sangat mudah.'
            ],
            [
                'curtain_category_id' => 3,
                'product_name' => 'Wooden Blind Klasik',
                'material' => 'Natural Basswood 50mm',
                'variations' => 'Warna: Dark Walnut, Natural Oak',
                'image_url' => 'https://unsplash.com',
                'description' => 'Bilah kayu alami berkualitas tinggi yang memberikan kesan hangat, mewah, dan sentuhan eksklusif pada interior jendela.'
            ],
            [
                'curtain_category_id' => 3,
                'product_name' => 'Venetian Blind Aluminium',
                'material' => 'Premium Lightweight Aluminium',
                'variations' => 'Warna: Metallic Silver, Matte Black',
                'image_url' => 'https://unsplash.com',
                'description' => 'Tirai horizontal minimalis anti-air dan tahan lama yang sangat cocok diaplikasikan untuk area dapur atau ruang kerja.'
            ]
        ]);

    }
}
