<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Requests\Admin\TravelPackageRequest;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
// use Illuminate\Support\Str;

class HomeController extends Controller
{
    // public function index(Request $request)
    // {
    //     return view('pages.home');
    // }
    public function index()
    {
        $items = TravelPackage::with(['galleries'])->get();
        // dd($items);
        return view('pages.home', ['items' => $items]);
    }
}
