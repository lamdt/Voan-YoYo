
<?php
include_once("../ext/fckeditor/fckeditor.php");
?>
<html>
<head>
  <title>FCKeditor - Sample</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php
//push text to db
if(isset($_POST['FCKeditor1']))
{
	$sValue = stripslashes( $_POST['FCKeditor1'] ) ;
	$sql_update = "UPDATE ".TABLE_HULA_OUR_INFOS." SET content='".$sValue."' WHERE type='about'";
	tep_db_query($sql_update);
}
?>
<body>

  <form action="" method="post">
<?php
//Get text from db
$sql = "SELECT content FROM ".TABLE_HULA_OUR_INFOS." WHERE type='about'";
$result = tep_db_query($sql);

$textarea = '';
while(($row = tep_db_fetch_array($result)) != null)
	$textarea.= $row['content'];

//Create fckeditor
$oFCKeditor = new FCKeditor('FCKeditor1') ;
$oFCKeditor->BasePath = '../ext/fckeditor/' ;
$oFCKeditor->Value = $textarea ;
$oFCKeditor->Create() ;
?>
	<br>
	<input type="submit" value="Submit">
  </form>
</body>
</html>
