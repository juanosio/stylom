<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Material;
use App\User;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productlist = Product::All();
        $products = $productlist->count();

        $materiallist = Material::All();
        $materials = $materiallist->count();

        $userlist = User::All();
        $users = $userlist->count();

        $supplierlist = Supplier::All();
        $suppliers = $supplierlist->count();
        return view('home', compact('products', 'materials', 'users', 'suppliers'));
    }

    public function welcome()
    {
        return view('welcome');
    }

    
}
