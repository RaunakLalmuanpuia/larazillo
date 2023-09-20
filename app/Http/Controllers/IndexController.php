<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        
        // dd(Listing::where('beds', '>=', 4)->orderBy('price', 'asc')->first());
        return inertia(
            'Index/index',
        [
            'message' => 'hello from laravel!'
        ]
    
    );
    }
    public function show(){
        return inertia('Index/show');
    }
}
