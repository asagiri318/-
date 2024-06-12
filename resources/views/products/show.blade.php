@extends('layouts.app')

@section('content')
    <h1>商品詳細</h1>
    <p>商品名: {{ $product->name }}</p>
    <p>説明: {{ $product->description }}</p>
    <p>価格: {{ $product->price }}</p>
    <!-- 他の詳細情報を表示 -->
@endsection
