
<script type="text/javascript" src="../ext/fckeditor/fckeditor.js"></script>
<script type="text/javascript" src="../ext/fckeditor/fckconfig.js"></script>
<script language="JavaScript" type="text/javascript">
	window.onload = function()
	{
		var fck = new FCKeditor('content') ; // ten cua text area
		fck.BasePath    = '../ext/fckeditor/' ;
		fck.Width = 746;
		fck.Height = 300;
		fck.ReplaceTextarea() ;
	}
</script>


<textarea id="ckeditor" name="content" cols="150"> 
<?php
	$sql = "SELECT content FROM ".TABLE_HULA_OUR_INFOS." WHERE type='about'";
	$result = tep_db_query($sql);

	while(($row = tep_db_fetch_array($result)) != null)
		echo $row['content'];
?>
</textarea>


