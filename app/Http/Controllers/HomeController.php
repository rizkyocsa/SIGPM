<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $user = Auth::user();
        $berita = Berita::limit(6)->get()->map(function($item) {
            $item->content = \Illuminate\Support\Str::limit($item->content, 25);
            $item->created_at_formatted = $item->created_at->format('Y-m-d');
            return $item;
        });
        return view('home', compact('user', 'berita'));
    }
}
