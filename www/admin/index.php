<?php
require_once(__DIR__.'/def.php');
if(!isset($_SESSION['user']) || $_SESSION['user'] === ''){
  header("Location: http://$HOST/$ROOT_DIR/auth.php?callback=http://${_SERVER['SERVER_NAME']}${_SERVER['REQUEST_URI']}");
} else {
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Admin UI</title>
</head>
<body>
  <a href="list.php">list</a><br>
  <a href="upload.php">upload</a><br>
</body>
</html>
<?php
}
