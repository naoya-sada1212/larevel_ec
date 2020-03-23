<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>商品一覧</title>
</head>
<body>
<h1>商品一覧</h1>
<br>
@foreach ($products as $product)
<h2>{{ $product->name }}</h2>
<p>{{ $product->price }}</p>
<p>{{ $product->imgpath }}</p>
<p>{{ $product->detail }}</p>
@endforeach
</body>
</html>