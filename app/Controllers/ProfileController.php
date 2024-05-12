<?php
namespace App\Controllers;

use App\Models\Book;

class ProfileController extends Controller
{
    public function index()
    {
        echo "hello from index";
    }


    public function edit()
    {
       $book= new Book();       
        return view("post/edit",[
            "message"=>"Hello from controller",
           "books"=>$book->getAll()

        ]);
       
    }

    public function toAnotherRoute()
    {
        return redirect("/route2");
    }

    public function anotherMethod()
    {
        echo "Another page, LOL";
    }
}