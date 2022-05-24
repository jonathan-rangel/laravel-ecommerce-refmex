@extends('layouts.layout')

@include('layouts.navbar')
<div class="container mt-4 text-center">
    <h1> {{ $category->name }} </h1>
</div>
@include('products_grid')
@include('layouts.footer')
