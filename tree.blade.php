<html>
<head>
<title>お問い合わせ|バレットグループ株式会社</title>
<style>
body {font-size:16pt; color:#999; }

</style>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<form method="POST" action="contact">
{{ csrf_field() }}
<div class="container">
<header>
<div class="row">
<div class=col-sm-11>
<p>バレットグループ株式会社</p>
</div>

<div class=col-sm-1>
<a href="/">MENU</a>
</div>

<div class=col-sm-11>
<h1>CONTACT お問い合わせ一覧</h1>
</div>

@extends('layouts.helloapp')



@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')
   <table>
   <tr><th>お問い合わせID</th><th>お問い合わせ種別</th><th>氏名</th><th>電話番号</th><th>会社名</th><th>部署名</th><th>ユーザーID</th><th>email</th></tr>
   @foreach ($items as $item)
       <tr>
            <td>{{$item->id}}</td>
　　        <td>{{$item->q2}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->number}}</td>
　          <td>{{$item->companyName}}</td>
        　　<td>{{$item->deptName}}</td>
        　  <td>{{$item->board_id}}</td>
         <td>{{$item->board->email}}</td>

       </tr>
   @endforeach

   </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection



<div class="col-md-6 offset-md-4">
<footer>Copyright (C) BULLET GROUP INC. all rights reserved.</footer>
</div>

</div>


</body>


</html>


