<?php

require('./config.php');
require("./header.php");
?>


<?php

$message = "名前：" . $_POST["name"] . "\n本文：" . $_POST["message"];

if (!mb_send_mail("kkyopa@gmail.com", $_POST["subject"], $message, "From:" . $_POST["mail"])) {
exit("error");
}


// var_dump($message);
// var_dump($_POST);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>dartsarrange</title>
</head>
<body>
<p>メールが送信されました。</p>

</body>
</html>

<?php include("./footer.php"); ?>