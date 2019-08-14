
<div id=title>
<div class="sample_box8">
<?php

// $db = new PDO("mysql:dbname=dartsarrange","root");
// $sql = $db->prepare( 'SELECT * FROM dartsarrange');
// $sql->execute();

while( in_array( ($arrangenumber = mt_rand(1,180)), array(163, 166, 169, 172, 173, 175, 176, 178, 179,) ) );
echo $arrangenumber . "<br>" . "<br>";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel ="stylesheet" href="../../css/top.css">
    <link rel ="stylesheet" href="../../css/header.css">
    <!-- <script type="text/javascript" src="./start.js"></script> -->
    <script type="text/javascript" src="./problem.js"></script>
    <title>dartsarrange</title>
</head>
<body>


<form action="#" name="form1" onsubmit="return checkText()" >


<p>1本目</p>
<br>
<select name="goods1" class="a" onChange="keisan()">
<option value="0">タイプを選択してください</option>
<option value="50">bull</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
</select>

<br>

<select name="goods2" class="b" onChange="keisan()">
<option value="0">タイプを選択してください</option>
<option value="1" data-val="50">こちらを選択して下さい</option>
  <option value="1" data-val="1">シングル</option>
  <option value="2" data-val="1">ダブル</option>
  <option value="3" data-val="1">トリプル</option>
  <option value="1" data-val="2">シングル</option>
  <option value="2" data-val="2">ダブル</option>
  <option value="3" data-val="2">トリプル</option>
  <option value="1" data-val="3">シングル</option>
  <option value="2" data-val="3">ダブル</option>
  <option value="3" data-val="3">トリプル</option>
  <option value="1" data-val="4">シングル</option>
  <option value="2" data-val="4">ダブル</option>
  <option value="3" data-val="4">トリプル</option>
  <option value="1" data-val="5">シングル</option>
  <option value="2" data-val="5">ダブル</option>
  <option value="3" data-val="5">トリプル</option>
  <option value="1" data-val="6">シングル</option>
  <option value="2" data-val="6">ダブル</option>
  <option value="3" data-val="6">トリプル</option>
  <option value="1" data-val="7">シングル</option>
  <option value="2" data-val="7">ダブル</option>
  <option value="3" data-val="7">トリプル</option>
  <option value="1" data-val="8">シングル</option>
  <option value="2" data-val="8">ダブル</option>
  <option value="3" data-val="8">トリプル</option>
  <option value="1" data-val="9">シングル</option>
  <option value="2" data-val="9">ダブル</option>
  <option value="3" data-val="9">トリプル</option>
  <option value="1" data-val="10">シングル</option>
  <option value="2" data-val="10">ダブル</option>
  <option value="3" data-val="10">トリプル</option>
  <option value="1" data-val="11">シングル</option>
  <option value="2" data-val="11">ダブル</option>
  <option value="3" data-val="11">トリプル</option>
  <option value="1" data-val="12">シングル</option>
  <option value="2" data-val="12">ダブル</option>
  <option value="3" data-val="12">トリプル</option>
  <option value="1" data-val="13">シングル</option>
  <option value="2" data-val="13">ダブル</option>
  <option value="3" data-val="13">トリプル</option>
  <option value="1" data-val="14">シングル</option>
  <option value="2" data-val="14">ダブル</option>
  <option value="3" data-val="14">トリプル</option>
  <option value="1" data-val="15">シングル</option>
  <option value="2" data-val="15">ダブル</option>
  <option value="3" data-val="15">トリプル</option>
  <option value="1" data-val="16">シングル</option>
  <option value="2" data-val="16">ダブル</option>
  <option value="3" data-val="16">トリプル</option>
  <option value="1" data-val="17">シングル</option>
  <option value="2" data-val="17">ダブル</option>
  <option value="3" data-val="17">トリプル</option>
  <option value="1" data-val="18">シングル</option>
  <option value="2" data-val="18">ダブル</option>
  <option value="3" data-val="18">トリプル</option>
  <option value="1" data-val="19">シングル</option>
  <option value="2" data-val="19">ダブル</option>
  <option value="3" data-val="19">トリプル</option>
  <option value="1" data-val="20">シングル</option>
  <option value="2" data-val="20">ダブル</option>
  <option value="3" data-val="20">トリプル</option>
</select>

<br><br>

<p>2本目</p>
<select name="goods3" class="c" onChange="keisan()">
<option value="0">タイプを選択してください</option>
<option value="50">bull</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
</select>

<br>

