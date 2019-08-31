@include('header')
<span>こんにちは</span>
@if (Auth::check())
  {{ ¥Auth::user()->name }}さん
@endif
<div class="wrapper">
  <h1>THANK YOU!</h1>
  {{Form::button('HOME', ['class' => 'btn', 'onclick' => "location.href='home';"]) }}
</div>
@include('footer')