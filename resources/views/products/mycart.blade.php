@extends('layouts.app')
@section('title','確認画面')
@section('content')
{{ $message }}
@foreach ($my_carts as $my_cart)
{{ $my_cart->user_id }}
{{ $my_cart->products_id }}
@endforeach
<a href="/">商品一覧へ</a>
@endsection