@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Show customer</div>

                <div class="card-body">

                    <ul>
                        <li>Name: {{ $customer->name }}</li>
                        <li>Nationality: {{ $customer->nationality }}</li>
                        <li>Occupation: {{ $customer->occupation }}</li>
                        <li>Birthday: {{ $customer->birthday }}</li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Adress</div>

                <div class="card-body">

                <a href="{{ route('admin.addresses.create') }}" class="btn btn-sm btn-primary">Add new</a>
                <br /><br/>

                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Street</th>
                        <th>Actions</th>
                    </tr> 
                    @forelse($addresses as $address)
                        <tr>
                            <td>{{ $address->id }}</td>
                            <td>{{ $address->street }}</td>
                            <td>
                                <form method="POST" action="#">
                                    <a href="{{ route('admin.addresses.show', $address->id) }}" class="btn btn-sm btn-success">Show</a>
                                    <a href="{{ route('admin.addresses.edit', $address->id) }}" class="btn btn-sm btn-info">Edit</a>
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
