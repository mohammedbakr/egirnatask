@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>People Data</div>
                    <div>
                        <a href="{{ route('people.create') }}" class="btn btn-primary btn-sm">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($people as $person)
                    <tr>
                        <td>{{$person->id}}</td>
                        <td>{{$person->first_name}}</td>
                        <td>{{$person->last_name}}</td>
                        <td>{{$person->email}}</td>
                        <td>{{$person->city->name}}</td>
                        <td>
                            <a href="{{ route('people.edit', $person->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('people.destroy', $person->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('.table').DataTable();
    });
</script>
@endsection
