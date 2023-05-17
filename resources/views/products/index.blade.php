@extends('products.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Laravel 8 Crud</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('products.create')}}"></a>
        </div>
    </div>
</div>
@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endsection