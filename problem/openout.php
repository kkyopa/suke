<?php
require('../config.php');
require("../header.php");
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
        <!--ここでjQueryのライブラリを読み込んでます。魔法の言葉です。-->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
        <!--今回メインのajax処理を記載したjsファイルを読み込みます。-->
        <script type="text/javascript" src="./start.js"></script>
        <script type="text/javascript" src="./problem.js"></script>
        <!--記事内では触れてませんが適当にcssをあてております。-->
        <link rel ="stylesheet" href="../../css/header.css">
    </head>
<body>
    <div id=title>
        <h1> オープンアウト編</h1>
        <p>
</p>
        <form name="openout" action="openout.php" id="mondaisu" method="post" >
            <!-- <p id="mondaierabu">問題数を選ぶ</p>
            <select name="mondaisu">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
            </select> -->
        <div class="btn-area">
            <input type="submit" value="スタート" id="search_button" onclick="Sample4()">
        </div>
        </form>

<script>
    $(function() {
        $("#search_button").on("click", function() {
            $("#search_button, #mondaisu").remove();
        });
    });



</script>
    </div>
    <div id="res"></div>
</body>
</html>

<?php
// include("../tpl/problem/openout.html");
include("../footer.php");
?>
