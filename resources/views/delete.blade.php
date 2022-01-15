@extends('layouts.default')
<style>
  body {
    width: 80%;
  }
  table {
    width: 100%;
  }
  th {
    padding: 20px 0;
  }
  td {
    padding: 20px;
  }
  input {
    width: 80%;
  }
</style>
@section('title', '顧客情報の削除')
@section('side')
@section('main')
<form action="/delete" method="POST">
  <table>
  @csrf
    <tr>
      <th>削除</th>
      <th>ID</th>
      <th>名前</th>
      <th>フリガナ</th>
      <th>生年月日</th>
      <th>メールアドレス</th>
    </tr>
    @foreach($items as $item)
    <tr>
      <td><input type="checkbox" name="delete_flg"></td>
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->name_furigana}}</td>
      <td>{{$item->birthday}}</td>
      <td>{{$item->email}}</td>
    </tr>
    @endforeach
  </table>
  <button class="btn">削除</button>
</form>
@endsection