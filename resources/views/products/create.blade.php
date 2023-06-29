@extends('layouts.app')

@section('content')
    <h1>Novo Produto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection