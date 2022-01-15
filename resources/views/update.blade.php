@extends('layouts.default')
<style>
  table {
    width: 100%;
  }
  th {
    padding: 10px 0;
  }
  td {
    padding: 10px;
  }
  input {
    width: 80%;
  }
</style>
@section('title', '顧客情報の更新')
@section('side')
@section('main')
<form action="/update" method="POST">
  <table>
    @csrf
    <tr>
      <th>ID</th>
      <th>名前</th>
      <th>フリガナ</th>
      <th>生年月日</th>
      <th>メールアドレス</th>
    </tr>
    @foreach($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td><input type="text" name="name" value="{{$item->name}}"></td>
      <td><input type="text" name="name_furigana" value="{{$item->name_furigana}}"></td>
      <td><input type="date" name="birthday" value="{{$item->birthday}}"></td>
      <td><input type="text" name="email" value="{{$item->email}}"></td>
    </tr>
    @endforeach
  </table>
  <button class="btn">送信</button>
</form>
@endsection