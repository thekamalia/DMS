<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::create([
            'name' => 'TASHA FATNIN ',
            'slug' => 'aaasasassaa-',
            'accountnumber' => 12121313323232323,
            'description' =>'tashafatnin menjual tudung yang sangat berkualiti',


        ]);

        Shop::create([
            'name' => 'JUST SOLD ',
            'slug' => 'bbbdasasas-',
            'accountnumber' => 1212131332321232323,
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',


        ]);

        Shop::create([
            'name' => 'Bungkusmakanan ',
            'slug' => 'bsssccasasasbb-',
            'accountnumber' => 1212131332321232323,
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',


        ]);

        Shop::create([
            'name' => 'Alia Collection',
            'slug' => 'asasasas-',
            'accountnumber' => 1212131332321232323,
            'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',


        ]);
    }
}
