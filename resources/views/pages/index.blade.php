@extends('layouts.master')

@section('title')

    <title>Laraboot Homepage</title>

    @endsection

@section('content')

    {!! Breadcrumb::withLinks(['Home' => '/', 'Laraboot']) !!}

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">

    <h1>Laraboot</h1>

    <p>Use it as a starting point to create something more unique by
        building on or modifying it.
    </p>

</div>

    @endsection
