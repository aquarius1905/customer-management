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
  .update_btn {
    margin: 0 0 0 auto;
  }
</style>
@section('title', '顧客情報の更新')
@section('side')
@section('main')
<form action="/update" method="POST">
  <button class="update_btn btn">更新</button>
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
      <td>{{$item->id}}<input type="hidden" name="ids[]" value="{{$item->id}}"></td>
      <td><input type="text" name="names[]" value="{{$item->name}}"></td>
      <td><input type="text" name="name_furiganas[]" value="{{$item->name_furigana}}"></td>
      <td><input type="date" name="birthdays[]" value="{{$item->birthday}}"></td>
      <td><input type="text" name="emails[]" value="{{$item->email}}"></td>
    </tr>
    @endforeach
  </table>
</form>
@endsection