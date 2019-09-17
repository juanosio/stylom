<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Material;
use App\Category;

class FilterController extends Controller
{
    public function index()
    {
        $filter = Product::orderBy('id', 'DESC')->where('estado', 'HABILITADO')->paginate(9);
     

       
        return view ('products', compact('filter'));
        
    }

    public function women()
    {
        $filter = Product::where('category_id', 2)->where('estado', 'HABILITADO')->paginate(9);;
       
        return view ('products', compact('filter'));
        
    }

    public function men()
    {
        $filter = Product::where('category_id', 1)->where('estado', 'HABILITADO')->paginate(9);;
       
        return view ('products', compact('filter'));
        
    }
    
    public function kids()
    {
        $filter = Product::where('category_id', 3)->where('estado', 'HABILITADO')->paginate(9);;
       
        return view ('products', compact('filter'));
        
    }

    public function lowertohigher()
    {
          $filter = Product::orderBy('precio', 'DESC')->where('estado', 'HABILITADO')->paginate(9);
     

       
        return view ('products', compact('filter'));
        
    }

    public function highertolower()
    {
          $filter = Product::orderBy('precio', 'ASC')->where('estado', 'HABILITADO')->paginate(9);
     

       
        return view ('products', compact('filter'));
        
    }


    public function range1()
    {
          $filter = Product::where('estado', 'HABILITADO')->where('precio', '<=', '100000')->paginate(9);
     

       
        return view ('products', compact('filter'));
        
    }

    public function range2()
    {
          $filter = Product::where('estado', 'HABILITADO')->where('precio', '>=', '100000')->where('precio', '<=', '200000')->paginate(9);
     

       
        return view ('products', compact('filter'));
        
    }
    
    public function range3()
    {
          $filter = Product::where('estado', 'HABILITADO')->where('precio', '>=', '200000')->where('precio', '<=', '300000')->paginate(9);
     

       
        return view ('products', compact('filter'));
        
    }
    
    public function range4()
    {
          $filter = Product::where('estado', 'HABILITADO')->where('precio', '>=', '300000')->where('precio', '<=', '400000')->paginate(9);
     

       
        return view ('products', compact('filter'));
        
    }
    
    
    
}
