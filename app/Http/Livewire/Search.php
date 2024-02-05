<?php

namespace App\Http\Livewire;

use App\Models\TambahBuku;
use Livewire\Component;

class Search extends Component
{
    public $search = '';
    public function render()
    {
        $data = TambahBuku::where('title', 'like', '%' . $this->search . '%')->get();

        return view('livewire.search', [
            'books' => $data,
        ]);
    }
}
