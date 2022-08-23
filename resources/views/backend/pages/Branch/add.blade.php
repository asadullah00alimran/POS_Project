@extends('backend.mastering.master')
    @section('imran')
    <div class="col-md-6">
        <form action="{{ Route('branch.store') }}" method="POST">
            @csrf
            <input value="{{ old('name') }}" type="text" name="name" placeholder="Branch Name" class="mt-3 form-control">
            <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span>
            <input value="{{ old('manager') }}" type="text" name="manager" placeholder="Branch Manager" class="mt-3 form-control">
            <span class="text-danger">
                @error('manager')
                    {{$message}}
                @enderror
            </span>
            <input value="{{ old('phone') }}" type="text" name="phone" placeholder="Branch Phone" class="mt-3 form-control">
            <span class="text-danger">
                @error('phone')
                    {{$message}}
                @enderror
            </span>
            <input value="{{ old('email') }}" type="text" name="email" placeholder="Branch Email" class="mt-3 form-control">
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
            <select name="status" class="mt-3 form-control" id="status">
                <option value="">-----Select Status-----</option>
                <option value="1" @if( old('status') == 1) selected @endif>Active</option>
                <option value="0" @if( old('status') == 0) selected @endif>Inactive</option>
            </select>
            <span class="text-danger">
                @error('status')
                    {{$message}}
                @enderror
            </span>
            <button class="btn btn-success mt-3 form-control">Add Branch</button>
        </form>
    </div>
@endsection