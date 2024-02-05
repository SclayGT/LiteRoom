<?php

namespace App\Http\Livewire;

use App\Models\TambahBuku;
use Livewire\Component;

class Categories extends Component
{
    public $categories = '';
    public function render()
    {
        return view('livewire.categories');
    }
}
