<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_data = config("db_comics");

        foreach ($comics_data as $comic_data) {
            $comic = new Comic();

            $comic->title = $comic_data['title'];
            $comic->description = $comic_data['description'];
            $comic->thumb = $comic_data['thumb'];
            $comic->price = $comic_data['price'];
            $comic->series = $comic_data['series'];
            $comic->sale_date = $comic_data['sale_date'];
            $comic->type = $comic_data['type'];

            $comic->save();
        }
    }
}