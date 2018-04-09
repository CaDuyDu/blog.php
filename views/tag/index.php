<?php 
	include_once 'views/layout/header.php';
 ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zent Group PHP - 08</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body> -->
<div class="main">
  	<div class="main-content">
		<form action="" method="POST" accept-charset="utf-8">
			<br><br>
			<i><b><h2 style="text-align: center;">ZENT GROUP - QUẢN LÝ TAGS</h2></i></b>
			
			<!-- <div class="container">
				<a href="add.php" class="btn btn-primary add_new"><i class="fa fa-plus" aria-hidden="true"></i>Thêm mới</a>
			</div> -->
			<br>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Post ID</th>
						<th>Created At</th>
						<th>Updated At</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($data as $value) { ?>
						<tr>
							<td><?php echo $value['id']; ?></td>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['post_id']; ?></td>
							<td><?php echo $value['created_at']; ?></td>
							<td><?php echo $value['updated_at']; ?></td>
						</tr>  	       	 
					<?php } ?>
				</tbody>
			</table>
		</form>
	</div>
</div>
<!-- </body>
</html> -->
<?php 
	include_once 'views/layout/footer.php';
 ?>