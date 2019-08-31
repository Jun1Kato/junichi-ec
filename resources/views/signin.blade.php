@include('header')
<span>こんにちは</span>
@if (Auth::check())
  {{ ¥Auth::user()->name }}さん
@else
  ゲストさん<br>
  <a href="/signup">会員登録</a>
@endif
<div class="wrapper">
  <a href="home">>>HOME</a>
  <div class="product_detail">
    {{Form::open(['method' => 'POST'])}}
      {{Form::hidden('product')}}<br>
      <ul class="form">
        <li class="input"><span>email:</span> {{Form::text('email')}}<br></li>
        <li class="input"><span>password:</span> {{Form::text('firstname')}}<br></li>
      </ul>
      {{Form::submit('SEND', ['class' => 'btn']) }}
      {{Form::button('BACK', ['class' => 'btn', 'onclick' => 'history.back()']) }}
    {{Form::close()}}
  </div>
</div>
@include('footer')
