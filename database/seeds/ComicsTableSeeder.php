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
            $newComicStrip->fill($comicStrip);
            $newComicStrip->save();
        }
    }
}
