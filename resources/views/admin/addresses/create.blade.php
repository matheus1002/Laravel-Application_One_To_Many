@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new address</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('admin.addresses.store') }}">
                        @csrf

                        Street:
                        <input type="text" name="street" class="form-control" />
                        <br />
                        Number:
                        <input type="text" name="number" class="form-control" />
                        <br />
                        City:
                        <input type="text" name="city" class="form-control" />
                        <br />
                        State:
                        <input type="text" name="state" class="form-control" />
                        <br />

                        <input type="submit" value="Save" class="btn btn-primary" />
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
