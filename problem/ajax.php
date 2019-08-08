
<div id=title>
<div class="sample_box8">
<?php

// $db = new PDO("mysql:dbname=dartsarrange","root");
// $sql = $db->prepare( 'SELECT * FROM dartsarrange');
// $sql->execute();

while( in_array( ($arrangenumber = mt_rand(1,180)), array(163, 166, 169, 172, 173, 175, 176, 178, 179,) ) );
echo $arrangenumber . "<br>";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel ="stylesheet" href="../../css/top.css">
    <link rel ="stylesheet" href="../../css/header.css">
    <title>dartsarrange</title>
</head>
<body>


<br>
<label class="kaitou1">1本目</label>
<br>
<select class="parent" name="foo">
  <option value="" selected="selected"></option>
  <option value="bull">bull</option>
  <option value="numberzone">1</option>
  <option value="numberzone">2</option>
  <option value="numberzone">3</option>
  <option value="numberzone">4</option>
  <option value="numberzone">5</option>
  <option value="numberzone">6</option>
  <option value="numberzone">7</option>
  <option value="numberzone">8</option>
  <option value="numberzone">9</option>
  <option value="numberzone">10</option>
  <option value="numberzone">11</option>
  <option value="numberzone">12</option>
  <option value="numberzone">13</option>
  <option value="numberzone">14</option>
  <option value="numberzone">15</option>
  <option value="numberzone">16</option>
  <option value="numberzone">17</option>
  <option value="numberzone">18</option>
  <option value="numberzone">19</option>
  <option value="numberzone">20</option>
</select>
<br>

<select class="children" name="bar" disabled>
  <option value="" selected="selected"></option>
  <option value="bull" data-val="bull"></option>
  <option value="numberzone" data-val="numberzone">シングル</option>
  <option value="numberzone" data-val="numberzone">ダブル</option>
  <option value="numberzone" data-val="numberzone">トリプル</option>
</select>
<br>
    <br>
    <label class="kaitou2">2本目</label>
    <br>
<select class="parenta" name="foo">
  <option value="" selected="selected"></option>
  <option value="bull">bull</option>
  <option value="numberzone">1</option>
  <option value="numberzone">2</option>
  <option value="numberzone">3</option>
  <option value="numberzone">4</option>
  <option value="numberzone">5</option>
  <option value="numberzone">6</option>
  <option value="numberzone">7</option>
  <option value="numberzone">8</option>
  <option value="numberzone">9</option>
  <option value="numberzone">10</option>
  <option value="numberzone">11</option>
  <option value="numberzone">12</option>
  <option value="numberzone">13</option>
  <option value="numberzone">14</option>
  <option value="numberzone">15</option>
  <option value="numberzone">16</option>
  <option value="numberzone">17</option>
  <option value="numberzone">18</option>
  <option value="numberzone">19</option>
  <option value="numberzone">20</option>
</select>
<br>

<select class="childrena" name="bar" disabled>
  <option value="" selected="selected"></option>
  <option value="bull" data-val="bull"></option>
  <option value="numberzone" data-val="numberzone">シングル</option>
  <option value="numberzone" data-val="numberzone">ダブル</option>
  <option value="numberzone" data-val="numberzone">トリプル</option>
</select>
<br>
    <label class="kaitou3">3本目</label>
    <br>
    <br>
<select class="parentb" name="foo">
  <option value="" selected="selected"></option>
  <option value="bull">bull</option>
  <option value="numberzone">1</option>
  <option value="numberzone">2</option>
  <option value="numberzone">3</option>
  <option value="numberzone">4</option>
  <option value="numberzone">5</option>
  <option value="numberzone">6</option>
  <option value="numberzone">7</option>
  <option value="numberzone">8</option>
  <option value="numberzone">9</option>
  <option value="numberzone">10</option>
  <option value="numberzone">11</option>
  <option value="numberzone">12</option>
  <option value="numberzone">13</option>
  <option value="numberzone">14</option>
  <option value="numberzone">15</option>
  <option value="numberzone">16</option>
  <option value="numberzone">17</option>
  <option value="numberzone">18</option>
  <option value="numberzone">19</option>
  <option value="numberzone">20</option>
</select>
<br>

<select class="childrenb" name="bar" disabled>
  <option value="" selected="selected"></option>
  <option value="bull" data-val="bull"></option>
  <option value="numberzone" data-val="numberzone">シングル</option>
  <option value="numberzone" data-val="numberzone">ダブル</option>
  <option value="numberzone" data-val="numberzone">トリプル</option>
</select>
<br>
    <br> <br>

<div class="btn-area">
    <input type="submit" value="次へ" id="search_button">
 </div>
</div>
</div>

<script>

// 一本目
var $children = $('.children');
var original = $children.html();

$('.parent').change(function() {

  var val1 = $(this).val();

  $children.html(original).find('option').each(function() {
    var val2 = $(this).data('val');
    if (val1 != val2) {
      $(this).not(':first-child').remove();
    }
  });

  if ($(this).val() == "") {
    $children.attr('disabled', 'disabled');
  } else {
    $children.removeAttr('disabled');
  }

});

// 二本目
var $childrena = $('.childrena');
var originala = $childrena.html();

$('.parenta').change(function() {

  var val3 = $(this).val();

  $childrena.html(originala).find('option').each(function() {
    var val4 = $(this).data('val');
    if (val3 != val4) {
      $(this).not(':first-child').remove();
    }
  });

  if ($(this).val() == "") {
    $childrena.attr('disabled', 'disabled');
  } else {
    $childrena.removeAttr('disabled');
  }

});

// ３本目
var $childrenb = $('.childrenb');
var originalb = $childrenb.html();

$('.parentb').change(function() {

  var val5 = $(this).val();

  $childrenb.html(originalb).find('option').each(function() {
    var val6 = $(this).data('val');
    if (val5 != val6) {
      $(this).not(':first-child').remove();
    }
  });

  if ($(this).val() == "") {
    $childrenb.attr('disabled', 'disabled');
  } else {
    $childrenb.removeAttr('disabled');
  }

});

</script>
</body>
</html>