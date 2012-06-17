<?php
require_once(__DIR__.'/def.php');
if(isset($_GET['callback']) || $_GET['callback'] === '' ){
  $callback = "http://$HOST/$ROOT_DIR/";
} else {
  $callback = $_GET['callback'];
}
if(isset($_SESSION['user']) && $_SESSION['user'] !== ''){
  header("Location: $callback");
} else if(isset($_POST['user_name']) && isset($_POST['pass'])){
  if(isset($_POST['user_name'])) $_SESSION['user'] = $_POST['user_name'];
  header("Location: http://$HOST/${_SERVER['REQUEST_URI']}");
  #print("Location: $HOST/${_SERVER['REQUEST_URI']}");

print "<pre>\nGET:\n";
var_dump($_GET);
print "POST\n";
var_dump($_POST);
print "</pre>\n";

} else {
print "<pre>\n";
var_dump($_GET);
print "</pre>\n";

  $auth = (isset($_POST['auth']) && $_POST['auth'] === 'fail');

  authorize($auth);
}

function authorize($auth)
{
  $error = ($auth)? "   <font size=\"5\" color=\"red\">authorization failed.</font><br>\n" : "";
  print <<<EOS
<html>
  <header>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
  </header>
  <body>
    $error
    <form method="post" action="#">
      <p>ユーザ名:<input type="text" name="user_name"></p>
      <p>パスワード:<input type="password" name="pass"></p>
      <input type="submit">
    </form>
  </body>
</html>
EOS;
}
