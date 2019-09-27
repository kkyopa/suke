$(function() {
    //検索ボタンがクリックされたら処理が走ります。
    $('#problem_button').click(function() {
                  //HTMLから受け取るデータです。
                if(document.form1.field_total.value == 0 ){
                  var data = {request : $('#request').val()};
                  //ここからajaxの処理です。
                  $.ajax({
                          //POST通信
                          type: "POST",
                          //ここでデータの送信先URLを指定します。
                          url: "start.php",
                          data: data,
                          //処理が成功したら
                          success : function(data, dataType) {
                              //HTMLファイル内の該当箇所にレスポンスデータを追加します。
                              $('#res').html(data);
                          },
                          //処理がエラーであれば
                          error : function() {
                              alert('通信エラー');
                          }
                   });
                   //submitによる画面リロードを防いでいます。
                   return false;
                };
      });
    });


    function Sample4(){
      var hoge = openout.mondaisu.value;
      　　if (hoge == 6) {
          window.location.href = "../result/openresult.php";
             // alert(hoge+"が選択されています");
 　　     }
     }

// function checkForm(){
//     if(document.form1.field_total.value != 0 ){
//         alert("0にして下さい");
// 	return false;
//     }else{
// 	return true;
//     }
// }

