<?php

namespace App\Http\Controllers;

use App\Models\TambahBuku;
use Illuminate\Http\Request;

class detailbukuController extends Controller
{
    public function detailBuku ($id){
        $data = TambahBuku::where('id', $id)->first();
        return view ('anime-details', compact('data'));
    }

    function limiDataTopViews(){
        $data = TambahBuku::all();
        // $limit5data = array_slice($data, 0, 5);

        return view('index', compact('data'));

    }
}
