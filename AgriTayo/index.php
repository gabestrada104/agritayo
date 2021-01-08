<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-green layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/P1.jpg" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/p2.jpg" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/P3.jpg" alt="Third slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/P4.jpg" alt="Third slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
		            </div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     <div class="col-sm-9">
		            <h1 class="page-header">Rice</h1>
		       		<div class="row">
	       							<div class="col-sm-4">
	       								<div class="box box-solid">
		       								<div class="box-body prod-body">
		       									<img src="images/formosa-bagong-ani.jpg" width="100%" height="230px" class="thumbnail">
		       									<h5><a href="product.php?product=formosa-bagong-ani">Formosa Bagong Ani</a></h5>
		       								</div>
		       								<div class="box-footer">
		       									<b>₱ 820.00</b>
		       								</div>
	       								</div>
	       							</div>
	       						
	       							<div class="col-sm-4">
	       								<div class="box box-solid">
		       								<div class="box-body prod-body">
		       									<img src="images/formosa-premium-rice.jpg" width="100%" height="230px" class="thumbnail">
		       									<h5><a href="product.php?product=formosa-premium-rice">Formosa Premium Rice</a></h5>
		       								</div>
		       								<div class="box-footer">
		       									<b>₱ 850.00</b>
		       								</div>
	       								</div>
	       							</div>
	       						<div class="col-sm-4"></div><div class="col-sm-9">
		            <h1 class="page-header">Vegetables</h1>
		       		<div class="row">
	       							<div class="col-sm-4">
	       								<div class="box box-solid">
		       								<div class="box-body prod-body">
		       									<img src="images/eggplant-talong.jpg" width="100%" height="230px" class="thumbnail">
		       									<h5><a href="product.php?product=eggplant-talong">Eggplant/ Talong</a></h5>
		       								</div>
		       								<div class="box-footer">
		       									<b>₱ 100.00</b>
		       								</div>
	       								</div>
	       							</div>
	       						<div class="col-sm-4"></div><div class="col-sm-4"></div></div> 
	        	</div>
	        	<div class="col-sm-9">
		            <h1 class="page-header">Animals</h1>
		       		<div class="row">
	       							<div class="col-sm-4">
	       								<div class="box box-solid">
		       								<div class="box-body prod-body">
		       									<img src="images/c1-cow_1606531620.jpg" width="100%" height="230px" class="thumbnail">
		       									<h5><a href="product.php?product=c1-cow">C1 Cow</a></h5>
		       								</div>
		       								<div class="box-footer">
		       									<b>₱ 30.00</b>
		       								</div>
	       								</div>
	       							</div>
	       						
	       							<div class="col-sm-4">
	       								<div class="box box-solid">
		       								<div class="box-body prod-body">
		       									<img src="images/chicken-whole-body.jpg" width="100%" height="230px" class="thumbnail">
		       									<h5><a href="product.php?product=chicken-whole-body">Chicken (Whole Body)</a></h5>
		       								</div>
		       								<div class="box-footer">
		       									<b>₱ 170.00</b>
		       								</div>
	       								</div>
	       							</div>
	       						<div class="col-sm-4"></div></div> 
	        	</div>
	        	</div>
	    </div>
	  </div>
  	
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>