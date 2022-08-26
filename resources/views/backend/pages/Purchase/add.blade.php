@extends('backend.mastering.master')
    @section('imran')

    <div class="col-md-6">
        <input type="date" id="date" class="mt-3 date form-control" placeholder="Select Date">
        <!-- <input type="text" id="br_id" class="mt-3 br_id form-control" placeholder="Branch ID"> -->
        <select id="br_id" class="mt-3 br_id form-control">
            <option value="">-------Select Branch-------</option>
            @foreach($branch as $branch)
            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
            @endforeach
        </select>
        <input type="text" id="company_name" class="mt-3 company_name form-control" placeholder="Company Name">
        <input readonly type="text" id="invoice" class="mt-3 invoice form-control" placeholder="Invoice No">
        <input type="text" id="product_id" class="mt-3 product_id form-control" placeholder="Product ID">
        <input type="text" id="quqntity" class="mt-3 quantity form-control" placeholder="Product Quantity">
    </div>
    <div class="col-md-6">
        <input readonly type="text" id="cost_price" class="mt-3 cost_price form-control" placeholder="Cost Ptice">
        <input type="text" id="dis" class="mt-3 dis form-control" placeholder="Discount(%)">
        <input readonly type="text" id="dis_amount" class="mt-3 dis_amount form-control" placeholder="Discount Amount">
        <input readonly type="text" id="total_amount" class="mt-3 total_amount form-control" placeholder="Total Amount">
        <input readonly type="text" id="grand_total" class="mt-3 grand_total form-control" placeholder="Grand Total">
        <input readonly type="text" id="astock" class="mt-3 astock form-control" placeholder="Available Stock">
    </div><br>
    <div>
        <button class="mt-3 btn btn-success btn-add-purchase form-control">Purchase</button>
    </div>
        
@endsection