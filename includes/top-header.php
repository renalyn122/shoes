<?php 
// session_start();

?>

<style type="text/css">
	
	.top-me{
		background: linear-gradient(90deg, rgba(149,0,255,1) 0%, rgba(255,0,181,1) 100%);

	}

	.text-primarys{
		color: white;
	}


</style>

<div class="top-bar animate-dropdown top-me ">
	<div class="container ">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled  " >

<?php if(strlen($_SESSION['login']))
    {   ?>
				<li>
					<a href="#"><i class="icon fa fa-user btn-primary"></i>
					Welcome -<?php echo htmlentities($_SESSION['username']);?>
				</a>
			</li>
				<?php } ?>

					<li ><a style="color:white !important;" href="my-account.php"><i class="icon fa fa-user text-primarys"></i>My Account</a></li>
					<li><a style="color:white !important;" href="my-cart.php"><i class="icon fa fa-shopping-cart text-primarys"></i>My Cart</a></li>
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
				<li><a style="color:white !important;" href="login.php"><i class="icon fa fa-sign-in text-primarys"></i>Login</a></li>
					<?php }
					else{ ?>
						
				<li><a style="color:white !important;" href="logout.php"><i class="icon fa fa-sign-out text-primarys"></i>Logout</a></li>
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->

		<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a style="color:white !important;" href="track-orders.php" class="dropdown-toggle text-primarys" ><span class="key">Track Order</b></a>
					</li>
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->