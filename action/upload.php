<?php
session_start();
if ($_FILES["file"]["error"] > 0) {
echo "Error: " . $_FILES["file"]["error"]; 
}else{
echo "檔案名稱: " . $_FILES["file"]["name"]."<br/>";
$_FILES["file"]["name"] = $_SESSION['id'].".png";
echo "檔案類型: " . $_FILES["file"]["type"]."<br/>";
echo "修改後名稱" . $_FILES["file"]["name"]."<br/>";
echo "檔案大小: " . ($_FILES["file"]["size"] / 1024)." Kb<br />";
echo "暫存名稱: " . $_FILES["file"]["tmp_name"]; 
move_uploaded_file($_FILES["file"]["tmp_name"],"../_img/".$_FILES["file"]["name"]);
}
$_SESSION['msg'] = 'photook';
?>
<div class="alert alert-success">本網頁自動轉址</div>
<meta http-equiv="refresh" content="3;url=../index" />