<select name="goods4" class="d" onChange="keisan()">
<option value="0">タイプを選択してください</option>
<option value="1" data-val="50">こちらを選択して下さい</option>
  <option value="1" data-val="1">シングル</option>
  <option value="2" data-val="1">ダブル</option>
  <option value="3" data-val="1">トリプル</option>
  <option value="1" data-val="2">シングル</option>
  <option value="2" data-val="2">ダブル</option>
  <option value="3" data-val="2">トリプル</option>
  <option value="1" data-val="3">シングル</option>
  <option value="2" data-val="3">ダブル</option>
  <option value="3" data-val="3">トリプル</option>
  <option value="1" data-val="4">シングル</option>
  <option value="2" data-val="4">ダブル</option>
  <option value="3" data-val="4">トリプル</option>
  <option value="1" data-val="5">シングル</option>
  <option value="2" data-val="5">ダブル</option>
  <option value="3" data-val="5">トリプル</option>
  <option value="1" data-val="6">シングル</option>
  <option value="2" data-val="6">ダブル</option>
  <option value="3" data-val="6">トリプル</option>
  <option value="1" data-val="7">シングル</option>
  <option value="2" data-val="7">ダブル</option>
  <option value="3" data-val="7">トリプル</option>
  <option value="1" data-val="8">シングル</option>
  <option value="2" data-val="8">ダブル</option>
  <option value="3" data-val="8">トリプル</option>
  <option value="1" data-val="9">シングル</option>
  <option value="2" data-val="9">ダブル</option>
  <option value="3" data-val="9">トリプル</option>
  <option value="1" data-val="10">シングル</option>
  <option value="2" data-val="10">ダブル</option>
  <option value="3" data-val="10">トリプル</option>
  <option value="1" data-val="11">シングル</option>
  <option value="2" data-val="11">ダブル</option>
  <option value="3" data-val="11">トリプル</option>
  <option value="1" data-val="12">シングル</option>
  <option value="2" data-val="12">ダブル</option>
  <option value="3" data-val="12">トリプル</option>
  <option value="1" data-val="13">シングル</option>
  <option value="2" data-val="13">ダブル</option>
  <option value="3" data-val="13">トリプル</option>
  <option value="1" data-val="14">シングル</option>
  <option value="2" data-val="14">ダブル</option>
  <option value="3" data-val="14">トリプル</option>
  <option value="1" data-val="15">シングル</option>
  <option value="2" data-val="15">ダブル</option>
  <option value="3" data-val="15">トリプル</option>
  <option value="1" data-val="16">シングル</option>
  <option value="2" data-val="16">ダブル</option>
  <option value="3" data-val="16">トリプル</option>
  <option value="1" data-val="17">シングル</option>
  <option value="2" data-val="17">ダブル</option>
  <option value="3" data-val="17">トリプル</option>
  <option value="1" data-val="18">シングル</option>
  <option value="2" data-val="18">ダブル</option>
  <option value="3" data-val="18">トリプル</option>
  <option value="1" data-val="19">シングル</option>
  <option value="2" data-val="19">ダブル</option>
  <option value="3" data-val="19">トリプル</option>
  <option value="1" data-val="20">シングル</option>
  <option value="2" data-val="20">ダブル</option>
  <option value="3" data-val="20">トリプル</option>
</select>

<br><br>

<p>3本目</p>
<select name="goods5" class="e" onChange="keisan()">
<option value="0">タイプを選択してください</option>
<option value="50">bull</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
</select>

<br>

