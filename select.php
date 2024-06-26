<?php


require_once('funcs.php');

//1.  DB接続します
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=kadai08_db1;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare('SELECT * FROM kadai08_db1_table');
$status = $stmt->execute();

//３．データ表示
$view='';
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit('ErrorQuery:'.$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<P>';
    $view .= h($result['date']). ' ' . h($result['point_name']). ' ' . h($result['comment']). ' '. h($result['wind_direction']);
    $view .= '</P>';
  }
}
?>


<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>Dive Log表示</title>
<link rel='stylesheet' href='css/range.css'>
<link href='css/bootstrap.min.css' rel='stylesheet'>
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id='main'>
<!-- Head[Start] -->
<header>
  <nav class='navbar navbar-default'>
    <div class='container-fluid'>
      <div class='navbar-header'>
      <a class='navbar-brand' href='index.php'>データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class='container jumbotron'><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>
