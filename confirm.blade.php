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
<h1>CONTACT お問い合わせ - 確認</h1>
</div>


<div class="col-md-3 offset-md-1">
<span>お問い合わせ種別</span>
</div>
<div class="col-md-6">
<?php
if($q2=="事業について"){
echo "事業について";
}elseif($q2=="採用について"){
echo "採用について";
}elseif($q2=="その他"){
echo "その他";
}
?>

<input
name="q2"
value="{{ $q2 }}"
type="hidden">
</div>



<div class="col-md-3 offset-md-1">
<span>氏名</span>
</div>
<div class="col-md-6">
{{ $name }}
<input
name="name"
value="{{ $name }}"
type="hidden">
</div>

<div class="col-md-3 offset-md-1">
<span>メールアドレス</span>
</div>
<div class="col-md-6">
{{ $email }}
<input
name="email"
value="{{ $email }}"
type="hidden">
</div>


<div class="col-md-3 offset-md-1">
<span>電話番号</span>
</div>
<div class="col-md-6">
{{ $number }}
<input
name="number"
value="{{ $number }}"
type="hidden">
</div>

<div class="col-md-3 offset-md-1">
<span>会社名</span>
</div>
<div class="col-md-6">
{{ $companyName }}
<input
name="companyName"
value="{{ $companyName }}"
type="hidden">
</div>

<div class="col-md-3 offset-md-1">
<span>部署名</span>
</div>
<div class="col-md-6">
{{ $deptName }}
<input
name="deptName"
value="{{ $deptName }}"
type="hidden">
</div>

<div class="col-md-3 offset-md-1">
<span>URL</span>
</div>
<div class="col-md-6">
{{ $url }}
<input
name="url"
value="{{ $url}}"
type="hidden">
</div>

<div class="col-md-3 offset-md-1">
<span>問い合わせ</span>
</div>
<div class="col-md-6">
{{ $content }}
<input
name="content"
value="{{ $content }}"
type="hidden">
</div>


<div class="col-md-1 offset-md-4">
<a class="btn-primary" href="https://localhost/admin/contact" role="button">Back</a>
</div>
<div class="col-md-5">
<form method="POST" action="thanks">
{{ csrf_field() }}
<input type="submit" class="btn-block" value="submit">
</form>
</div>

<div class="col-md-6 offset-md-6">

</div>



   


<div class="col-md-6 offset-md-4">
<footer>Copyright (C) BULLET GROUP INC. all rights reserved.</footer>
</div>
</div>

</div>


</body>



</html>
