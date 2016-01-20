<?php 
	if (!empty($_POST))
	{
		$email = $_POST['email'];
		$pwd = $_POST['password'];
		if($email=="admin@gmail.com" && $pwd=="admin123")
		{
			echo "hi";
			header("Location: home.php");
		}
		else
		{
			echo "error";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>YKKO</title>
	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function() {
			function reposition() {
				var modal = $(this),
				dialog = modal.find('.modal-dialog');
				modal.css('display', 'block');
				dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
			}
		    // Reposition when a modal is shown
		    $('.modal').on('show.bs.modal', reposition);
		    // Reposition when the window is resized
		    $(window).on('resize', function() {
		    	$('.modal:visible').each(reposition);
		    });
		});
	</script>
	<style type="text/css">
		html
		{
			background-image: url('images/home/service.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}
		body
		{
			background-color:rgba(0, 0, 0, 0.8);
			height: 100vh;
		}
		div.container
		{
			position: relative;
			height: 90vh;
			margin-top:1em;
			border-radius: 5px;
		}
		div.logo
		{
			text-align: center;
			margin-top: 8em;
			margin-bottom: 8em;
		}
		h1
		{
			text-align:center;
			font-size:4em;
			color:#f4f4f4;
			font-weight: 400;
		}
		h2
		{
			color:#f4f4f4;
			text-align:center;
			font-size: 2.5em;
			font-weight: 400;
		}
		div.footer
		{
			clear: both;
			position: absolute;
			width: 100%;
			bottom:1em;
			z-index: 10;
		}
		.btn-facebook
		{
			background-color: #1c4e31;
			color:#fff;
		}
		.btn-facebook:hover
		{
			background-color: #fef200;
			color: #1c4e31;
		}
		@media screen and ( max-height: 820px )
		{
			div.logo
			{
				text-align: center;
				margin-top: 5em;
				margin-bottom: 5em;
			}
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo">
						<img src="images/logo@2x.png">
					</div>
					<h1>Coming Soon</h1>
					<h2>Stay tuned</h2>
				</div>
			</div>
			<div class="row footer">
				<div class="col-sm-6">
					<a href="#admin" class="btn btn-default" data-toggle="modal" data-target="#myModal">Admin Login</a> 
				</div>
				<div class="col-sm-6">
					<a href="https://www.facebook.com/YKKOmyanmar" class="btn btn-facebook pull-right" target="_blank">JOIN US ON FACEBOOK!</a> 
				</div>
			</div>
		</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Admin Login</h4>
					</div>
					<form class="form-horizontal" action="index.php" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label class="col-sm-3 control-label">Email :</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" name="email" placeholder="Email" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Password :</label>
								<div class="col-sm-9">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success pull-left">Log In</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div>
</body>
</html>