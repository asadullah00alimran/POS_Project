<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function add(){
        return view("backend.pages.product.add");
    }

    public function store(Request $request){
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

    public function manage(){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
    public function status($id){}
}
