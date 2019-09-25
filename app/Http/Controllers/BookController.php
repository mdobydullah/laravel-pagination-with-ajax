<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookController extends Controller
{
    public function books(Request $request)
    {
        $books = DB::table('books')->orderBy('id', 'DESC')->paginate(3);

        if ($request->ajax()) {
            return view('load_books_data', compact('books'));
        }
        return view('books', compact('books'));
    }
}
