<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    // ADD product Page Route
    public function add(){
        return view("backend.pages.product.add");
    }

    //Insert Product Data
    public function store(Request $request){

        // Validation 
        $valid = Validator::make($request->all(),[
            'name' => 'required',
            'des' => 'required',
            'size' => 'required',
            'color' => 'required',
            'product_code' => 'required',
            'cost_price' => 'required',
            'sale_price' => 'required',
        ]);

        if($valid->fails()){
            return response()->json([
                'status' => 'faild',
                'errors' => $valid->messages()
            ]);
        }
        else{
            //Create object of Product
            $product = new Product();

            $product->name = $request->name;
            $product->des = $request->des;
            $product->size = $request->size;
            $product->color = $request->color;
            $product->product_code = $request->product_code;
            $product->cost_price = $request->cost_price;
            $product->sale_price = $request->sale_price;
            $product->save();

            return response()->json([
                'status' => 'success'
            ]);
            
        }
    }

    // Show Product
    public function show(){
        $product = Product::all();
        return response()->json([
            'data' => $product
        ]);
    }


    public function edit($id){}
    public function update(Request $request, $id){}

    //Delete Product
    public function destroy($id){
        
        $product = Product::find($id);
        $product->delete();

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function status($id){}
}
