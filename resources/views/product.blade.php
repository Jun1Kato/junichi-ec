@include('header')
  <div class="wrapper">
    <a href="home">>>HOME</a>
    <div class="product_detail">
      <img src="img/product{{$val}}.jpg" alt="product2">
      <p>
        product_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detail
        product_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detail
        product_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detail
        product_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detail
        product_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detailproduct_detail
      </p>
    </div>
    {{Form::button('BUY', ['class' => 'btn', 'onclick' => "location.href='purchase?id={$val}';"]) }}
    {{Form::button('BACK', ['class' => 'btn', 'onclick' => 'history.back()']) }}
  </div>
@include('footer')
