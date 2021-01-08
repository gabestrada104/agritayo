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
	        		<div><center><h1>AgriTayo</h1></center></div>
	        		<h3>Agritayo is a website to help the farmer/seller to sell their product online, This project aims to  allows consumer/user to buy item specially food from  the suppliers online that are available in the  market. The researchers of this study believe that it would help lessen activities from going outside that will become hassle free and help reduce risk especially of catching Corona virus disease during this pandemic.</h3>

		            </div>
		            <div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
	        		<table>
  <tr>
    <th>Name</th>
    <th>Role</th>
  </tr>
  <tr>
    <td>Mc Intyre Cayabyab</td>
    <td>Document writer</td>
  </tr>
  <tr>
    <td>Gabriel M. Estrada</td>
    <td>Programmer</td>
  </tr>
  <tr>
    <td>Brian Carlo Reyes</td>
    <td>Project Manager</td>
  </tr>
  <tr>
    <td>Rhovic David Paul Salinas</td>
    <td>Developer/Designer</td>	
  </tr>
  <tr>
    <td>Arvie Sison</td>
    <td>System Analyst</td>
  </tr>
</table>		
		            </div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>