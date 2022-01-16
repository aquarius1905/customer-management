<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body {
      font-size: 16px;
    }
    .container {
      display: flex;
      width: 100%
    }
    .side {
      width: 10%;
    }
    .main {
      width: 90%;
    }
    .list,
    .add,
    .update,
    .delete {
      text-decoration: none;
      color: #000;
    }
    .title {
      font-weight: bold;
      color: #28b893;
      text-align: center;
    }
    th {
      background: #28b893;
      color: #fff;
      border: none;
    }
    .btn {
      display: block;
      border: none;
      background: #28b893;
      color: #fff;
      padding: 10px 20px;
      width: 160px;
      font-weight: bold;
      font-size: 18px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="side">
      <div><a href="{{url('')}}" class="list">一覧</a></div>
      <div><a href="{{url('add')}}" class="add">追加</a></div>
      <div><a href="{{url('update')}}" class="update">更新</a></div>
      <div><a href="{{url('delete')}}" class="delete">削除</a></div>
    </div>
    <div class="main">
      <h1 class="title">@yield('title')</h1>
      @yield('main')
    </div>
  </div>
</body>
</html>