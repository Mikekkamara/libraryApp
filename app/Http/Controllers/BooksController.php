<?php

namespace App\Http\Controllers;
use App\Models\books;
use Illuminate\Http\Request;
use Monolog\Formatter\JsonFormatter;

class BooksController extends Controller
{
    public function findBook(Request $request){
        $input = $request->input('input');
        $database = books::where('bookTitle','like', $input.'%')->get();
        $count = count($database);
        ddd($database->toJson());

        return view('results')->with([
            'results'=>$database,
            'count'=>$count
        ]);
        // dd($database);

    }
    public function addBook(Request $request){

        books::create([
            'Firstname'=>$request->input('firstName'),
            'Middlename'=>$request->input('middleName'),
            'Lastname'=>$request->input('lastName'),
            'Altar'=>$request->input('altar'),
            'Gender'=>$request->input('gender'),
            'ContactNo'=>$request->input('contactNo'),
            'WPastor'=>$request->input('WPastor'),
            'PastorNo'=>$request->input('pastorNo'),
            'Region'=>$request->input('region')
        ]);
        // return redirect()->route('home');
        session()->flash('msg', 'Book recorded successfully');
        return redirect()->back();
    }
}