<?php
require_once(__DIR__.'/def.php');
if(!isset($_SESSION['user']) || $_SESSION['user'] === ''){
  header("Location: http://$HOST/$ROOT_DIR/auth.php?callback=http://${_SERVER['SERVER_NAME']}${_SERVER['REQUEST_URI']}");
} else {
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>list</title>
</head>
<body>
  <table border=1>
    <thead>
      <tr>
<?php
//foreach でカラム名をとる
?>
        <td>id</td>
        <td>title</td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr>
    </thead>
    <tbody>
<?php
  require_once(__DIR__.'/Image.php');

$images = array();
$i = new Image();
$i->setId(1)->setTitle('title');
$images[] = $i;

  foreach($images as $img){
    print '       <td>';
    print $img->getId();
    print "</td>\n";
    print '       <td>';
    print $img->getTitle();
    print "</td>\n";
    print '       <td>';
    print '<a href="edit.php?id='.$img->getId().'">edit</a>';
    print "</td>\n";
    print '       <td>';
    print '<a href="remove.php?id='.$img->getId().'">remove</a>';
    print "</td>\n";
    print '       <td>';
    print '<a href="download.php?id='.$img->getId().'">download</a>';
    print "</td>\n";
  }
?>
    </tbody>
  </table>
<body>
</html>
<?php
}
