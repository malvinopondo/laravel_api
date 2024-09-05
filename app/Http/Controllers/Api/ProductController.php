<?php

namespace App\Http\Controllers\Api;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
        if($products ->count() > 0){
            return ProductResource::collection($products);
        }
        else{
            return response ()->json(['message' => "No record available"], 200);
        }
    }

    public function store(){
        
    }

    public function show(){
        
    }

    public function update(){
        
    }

    public function destroy(){
        
    }

}
