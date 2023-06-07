<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Section;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker          = Factory::create();
        $admin          = Admin::select('id')->where('email', 'admin@admin.com')->first();

        $men_shirt_category     = Category::with('section')->select('id')->where('url', 'men-t-shirts')->first();
        $women_shirt_category   = Category::with('section')->select('id')->where('url', 'blouses-and-shirts')->first();
        $earphone_category      = Category::with('section')->select('id')->where('url', 'earphones')->first();
        $camera_category        = Category::with('section')->select('id')->where('url', 'digital-cameras')->first();
        $phone_category         = Category::with('section')->select('id')->where('url', 'mobile-phones')->first();

        $products               = [
            [
                'section_id'        => Section::find(1)->id,
                'category_id'       => $earphone_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Samsung')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'سماعة لاسلكية صفراء',
                    'en'    => 'Yellow Wireless Headphone',
                ],
                'price'             => rand(10, 100),
                'discount_type'     => 0,
                'weight'            => rand(500, 800),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 1,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(1)->id,
                'category_id'       => $earphone_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Apple')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Apple AirPods Pro',
                    'en'    => 'Apple AirPods Pro',
                ],
                'price'             => rand(230, 260),
                'discount_type'     => 0,
                'weight'            => rand(80, 100),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 1,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(1)->id,
                'category_id'       => $camera_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Cannon')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Canon EOS Rebel T7 DSLR Camera',
                    'en'    => 'Canon EOS Rebel T7 DSLR Camera',
                ],
                'price'             => rand(450, 500),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 1,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(1)->id,
                'category_id'       => $camera_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Nikon')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Nikon D3500 DSLR Camera',
                    'en'    => 'Nikon D3500 DSLR Camera',
                ],
                'price'             => rand(380, 420),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 1,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(1)->id,
                'category_id'       => $camera_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Nikon')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Nikon DSLR Camera 4k',
                    'en'    => 'Nikon DSLR Camera 4k',
                ],
                'price'             => rand(400, 520),
                'discount_type'     => 0,
                'weight'            => rand(500, 580),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 1,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(1)->id,
                'category_id'       => $phone_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Samsung')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Samsung Galaxy A71 5G',
                    'en'    => 'Samsung Galaxy A71 5G',
                ],
                'price'             => rand(450, 500),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(1)->id,
                'category_id'       => $phone_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Samsung')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Samsung Galaxy S10 Lite',
                    'en'    => 'Samsung Galaxy S10 Lite',
                ],
                'price'             => rand(450, 500),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(1)->id,
                'category_id'       => $phone_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Samsung')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Samsung Galaxy A51 5G',
                    'en'    => 'Samsung Galaxy A51 5G',
                ],
                'price'             => rand(450, 500),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(1)->id,
                'category_id'       => $phone_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Samsung')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Samsung Galaxy S9 Plus',
                    'en'    => 'Samsung Galaxy S9 Plus',
                ],
                'price'             => rand(450, 500),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(2)->id,
                'category_id'       => $men_shirt_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Gap')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Men\'s Vintage Wash Crewneck T-Shirt',
                    'en'    => 'Men\'s Vintage Wash Crewneck T-Shirt',
                ],
                'price'             => rand(18, 25),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(2)->id,
                'category_id'       => $men_shirt_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Gap')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Men\'s Stripe Pique Polo',
                    'en'    => 'Men\'s Stripe Pique Polo',
                ],
                'price'             => rand(30, 35),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(2)->id,
                'category_id'       => $men_shirt_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Gap')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Men\'s Graphic Short Sleeve',
                    'en'    => 'Men\'s Graphic Short Sleeve',
                ],
                'price'             => rand(25, 30),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(2)->id,
                'category_id'       => $men_shirt_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Gap')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Men\'s Essential V-Neck T-Shirt',
                    'en'    => 'Men\'s Essential V-Neck T-Shirt',
                ],
                'price'             => rand(15, 25),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(2)->id,
                'category_id'       => $men_shirt_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Gap')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Men\'s Slub Jersey Henley',
                    'en'    => 'Men\'s Slub Jersey Henley',
                ],
                'price'             => rand(35, 40),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(3)->id,
                'category_id'       => $women_shirt_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Arrow')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Women\'s Icon Denim Shirt',
                    'en'    => 'Women\'s Icon Denim Shirt',
                ],
                'price'             => rand(60, 70),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(3)->id,
                'category_id'       => $women_shirt_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Arrow')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Women\'s Vintage Wash Boyfriend Shirt',
                    'en'    => 'Women\'s Vintage Wash Boyfriend Shirt',
                ],
                'price'             => rand(40, 50),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(3)->id,
                'category_id'       => $women_shirt_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Arrow')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Women\'s Eyelet Pintuck Blouse',
                    'en'    => 'Women\'s Eyelet Pintuck Blouse',
                ],
                'price'             => rand(75, 80),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(3)->id,
                'category_id'       => $women_shirt_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Gap')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Women\'s Softspun Tie-Sleeve Top',
                    'en'    => 'Women\'s Softspun Tie-Sleeve Top',
                ],
                'price'             => rand(45, 50),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(3)->id,
                'category_id'       => $women_shirt_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Gap')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Women\'s Ombré Stripe Shirt',
                    'en'    => 'Women\'s Ombré Stripe Shirt',
                ],
                'price'             => rand(65, 70),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
            [
                'section_id'        => Section::find(3)->id,
                'category_id'       => $women_shirt_category->id,
                'brand_id'          => Brand::select('id')->where('name', 'Gap')->first()->id,
                'admin_id'          => $admin->id,
                'name'              => [
                    'ar'    => 'Women\'s Gingham Poplin Balloon-Sleeve Blouse',
                    'en'    => 'Women\'s Gingham Poplin Balloon-Sleeve Blouse',
                ],
                'price'             => rand(80, 85),
                'discount_type'     => 0,
                'weight'            => rand(10, 1000),
                'description'       => $faker->sentence(120),
                'meta_title'        => $faker->title,
                'meta_description'  => $faker->sentence(10),
                'meta_keywords'     => $faker->sentence(5),
                'is_featured'       => 0,
                'is_best_seller'    => true,
            ],
        ];
        foreach ($products as $product) {
            if (is_null(Product::where('name->ar', $product['name']['ar'])->orWhere('name->en', $product['name']['en'])->first()))
                Product::create($product);
        }
    }
}
