<?php

use App\Models\TambahBuku;

function get_all_books(){
    // return TambahBuku::all();

    // cara kedua 

    $data = TambahBuku::all();
    return $data;
}
function get_all_book(){
    // return TambahBuku::all();

    // cara kedua 

    $data = TambahBuku::all();
    return $data;
}

function get_buku_by_title($title){
    $data = TambahBuku::where('title', 'like' . '%' . $title . '%')->get();
    return $data;
}

function get_buku_by_slider($id){
    $data = TambahBuku::where('id', $id)->get();
    return $data;
}
?>