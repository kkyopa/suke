<?php
require('../config.php');
require("../header.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel ="stylesheet" href="../../css/header.css">
<title>dartsarrange</title>
</head>
<body>
<div id=title>
    <h1> オープンアウト編</h1>
    <form id="mondaisu">
        <p>問題数を選ぶ</p>
        <select name="mondaisu">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        </select>
    </form>
    <div class="btn-area">
        <input type="submit" value="スタート">
    </div>
</div>

</body>
</html>


<?php
// include("../tpl/problem/openout.html");
include("../footer.php");
?>