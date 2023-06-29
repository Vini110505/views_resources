@extends('layouts.app')

@section('content')
    <h1>Editar Produto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection