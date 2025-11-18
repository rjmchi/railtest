<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AddMovie extends Component
{
    public $categories;
    public $category=1;

    #[Rule('required|string')]
    public $title;

    #[Rule('required|integer|min:1')]
    public $rank;
    public function render()
    {
        $this->categories=Category::get();
        return view('livewire.add-movie');
    }
    public function save() {
        $cat = Category::find($this->category);
        $flds = $this->validate();
        $cat->movies()->create($flds);
        $this->reset();
         $this->dispatch('movie-added');
    }
}
