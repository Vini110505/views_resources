@extends('layouts.app')

@section('content')
    <h1>Detalhes do Produto</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">ID: {{ $product->id }}</p>
            <p class="card-text">Preço: {{ $product->price }}</p>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('



