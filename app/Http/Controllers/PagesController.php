<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Index
     *
     * @return void
     */
    public function index(){

        $title = "Welcome to laravel";

        $data = array(
            "title" => "Laravel ist toll"
        );

        return view("page.index")->with($data);
    }
}
