@extends('layouts.default')
<style>
  body {
    width: 50%;
  }
  table {
    width: 100%;
  }
  th {
    width: 30%;
    padding: 20px 0;
  }
  td {
    width: 60%;
    padding: 25px;
  }
  input {
    width: 80%;
  }
  .add_btn {
    margin: 0 auto;
  }
</style>
@section('title', '顧客の追加')
@section('side')
@section('main')
<form action="/add" method="POST">
  <table>
  @csrf
  <tr>
    <th>名前</th>
    <td><input type="text" name="name"></td>
  </tr>
  <tr>
    <th>フリガナ</th>
    <td><input type="text" name="name_furigana"></td>
  </tr>
  <tr>
    <th>生年月日</th>
    <td><input type="date" name="birthday"></td>
  </tr>
  <tr>
    <th>メールアドレス</th>
    <td><input type="text" name="email"></td>
  </tr>
  </table>
  <button class="add_btn btn">追加</button>
</form>
@endsection