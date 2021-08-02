<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $book_count = Books::all()->count();
        $users_count = User::all()->count();
        return view('admin.home.index',[
            'book_count' => $book_count,
            'users_count'=>$users_count 
        ]);
    }
}
