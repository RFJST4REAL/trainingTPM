<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getcreatepage(){
        return view('create');
    }

    public function createbook(Request $request){
        book::create([
            'title' => $request -> title,
            'author' => $request -> author,
            'release' => $request -> release,
            'price' => $request -> price,
        ]);
        return redirect(route('getcreatepage'));
    }

    public function getbooks(){
        $books=book::all();
        return view('view'), ['books']->[$books]);
    }
}
