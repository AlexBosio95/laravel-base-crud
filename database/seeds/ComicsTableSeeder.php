<?php

use App\Library;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsList = config('comics');

        foreach ($comicsList as $comicStrip) {
            $newComicStrip = new Library();
            $newComicStrip->title = $comicStrip['title'];
            $newComicStrip->description = $comicStrip['description'];
            $newComicStrip->thumb = $comicStrip['thumb'];
            $newComicStrip->price = $comicStrip['price'];
            $newComicStrip->series = $comicStrip['series'];
            $newComicStrip->sale_date = $comicStrip['sale_date'];
            $newComicStrip->type = $comicStrip['type'];
            $newComicStrip->save();
        }
    }
}
