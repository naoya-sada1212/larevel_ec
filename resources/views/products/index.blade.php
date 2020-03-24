@extends('layouts.app')
@section('title','商品一覧')
@section('content')
<div class="container" style="text-align:center;">
    <h1>商品一覧</h1>
    @foreach ($products as $product)
    <div class="row row-cols-1 row-cols-md-2">
      <div class="col mb-4">
        <div class="card" style="width: 18rem;">
          <img src="/{{ $product->imgpath }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->detail }}</p>
            <p>{{ $product->price }}</p>
            <form method="post" action="/mycart">
            {{ csrf_field() }}
              <input type="hidden" name="products_id" value="{{ $product->id }}">
              <input class="btn btn-primary" type="submit" value="カートに入れる">
            </form> 
          </div>
        </div>  
      </div>
    </div>
  </div>
</div>
@endforeach
<div class="text-center" style="width: 200px;margin: 20px auto;">
{{ $products->links() }}
</div>
@endsection