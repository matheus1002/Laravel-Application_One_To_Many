@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customers</div>

                <div class="card-body">

                    <a href="{{ route('admin.customers.create') }}" class="btn btn-sm btn-primary">Add new</a> 
                    <br /><br />

                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Nationality</th>
                            <th>Actions</th>
                        </tr>
                        @forelse($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->nationality }}</td>
                                <td>
                                    
                                    <form method="POST" action="{{ route('admin.customers.destroy', $customer->id) }}">
                                    <a href="{{ route('admin.customers.show', $customer->id) }}" class="btn btn-sm btn-success">Show</a>
                                    <a href="{{ route('admin.customers.edit', $customer->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        @csrf 
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Delete" onclick="return confirm('Are you sure?')" 
                                            class="btn btn-sm btn-danger"/>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">No records found.</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
