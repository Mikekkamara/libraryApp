<?php

namespace App\Http\Controllers;
use App\Models\books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function findBook(Request $request){
        $input = $request->input('input');
        $database = books::where('bookTitle','like', $input.'%')->get();
        $count = count($database);
        // dd($count);
        return view('results')->with([
            'results'=>$database,
            'count'=>$count
        ]);
        // dd($database);

    }
}
