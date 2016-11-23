<?php
$a="我是a";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <h1>当前时间：<?php echo date(echo date("Y-m-d H:i:s",time()){ ?></h1><br>	
	<ul>
		<?php for($i=0;$i<5;$i++){ ?>
	     <li><?php echo $i?></li>
         <?php } ?>
		<!-- 用if也能 -->
	</ul>
	<?php echo($a)  ?>
	
</form>
</body>
<script type="text/javascript">
	

</script>
</html>