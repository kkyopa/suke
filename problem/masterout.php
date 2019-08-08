<?php
require('../config.php');
require("../header.php");
?>
<!-- include("../tpl/problem/masterout.html"); -->
<div id=title>
    <h1>マスターアウト編</h1>
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



<?php include("../footer.php"); ?>