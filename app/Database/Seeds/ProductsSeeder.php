<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Faker\Factory;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        // use the factory to create a Faker\Generator instance
        $faker = Factory::create();
        $data = [
		  [
			'title' => "Vyatta Airboom Nano",
			'category'    => "TWS",
			'price'    => 284000,
			'quantity'    => 211,
			'image'    => "2c9332b2-7a0e-45e1-8310-e9b60c38d946.jpg",
			'created_at'    =>  "2023-11-24",
		  ],
		  [
			'title' => "Jabra Elite 2 True Wireless Earbuds",
			'category'    => "Earbuds",
			'price'    => 759000,
			'quantity'    => 918,
			'image'    => "dca691b03f8239ce86d8287841132149.jpg",
			'created_at'    =>  "2023-12-12",
		  ],
		  [
			'title' => "Xiaomi Redmi Buds 3 Lite",
			'category'    => "TWS",
			'price'    => 179000,
			'quantity'    => 189,
			'image'    => "79b81de2d1d04426fce1ece7e644e12a_jpg_720x720q80.jpg",
			'created_at'    =>  "2023-11-01",
		  ],
		  [
			'title' => "Lenovo LP40 True Wireless",
			'category'    => "Earbuds",
			'price'    => 145900,
			'quantity'    => 2577,
			'image'    => "Lenovo.JPG",
			'created_at'    =>  "2023-11-01",
		  ],
		];
        $this->db->table('products')->insertBatch($data); // Using Query Builder to insert batch
    }
}
