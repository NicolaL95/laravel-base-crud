<?php
use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_album = config('comics');
        foreach($comics_album as $comic){
           
            $newcomic = new Comic();
            $newcomic->title = $comic['title'];
            $newcomic->description = $comic['description'];
            $newcomic->thumb = $comic['thumb'];
            $newcomic->price = $comic['price'];
            $newcomic->series = $comic['series'];
            $newcomic->save();
        }
    }
}
