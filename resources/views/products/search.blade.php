@extends('layouts.app')

@section('content')
    <h1>商品検索</h1>
    <form action="{{ route('products.search') }}" method="GET">
        <input type="text" name="keyword" placeholder="キーワードを入力">
        <button type="submit">検索</button>
    </form>

    @if (isset($results))
        <h2>検索結果</h2>
        <ul>
            @foreach ($results as $product)
                <li>{{ $product->name }}</li>
            @endforeach
        </ul>
    @endif
@endsection
