<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;

class MoveItem extends Component
{
    public $movie;
    public function render()
    {
        return view('livewire.move-item');
    }

    public function moveUp() {
        if ($this->movie->rank > 1){
            $this->movie->rank--;
            $this->movie->save();
            $this->dispatch('movie-added');
        }
    }

    public function moveDown() {
            $this->movie->rank++;
            $this->movie->save();
            $this->dispatch('movie-added');
    }
}
