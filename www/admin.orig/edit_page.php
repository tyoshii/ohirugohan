<?php
require_once(__DIR__.'/def.php');
if(!isset($_SESSION['user']) || $_SESSION['user'] === ''){
  header("Location: http://$HOST/$ROOT_DIR/auth.php?callback=http://${_SERVER['SERVER_NAME']}${_SERVER['REQUEST_URI']}");
} else {
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
</head>
<body>
<?php
// TODO: get data
$img_id = $_GET['id'];
$img_title = '';
$img_desc = '';
$img_suf  = '';

print <<<EOS
  <form method="post" action="edit.php">
    <p>タイトル:<input type="text" name="title" value="$img_title"></p>
    <p>拡張子:<input type="text" name="suffix" value="$img_suf"></p>
    <p>概要:<textarea name="description" value="$img_desc"></p>
    <input type="submit">
  </form>
EOS;
?>
</body>
</html>
<?php
}
