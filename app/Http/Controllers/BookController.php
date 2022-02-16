<?php

namespace App\Http\Controllers;

use App\Models\EBooks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BookController extends Controller
{
    public function books()
    {
        $eBook =  EBooks::simplePaginate(5);
        return view('index', compact('eBook'));
    }

    public function detail_eBook($id)
    {
        $data = EBooks::find($id);
        return view('detail', compact('data'));
    }
}
