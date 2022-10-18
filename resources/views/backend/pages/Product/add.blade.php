@extends('backend.mastering.master')
    @section('imran')
    <div class="col-md-4">
        <span class ="alert alert-success msg" style="display: none"></span>
        <input type="text" class ="name mt-3 form-control"placeholder="Product Name">
        <span class="text-danger error_name"></span>

        <textarea class ="des mt-3 form-control" cols="30" rows="2" placeholder="Product Description"></textarea>
        <span class="text-danger error_des"></span>

        <select  class="size mt-3 form-control">
            <option value="">-------Select Size------</option>
            <option value="xxl">XXL</option>
            <option value="xl">XL</option>
            <option value="l">L</option>
            <option value="m">M</option>
            <option value="s">S</option>
        </select>
        <span class="text-danger error_size"></span>

        <input type="color" class ="color mt-3 form-control">
        <span class="text-danger error_color"></span>

        <input type="text" class ="product_code mt-3 form-control"  placeholder="Product Code">
        <span class="text-danger error_product_code"></span>

        <input type="text" class ="cost_price mt-3 form-control"  placeholder="Cost Price">
        <span class="text-danger error_cost_price"></span>

        <input type="text" class ="sale_price mt-3 form-control" placeholder="Sale Price">
        <span class="text-danger error_sale_price"></span>

        <button class ="btn-add mt-3 btn btn-success btn-sm form-control">Add product</button>

    </div>
    <div class="col-md-8">
        <table class="table">
            <thead>
                <tr>
                    <th>#sl</th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Color</th>
                    <th>Sale Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="data">
                <!-- <tr>
                    <td>'++'</td>
                    <td>'+item.name+'</td>
                    <td>'++'</td>
                    <td>'++'</td>
                    <td>'++'</td>
                    <td>'++'</td>
                    <td>
                        <button class="btn-edit btn btn-info btn-sm"><i class="fa fa-edit"></i></button>
                        <button class="btn-delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete-product">
  Launch demo modal
</button> -->
    <!-- Modal for Delete -->
    <div class="modal fade" id="delete-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation Message !!!</h5>
                </div>
                <div class="modal-body">
                    Are You Want to Delete ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
                    <button type="button" class="delete btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal for Update -->
    <div class="modal fade" id="update-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                </div>
                <div class="modal-body">
                    <input type="text" id="name" class ="name mt-3 form-control"placeholder="Product Name">

                    <textarea id="des" class ="des mt-3 form-control" cols="30" rows="2" placeholder="Product Description"></textarea>

                    <select id="size" class="size mt-3 form-control">
                        <option value="">-------Select Size------</option>
                        <option value="xxl">XXL</option>
                        <option value="xl">XL</option>
                        <option value="l">L</option>
                        <option value="m">M</option>
                        <option value="s">S</option>
                    </select>

                    <input type="color" id="color" class ="color mt-3 form-control">

                    <input type="text" class ="product_code mt-3 form-control" id="product_code" placeholder="Product Code">

                    <input type="text" class ="cost_price mt-3 form-control" id="cost_price" placeholder="Cost Price">

                    <input type="text" class ="sale_price mt-3 form-control" id="sale_price" placeholder="Sale Price">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn-update btn btn-warning">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection