<?php
$title = time();
header("Content-Type:text/html; charset=utf-8 ");
?>
<html>
<form
 action="/"
 method="post"
>
<body bgcolor=lightblue>
<label>名稱</label><input name="name" type="textarea" placeholder="請輸入你的名稱" value="<?= $_POST['name'] ?>"><br>
<label>留言</label><input name="content" type="textarea" placeholder="請輸入留言內容" value="<?= $_POST['content']?>"><br>
<input type=submit value=送出>
</html>
