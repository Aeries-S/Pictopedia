<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		
		.alb {
			display: flex;
			
  			flex-direction: row;
			flex-wrap: wrap;
			
		}
		.alb img {
			
			width: 300px;
			height: 300px;
			padding:20px;
		}
		h1 {
			margin-left: 550px;
		}
		a{
			font-size:50px;
			text-decoration: none;
		}
		.header{
			display:flex;
			flex-direction:row;
			
		}
		#form1{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height:100px;
			background-color:aliceblue;
		}
	</style>
</head>
<body>
<div class="header">
	<a href="./home.html">&#8678;</a>
	<h1><a href="./home.html">PICTOPEDIA</a></h1>
	</div>
	<div id="form1">
<?php if (isset($_GET['error'])): ?>
	<p><?php echo $_GET['error']; ?></p>
<?php endif ?>
 <form action="upload.php"
	   method="post"
	   enctype="multipart/form-data">

	   <input type="file" 
			  name="my_image">

	   <input type="submit" 
			  name="submit"
			  value="Upload">
	 
 </form>
</div>
	
	<div class="alb">
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($con,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             
             	<img src="uploads/<?=$images['image_url']?>">
             
          		
    <?php } }?>
	</div>
</body>
</html>