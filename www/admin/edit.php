<?php
require_once(__DIR__.'/def.php');
if(!isset($_SESSION['user']) || $_SESSION['user'] === ''){
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
</head>
<body>
  <div>error:</div>
  <div>セッションが切れました。</div>
  <div>再ログインしてください。</div>
  <a href="index.php">ログイン</a>
</body>
</html>
<?php
} else {
  // TODO:edit file

  header("Location: http://$HOST/$ROOT_DIR/list.php");
}
