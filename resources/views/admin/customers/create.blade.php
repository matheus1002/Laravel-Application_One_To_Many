@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new customer</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('admin.customers.store') }}">
                        @csrf

                        Name:
                        <input type="text" name="name" class="form-control" />
                        <br />
                        Nationality:
                        <input type="text" name="nationality" class="form-control" />
                        <br />
                        Occupation:
                        <input type="text" name="occupation" class="form-control" />
                        <br />
                        Birthday:
                        <input type="date" name="birthday" class="form-control" />
                        <br />

                        <input type="submit" value="Save" class="btn btn-primary" />
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
