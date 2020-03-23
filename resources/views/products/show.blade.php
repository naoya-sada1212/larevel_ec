@extends('layouts.app')
@section('title','確認画面')
@section('content')
<h2>{{ $products->name }}</h2>
<p>{{ $products->price }}</p>
<p>{{ $products->imgpath }}</p>
<p>{{ $products->detail }}</p>

@endsection