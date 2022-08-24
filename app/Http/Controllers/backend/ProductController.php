<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;

class ProductController extends Controller
{
    public function add(){
        return view("backend.pages.product.add");
    }
    public function store(Request $request, $id){}
    public function manage(){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
    public function status($id){}
}
