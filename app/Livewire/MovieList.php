<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class MovieList extends Component
{
    public $categories;
    public function render()
    {
        // $this->categories = Category::with('movies')->get();

        $this->categories = Category::with(['movies' => function ($query) {
            $query->orderBy('rank');
            }])->get();

        return view('livewire.movie-list');
    }
}
