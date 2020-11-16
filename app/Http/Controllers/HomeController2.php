<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TravelPackageRequest;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $items = TravelPackage::with(['galleries'])->get();
        // dd($items);
        return view('pages.home', [
            'items' => $items
        ]);
    }
}

// return view('pages.home')->with('items', $items);   
// return view('yourView')->with('salesChart', $salesChart);
// return view('greeting')->with('name', 'Victoria'); 
// public function index()
// {
//     $items = TravelPackage::with(['galleries'])->get();     
//     dd($items);             
//     // return view('pages.home', ['items' => $items]);   
//     return $items;        
                
// }

?>