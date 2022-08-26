<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Purchase;
use App\Models\Backend\Branch;
use App\Models\Backend\Product;
use App\Models\Backend\Stock;

class PurchaseController extends Controller

{
    public function add(){
        $branch = Branch::all();
        return view("backend.pages.purchase.add",compact("branch"));
    }

    //Insert Product Data
    // public function store(Request $request){

    //     $purchase = new Purchase();

    //     $purchase->date = $request->date;
    //     $purchase->br_id = $request->br_id;
    //     $purchase->company_name = $request->company_name;
    //     $purchase->invoice = $request->invoice;
    //     $purchase->product_id = $request->product_id;
    //     $purchase->dis = $request->dis;
    //     $purchase->dis_amount = $request->dis_amount;
    //     $purchase->total_amount = $request->total_amount;
    //     $purchase->save();

    //     return response()->json([
    //         'status' => 'success',

    //     ]);
    // }

    // Show Purchase
    public function show(){

    }

    // show Purchase data fot Edit 
    public function edit($id){

    }

    //Update Purchase
    public function update(Request $request, $id){

    }
    //Delete Purchase
    public function destroy($id){    

    }
    public function find($id){
        $product = Product::find($id);
        $stock = Stock::find($id);
        return response()->json([
            "product" => $product,
            "stock" => $stock
        ]);
    }
}
