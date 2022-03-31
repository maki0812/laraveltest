@extends('layouts.default')
@section('title', 'トップページ')

@section('content')
  @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif
 <form action="" method="POST">
      @csrf     
        <div>氏名</div>     
        <div><input type="text" name="name"></div>
        <div>メールアドレス</div>      
        <div><input type="email" name="email"></div>
      <input type="submit" value="送信する">
      </form>
@endsection