<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\On;

class MovieList extends Component
{
    public $categories;

       protected $listeners = [
        'list-change' => '$refresh'
    ];


    public function render()
    {
        $this->categories = Category::with(['movies' => function ($query) {
            $query->orderBy('rank');
            }])->get();

        return view('livewire.movie-list');
    }

    public function reorder(Category $category){
        $movies = $category->movies;
        $rank = 1;
        foreach ($movies as $movie) {
            $movie->rank = $rank;
            $rank++;
            $movie->save();
        }
    }

}
