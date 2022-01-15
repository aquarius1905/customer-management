@extends('layouts.default')
<style>
  body {
    width: 80%;
  }
  table {
    width: 100%;
  }
</style>
@section('title', '顧客リスト')
@section('side')
@section('main')
<table>
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
    <td>{{$item->name}}</td>
    <td>{{$item->name_furigana}}</td>
    <td>{{$item->birthday}}</td>
    <td>{{$item->email}}</td>
  </tr>
  @endforeach
</table>
@endsection