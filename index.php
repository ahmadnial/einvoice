<?php
session_start();
include('header.php');
$loginError = '';
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include 'Invoice.php';
	$invoice = new Invoice();
	$user = $invoice->loginUsers($_POST['email'], $_POST['pwd']);
	if (!empty($user)) {
		$_SESSION['user'] = $user[0]['first_name'] . "" . $user[0]['last_name'];
		$_SESSION['userid'] = $user[0]['id'];
		$_SESSION['email'] = $user[0]['email'];
		$_SESSION['address'] = $user[0]['address'];
		$_SESSION['mobile'] = $user[0]['mobile'];
		header("Location:invoice_list.php");
	} else {
		$loginError = "Invalid email or password!";
	}
}
?>
<title>Invoice System</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">



<body class="bg-info">
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<div class="card shadow-lg border-0 rounded-lg mt-5">
								<div class="card-header">
									<h3 class="text-center font-weight-light my-4">Memayu Invoice | Login</h3>
								</div>
								<div class="card-body">
									<form method="post" action="">
										<div class="form-group">
											<?php if ($loginError) { ?>
												<div class="alert alert-warning"><?php echo $loginError; ?></div>
											<?php } ?>
											<div class="form-floating mb-3">
												<input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
												<label for="inputEmail">Email address</label>
											</div>
											<div class="form-floating mb-3">
												<input class="form-control" name="pwd" id="inputPassword" type="password" placeholder="Password" />
												<label for="inputPassword">Password</label>
											</div>
											<!-- <div class="form-check mb-3">
											<input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
											<label class="form-check-label" for="inputRememberPassword">Remember Password</label>
										</div> -->
											<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
												<!-- <a class="small" href="password.html">Forgot Password?</a> -->
												<button type="submit" name="login" class="btn btn-success">Login</button>
											</div>
									</form>
								</div>
								<!-- <div class="card-footer text-center py-3">
									<div class="small"><a href="register.html">Need an account? Sign up!</a></div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<div id="layoutAuthentication_footer">
			<footer class="py-4 bg-light mt-auto">
				<div class="container-fluid px-4">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">Copyright &copy; Nial-App 2022</div>
						<div>
							<a href="#">Privacy Policy</a>
							&middot;
							<a href="#">Terms &amp; Conditions</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<?php include('footer.php'); ?>