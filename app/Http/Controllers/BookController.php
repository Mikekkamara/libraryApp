<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function findBook(Request $request){
        
        $input = $request->input('input');
        $database = Book::where('bookTitle','like', $input.'%')->paginate(10);
        $count = count($database);
        // ddd($database->toJson());

        // dd($database);
        return view('results')->with([
            'results'=>$database,
            'count'=>$count
        ]);

    }
    public function addBook(Request $request){

        Book::create([
            'bookTitle' => $request->input('bookTitle'),
            'Author' => $request->input('Author'),
            'shelfNumber' => $request->input('shelfNumber'),
            'status' => $request->input('status')
        ]);
        // return redirect()->route('home');
        session()->flash('msg', 'Book recorded successfully');
        return redirect()->back();
    }
}
