<?php ini_set('display_errors','no');
if($_POST){
	$data = $_POST['hoge'];
	file_put_contents('data.txt',$data);
// POSTが届いたらテキストファイルをスクリプトと同じフォルダに書き出す。
echo '成功しました';
}

