@extends('layouts.app')
@section('title','商品一覧')
@section('content')
<h1>商品一覧</h1>
<br>
@foreach ($products as $product)
<h2>{{ $product->name }}</h2>
<p>{{ $product->price }}</p>
<p>{{ $product->imgpath }}</p>
<p>{{ $product->detail }}</p>
<a href="/show/{{ $product->id }}">カートに入れる</a>
@endforeach
{{ $products->links() }}
@endsection