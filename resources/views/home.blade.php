@extends('layouts.master')
@section('title', 'Home')

@section('content')
<div class="card">
    <div class="card-body">
        Welcome {{ auth()->user()->name }}
    </div>
</div>
@endsection