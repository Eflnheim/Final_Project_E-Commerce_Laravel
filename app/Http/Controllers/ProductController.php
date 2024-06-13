<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request) {
        $products = Product::all();
        return response()->json([
            'msg' => 'List of all products',
            'data' => $products
        ], 200);
    }

    public function ShowById($id) {
        $products = Product::where('product_id', $id)->first();

        if($products) {
            return response()->json([
                'data' => $products
            ]);
        }
    }
}
