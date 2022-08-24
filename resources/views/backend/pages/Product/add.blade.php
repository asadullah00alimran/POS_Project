@extends('backend.mastering.master')
    @section('imran')
    <div class="col-md-4">
        <span class ="alert alert-success msg" style="display: none"></span>
        <input type="text" id="name" class ="name mt-3 form-control"placeholder="Product Name">
        <span class="text-danger error_name"></span>

        <textarea id="des" class ="des mt-3 form-control" cols="30" rows="2" placeholder="Product Description"></textarea>
        <span class="text-danger error_des"></span>

        <select id="size" class="size mt-3 form-control">
            <option value="">-------Select Size------</option>
            <option value="xxl">XXL</option>
            <option value="xl">XL</option>
            <option value="l">L</option>
            <option value="m">M</option>
            <option value="s">S</option>
        </select>
        <span class="text-danger error_size"></span>

        <input type="color" id="color" class ="color mt-3 form-control">
        <span class="text-danger error_color"></span>

        <input type="text" class ="product_code mt-3 form-control" id="product_code" placeholder="Product Code">
        <span class="text-danger error_product_code"></span>

        <input type="text" class ="cost_price mt-3 form-control" id="cost_price" placeholder="Cost Price">
        <span class="text-danger error_cost_price"></span>

        <input type="text" class ="sale_price mt-3 form-control" id="sale_price" placeholder="Sale Price">
        <span class="text-danger error_sale_price"></span>

        <button class ="btn-add mt-3 btn btn-success btn-sm form-control">Add product</button>

    </div>
    <div class="col-md-8">
        <table class="table">
            <thead>
                <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Color</th>
                <th>Cost Price</th>
                <th>Sale Price</th>
            </tr>
            </thead>
            <tbody class="data">
                
            </tbody>
        </table>
    </div>
@endsection