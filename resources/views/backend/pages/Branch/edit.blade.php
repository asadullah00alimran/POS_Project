@extends('backend.mastering.master')
    @section('imran')
    <div class="col-md-6">
        <form action="{{ Route('branch.update',$branch->id) }}" method="POST">
            @csrf
            <input value="{{ $branch->name }}" type="text" name="name" placeholder="Branch Name" class="mt-3 form-control">

            <input value="{{ $branch->manager }}" type="text" name="manager" placeholder="Branch Manager" class="mt-3 form-control">

            <input value="{{ $branch->phone }}" type="text" name="phone" placeholder="Branch Phone" class="mt-3 form-control">

            <input value="{{ $branch->email }}" type="text" name="email" placeholder="Branch Email" class="mt-3 form-control">

            <select name="status" class="mt-3 form-control" id="status">
                <option value="">-----Select Status-----</option>
                <option value="1" @if( $branch->status == 1) selected @endif>Active</option>
                <option value="0" @if( $branch->status == 0) selected @endif>Inactive</option>
            </select>

            <button class="btn btn-success mt-3 form-control">Add Branch</button>
        </form>
    </div>
@endsection