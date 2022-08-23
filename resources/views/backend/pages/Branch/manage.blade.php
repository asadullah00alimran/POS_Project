@extends('backend.mastering.master')
    @section('imran')
    <table class="table">
        <tr>
            <th>#sl</th>
            <th>Branch Name</th>
            <th>Branch Manager Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php $sl = 1; ?>
        @foreach($branch as $branch)
        <tr>
            <td>{{ $sl }}</td>
            <td>{{ $branch->name }}</td>
            <td>{{ $branch->manager }}</td>
            <td>{{ $branch->phone }}</td>
            <td>{{ $branch->email }}</td>
            <td>
                @if($branch->status == 1)
                    <a href="{{ Route('branch.status', $branch->id) }}" class="btn btn-success btn-sm">Active</a>
                @else
                    <a href="{{ Route('branch.status', $branch->id) }}" class="btn btn-warning btn-sm">Inactive</a>
                @endif
            </td>
            <td>
                <a href="{{ Route('branch.edit', $branch->id) }}" class="btn btn-info btn-sm "> <i class="fa fa-edit"></i></a>
                <a href="{{ Route('branch.destroy', $branch->id) }}" class="btn btn-danger btn-sm "> <i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php $sl++ ?>
        @endforeach
    </table>
@endsection