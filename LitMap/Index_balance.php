<?php        
	include ("connection.php");
	include ("ExportToExcel_balance_sheet.php");
	if(isset($_POST["submit"]))
	{
		ExportToExcel_balance_sheet("balance_sheet");
 	}
?>
<html>
<head>
	<style type="text/css">
	body
	{
		margin: 0;
		padding: 0;
		background-color:#D6F5F5;
		text-align:center;
	}
	.top-bar
		{
			width: 100%;
			height: auto;
			text-align: center;
			background-color:#FFF;
			border-bottom: 1px solid #000;
			margin-bottom: 20px;
		}
	.inside-top-bar
		{
			margin-top: 5px;
			margin-bottom: 5px;
		}
	.link
		{
			font-size: 18px;
			text-decoration: none;
			background-color: #000;
			color: #FFF;
			padding: 5px;
		}
	.link:hover
		{
			background-color: #9688B2;
		}
	</style>
	</body>
</head>

			<form name="export" method="post">
    			<input type="submit" value="Import balance_Sheet" name="submit">
    		</form> <br><br>
</html>
