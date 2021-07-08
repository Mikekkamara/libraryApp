<?php

namespace App\Http\Controllers;
use App\Models\keyboardist;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class BooksController extends Controller
{
   /*  public function findBook(Request $request){
        $input = $request->input('input');
        $database = books::where('bookTitle','like', $input.'%')->get();
        $count = count($database);
        // dd($count);
        return view('results')->with([
            'results'=>$database,
            'count'=>$count
        ]);
        // dd($database);

    } */
    public function addBook(Request $request){

        keyboardist::create([
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
