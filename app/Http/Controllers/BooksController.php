<?php

namespace App\Http\Controllers;
use App\Models\books;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

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
    public function addBook(Request $request){

        books::create([
            'bookTitle'=>$request->input('bookTitle'),
            'Author'=>$request->input('Author'),
            'shelfNumber'=>$request->input('shelfNumber'),
            'status'=>$request->input('status')
        ]);
        // return redirect()->route('home');
        session()->flash('msg', 'Book recorded successfully');
        return redirect()->back();
    }
}