<select name="goods6" class="f" onChange="keisan()">
<option value="0">タイプを選択してください</option>
<option value="1" data-val="50">こちらを選択して下さい</option>
  <option value="1" data-val="1">シングル</option>
  <option value="2" data-val="1">ダブル</option>
  <option value="3" data-val="1">トリプル</option>
  <option value="1" data-val="2">シングル</option>
  <option value="2" data-val="2">ダブル</option>
  <option value="3" data-val="2">トリプル</option>
  <option value="1" data-val="3">シングル</option>
  <option value="2" data-val="3">ダブル</option>
  <option value="3" data-val="3">トリプル</option>
  <option value="1" data-val="4">シングル</option>
  <option value="2" data-val="4">ダブル</option>
  <option value="3" data-val="4">トリプル</option>
  <option value="1" data-val="5">シングル</option>
  <option value="2" data-val="5">ダブル</option>
  <option value="3" data-val="5">トリプル</option>
  <option value="1" data-val="6">シングル</option>
  <option value="2" data-val="6">ダブル</option>
  <option value="3" data-val="6">トリプル</option>
  <option value="1" data-val="7">シングル</option>
  <option value="2" data-val="7">ダブル</option>
  <option value="3" data-val="7">トリプル</option>
  <option value="1" data-val="8">シングル</option>
  <option value="2" data-val="8">ダブル</option>
  <option value="3" data-val="8">トリプル</option>
  <option value="1" data-val="9">シングル</option>
  <option value="2" data-val="9">ダブル</option>
  <option value="3" data-val="9">トリプル</option>
  <option value="1" data-val="10">シングル</option>
  <option value="2" data-val="10">ダブル</option>
  <option value="3" data-val="10">トリプル</option>
  <option value="1" data-val="11">シングル</option>
  <option value="2" data-val="11">ダブル</option>
  <option value="3" data-val="11">トリプル</option>
  <option value="1" data-val="12">シングル</option>
  <option value="2" data-val="12">ダブル</option>
  <option value="3" data-val="12">トリプル</option>
  <option value="1" data-val="13">シングル</option>
  <option value="2" data-val="13">ダブル</option>
  <option value="3" data-val="13">トリプル</option>
  <option value="1" data-val="14">シングル</option>
  <option value="2" data-val="14">ダブル</option>
  <option value="3" data-val="14">トリプル</option>
  <option value="1" data-val="15">シングル</option>
  <option value="2" data-val="15">ダブル</option>
  <option value="3" data-val="15">トリプル</option>
  <option value="1" data-val="16">シングル</option>
  <option value="2" data-val="16">ダブル</option>
  <option value="3" data-val="16">トリプル</option>
  <option value="1" data-val="17">シングル</option>
  <option value="2" data-val="17">ダブル</option>
  <option value="3" data-val="17">トリプル</option>
  <option value="1" data-val="18">シングル</option>
  <option value="2" data-val="18">ダブル</option>
  <option value="3" data-val="18">トリプル</option>
  <option value="1" data-val="19">シングル</option>
  <option value="2" data-val="19">ダブル</option>
  <option value="3" data-val="19">トリプル</option>
  <option value="1" data-val="20">シングル</option>
  <option value="2" data-val="20">ダブル</option>
  <option value="3" data-val="20">トリプル</option>
</select>
<br><br>

<p>０にしてください</p>
<input type="text" name="field_total" size="8" value="点数" >

<div class="btn-area">
    <input type="submit" value="次へ" id="problem_button" onclick="return checkText();" >
</div>

</form>

</div>
</div>

  <script>
    function checkText() {
      if(document.form1.field_total.value != 0 ){
          alert('点数を0にして下さい');
          return false;
      }else{
	return true;
    }
    }
  </script>





<script>
// 一本目bullか数字かでプルダウン表示変更
var $b = $('.b');
var original = $b.html();

$('.a').change(function() {

  var val1 = $(this).val();

  $b.html(original).find('option').each(function() {
    var val2 = $(this).data('val');
    if (val1 != val2) {
      $(this).not(':first-child').remove();
    }
  });

  if ($(this).val() == "") {
    $b.attr('disabled', 'disabled');
  } else {
    $b.removeAttr('disabled');
  }

});

// 二本目bullか数字かでプルダウン表示変更
var $d = $('.d');
var originala = $d.html();

$('.c').change(function() {

  var val3 = $(this).val();

  $d.html(originala).find('option').each(function() {
    var val4 = $(this).data('val');
    if (val3 != val4) {
      $(this).not(':first-child').remove();
    }
  });

  if ($(this).val() == "") {
    $d.attr('disabled', 'disabled');
  } else {
    $d.removeAttr('disabled');
  }

});

// 三本目bullか数字かでプルダウン表示変更
var $f = $('.f');
var originalb = $f.html();

$('.e').change(function() {

  var val5 = $(this).val();

  $f.html(originalb).find('option').each(function() {
    var val6 = $(this).data('val');
    if (val5 != val6) {
      $(this).not(':first-child').remove();
    }
  });

  if ($(this).val() == "") {
    $f.attr('disabled', 'disabled');
  } else {
    $f.removeAttr('disabled');
  }

});

</script>

<script type="text/javascript">
<!--
function keisan(){

	// 設定開始

	// 商品1
	var price1 = document.form1.goods1.options[document.form1.goods1.selectedIndex].value;

	// 商品2
	var price2 = document.form1.goods2.options[document.form1.goods2.selectedIndex].value;

	// 商品3
	var price3 = document.form1.goods3.options[document.form1.goods3.selectedIndex].value;

  var price4 = document.form1.goods4.options[document.form1.goods4.selectedIndex].value;

  var price5 = document.form1.goods5.options[document.form1.goods5.selectedIndex].value;

  var price6 = document.form1.goods6.options[document.form1.goods6.selectedIndex].value;
	// 合計を計算,parseInt文字列を整数に変換
	total = parseInt(price1) * parseInt(price2) + parseInt(price3) * parseInt(price4) + parseInt(price5) * parseInt(price6);

  var $arrangenumber = <?php echo json_encode($arrangenumber); ?>;

	// 設定終了
  document.form1.field_total.value = $arrangenumber - total; // 合計を表示

}
// -->



</script>

</body>
</html>