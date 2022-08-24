@extends('backend.mastering.master')
    @section('imran')
    <div class="col-md-4">
        <form action="" method="post" class="form-group">
            <input type="text" class ="mt-3 form-control" name="name" placeholder="Product Name">
            <textarea name="des" id="des" class ="mt-3 form-control" cols="30" rows="2" placeholder="Product Description"></textarea>
            <!-- <textarea type="text" class ="mt-3 form-control" name="des" placeholder="Product Description"></textarea> -->
            <select name="size" id="size" class="mt-3 form-control">
                <option value="null">-------Select Size------</option>
                <option value="xxl">XXL</option>
                <option value="xl">XL</option>
                <option value="l">L</option>
                <option value="m">M</option>
                <option value="s">S</option>
            </select>
            <input type="color" class ="mt-3 form-control" name="color">
            <input type="text" class ="mt-3 form-control" name="product_code" placeholder="Product Code">
            <input type="text" class ="mt-3 form-control" name="cost_price" placeholder="Cost Price">
            <input type="text" class ="mt-3 form-control" name="sale_price" placeholder="Sale Price">
            <input type="file" class ="mt-3 form-control" name="image">

            <button class ="mt-3 btn btn-success btn-sm form-control">Add product</button>
        </form>
    </div>
    <div class="col-md-8">
        <table class="table">
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Cost Price</th>
                <th>Sale Price</th>
                <th>Image</th>
            </tr>
        </table>
    </div>
@endsection