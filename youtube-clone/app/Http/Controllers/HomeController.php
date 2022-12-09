<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class HomeController extends Controller
{
    public $contents;
    public function home()
    {
        $this->contents = Content::all();
        return view('user.home', ['contents' => $this->contents]);
    }
}
