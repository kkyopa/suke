<?php

require('./config.php');
require("./header.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel ="stylesheet" href="../../css/top.css">
<title>dartsarrange</title>
</head>
<body>

<p class="lead-form">お問い合わせはこちらから！</p>

<form action="mail.php" method="post">

<div class="item">
<label class="label">件名</label>
<input type="text" name="subject" size="37" value="" /><br />
</div>

<div class="item">
<label class="label">お名前</label>
<input class="inputs" type="text" name="name">
</div>

<div class="item">
<label class="label">メールアドレス</label>
<input class="inputs" type="email" name="email">
</div>

<div class="item">
<label class="label">内容</label>
<textarea name="message" class="inputs"></textarea>
</div>

<div class="btn-area">
<input type="submit" value="送信する"><input type="reset" value="リセット">
</div>

</form>

</body>
</html>

<?php include("./footer.php"); ?>