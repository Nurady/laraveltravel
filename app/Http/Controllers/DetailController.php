<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    // public function index(Request $request)
    // {
    //     return view('pages.detail');
    // }
    public function index(Request $request, $slug)
    {
        $item = TravelPackage::with(['galleries'])
                                    ->where('slug', $slug)
                                    ->firstOrfail();
        return view('pages.detail',[
            'item' => $item
        ]);
    }
}
