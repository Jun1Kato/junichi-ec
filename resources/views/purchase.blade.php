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
  {{Form::open(['url' => 'complete', 'method' => 'POST'])}}
    <ul class="form">
      <li class="input" style="display:none;"><span>product:</span> <input name="product" type="text" value={{$val}}><br></li>
      <li class="input"><span>quantity:</span> {{Form::text('quantity')}}<br></li>
      <li class="input"><span>firstname:</span> {{Form::text('firstname')}}<br></li>
      <li class="input"><span>lastname:</span> {{Form::text('lastname')}}<br></li>
      <li class="input"><span>address:</span> {{Form::text('address')}}<br></li>
      <li class="input"><span>confirm:</span> {{Form::checkbox('confirm')}}<br></li>
    </ul>
    {{Form::submit('SEND', ['class' => 'btn']) }}
    {{Form::button('BACK', ['class' => 'btn', 'onclick' => 'history.back()']) }}
  {{Form::close()}}
</div>
@include('footer')
