@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Show address</div>

                <div class="card-body">

                    <ul>
                        <li>Street: {{ $address->street }}</li>
                        <li>Number: {{ $address->number }}</li>
                        <li>City: {{ $address->city }}</li>
                        <li>State: {{ $address->state }}</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
