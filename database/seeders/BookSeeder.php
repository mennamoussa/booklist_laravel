<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<5; $i++) {
            Book::create([
                "title" => "test" .$i,
                "price" => 120,
                "pic"=> "path/image1"
            ]);
        }
    }
}
