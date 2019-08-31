@include('header')
<span>こんにちは</span>
@if (Auth::check())
  {{ ¥Auth::user()->name }}さん
@else
  ゲストさん<br>
  <a href="/signup">会員登録</a>
  <div class="product_wrapper">
    <ul class="products">
      @foreach ($products as $product)
      <li><a href="product?id={{ $product->id }}"><img src="img/product{{ $product->id }}.jpg" alt="product"></a></li>
      @endforeach
    </ul>
  </div>
@endif
@include('footer')
