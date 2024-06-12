@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>商品出品フォーム</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">商品名</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="商品名" required>
            </div>
            <div class="form-group">
                <label for="description">商品の説明</label>
                <textarea class="form-control" id="description" name="description" placeholder="商品の説明" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">価格</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="価格" required>
            </div>
            <button type="submit" class="btn btn-primary">出品する</button>
        </form>
    </div>
@endsection
