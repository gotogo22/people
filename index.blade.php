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
<h1>CONTACT お問い合わせ - 入力</h1>
</div>


<div class="col-md-3 offset-md-1">
<span class="white">必須 </span> <span>お問い合わせ種別</span>
</div>
<div class="col-md-6">
<label class="radio">
<input type="radio" name="q2" value="事業について">事業について
</label>
<label class="radio">
<input type="radio" name="q2" value="採用について">採用について
</label>
<label class="radio">
<input type="radio" name="q2" value="その他">その他
</label>
</div>
@if ($errors->has('q2'))
<p class="error-message">{{ $errors->first('q2') }}</p>
@endif

<div class="col-md-3 offset-md-1">
<span class="white">必須 </span> <span>氏名</span>
</div>
<div class="col-md-6">
<input id="title" name="name" class="form-control" value="{{ $name }}" type="text" placeholder="例) 東新宿　太郎">
</div>
<!-- ifでから以外の場合、戻るを選択すると前の入力したものが入った状態になるようにしたが上手く行かず -->
<?php /*if( !empty($_POST['name']) ){ echo $_POST['name']; } */?>
@if ($errors->has('name'))
<p class="error-message">{{ $errors->first('name') }}</p>
@endif

<div class="col-md-3 offset-md-1">
<span class="white">必須 </span> <span>メールアドレス</span>
</div>
<div class="col-md-6">
<input id="title" name="email" class="form-control "value="{{ $email }}" type="email" placeholder="例) taro-higashishinjuku@gmail.com">
</div>
@if ($errors->has('email'))
<p class="error-message">{{ $errors->first('email') }}</p>
@endif

<div class="col-md-3 offset-md-1">
<span class="white">必須 </span> <span>電話番号</span>
</div>
<div class="col-md-6">
<input id="title" name="number" class="form-control "value="{{ $number }}" type="text" placeholder="例)00011112222">
</div>
@if ($errors->has('number'))
<p class="error-message">{{ $errors->first('number') }}</p>
@endif

<div class="col-md-3 offset-md-1">
<span class="white">任意 </span> <span>会社名</span>
</div>
<div class="col-md-6">
<input id="title" name="companyName" class="form-control "value="{{ $companyName }}" type="text" placeholder="例)バレットグループ株式会社">
</div>

<div class="col-md-3 offset-md-1">
<span class="white">任意 </span> <span>部署名</span>
</div>
<div class="col-md-6">
<input id="title" name="deptName" class="form-control "value="{{ $deptName }}" type="text" placeholder="例)システムインテグレーション">
</div>

<div class="col-md-3 offset-md-1">
<span class="white">任意 </span> <span>URL</span>
</div>
<div class="col-md-6">

<!-- 下記valueに$urlといれるとエラーメッセージが表示 -->
<input id="title" name="url" class="form-control" value="" type="text" placeholder="例)https://bltinc.co.jp">
</div>

<div class="col-md-3 offset-md-1">
<span class="white">任意 </span> <span>問い合わせ</span>
</div>
<div class="col-md-6">
<textarea name="content" class="contact-form" value="{{ $content }}" cols="60" rows="5" placeholder="例) 現在私は株式会社××にてC/C++とJavaを使用してバックエンド・インフラ 開発に従事し、チームのリーダーとして約60名ほどのエンジニアを統括していま す。その他、個人で執筆活動を行なっており、現在月間PV数200万を誇るブログ を運営しています。今後は貴社にてこれまでの知見を活かし、経営や組織開発、 マネジメントにも携わっていきたいと考えています。">
</textarea>       
</div>



</div>

<div class="col-md-6 offset-md-4">
<label>
<input type="checkbox" class="" name="agreement">
<span>個人情報の利用について同意します</span>
</label>
</div>
</header>


<input type="submit" value="send"><br>
</form>


<div class="col-md-6 offset-md-4">
<footer>Copyright (C) BULLET GROUP INC. all rights reserved.</footer>
</div>

</div>


</body>


</html>
