<?php include('server.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Supreme Student Council</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href = "css/style.css" rel = "stylesheet" type = "text/css" >
</head>
<body>
	<!-- Header Area -->
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		   <a href = "index.php"><img src = "ssc.PNG" style=" height:70px; width:70px;"></a>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		      </li>
		    </ul>
		    	</center><p style="color:white; font-size: 50px; margin-right: 400px;">Supreme Student Council<strong></strong></p>
		    	<a href="logout.php">Logout</a>
		  </div>
		</nav>
	</div>
	<br /><br />
	<!-- Show Data -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3" >
				<div class="vertical_line">
				<ul style="list-style: none;">
					<li><a href = "list_of_student.php"><button type="button" class="btn btn-outline-dark">List of Student</button></a></li><br />
					<li><a href ="list_of_organization.php"><button type="button" class="btn btn-outline-dark">Organization</button></a></li><br />
					<li><a href ="list_of_section.php"><button type="button" class="btn btn-outline-dark">Sections</button></a></li><br />
					<li><a href ="list_of_department.php"><button type="button" class="btn btn-outline-dark">Departments</button></a></li><br />
					<li><a href ="list_of_program.php"><button type="button" class="btn btn-outline-dark">Program</button></a></li><br />
					<li><a href ="list_of_event.php"><button type="button" class="btn btn-outline-dark">Events</button></a></li><br />
					<li><a href ="fines.php"><button type="button" class="btn btn-outline-dark">Fines</button></a></li><br />
					<li><a href ="payment.php"><button type="button" class="btn btn-outline-dark">Payment</button></a></li><br />
					<li><a href ="list_of_organization_member.php"><button type="button" class="btn btn-outline-dark">Organization Member</button></a></li><br />
					<li><a href ="list_of_organization_officer.php"><button type="button" class="btn btn-outline-dark">Organization Officer</button></a></li><br />
					<li><a href ="list_of_organization_moderator.php"><button type="button" class="btn btn-outline-dark">Organization Moderator</button></a></li><br />
					<li><a href ="list_of_section_officer.php"><button type="button" class="btn btn-outline-dark">Section Officer</button></a></li><br />				
				</ul>
				</div>
			</div>
			<div class="col-sm-1" >
				<div class="vertical_line">

				</div>
			</div>
			<div class="col-sm-8">
				<a href = "add_new_section.php"><span style="float: left; font-size: 50px; margin-right: 50px;"><i class="fa fa-plus-circle" font-size = "50px"></i></span></a>
				<center><h3>List of Section</h3></center><br />
				<?php $results = mysqli_query($db, "SELECT * FROM section"); ?>
				<table class="table table-primary">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Section</th>
				      <th scope="col">Year</th>
					  <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <?php while ($row = mysqli_fetch_array($results)){ ?>
				  <tbody>
				    <tr>
				      <td><?php echo $row['section_id']?></td>
				      <td><?php echo $row['year']?></td>
					  <td>
						<button type="button" class="btn btn-outline-info btn-sm fa fa-pencil"><a href="update_section.php?EDIT=<?php echo $row['section_id']; ?>"> Edit </a></button> 
						<button type="button" class="btn btn-outline-danger  btn-sm fa fa-trash"><a href="server.php?DEL=<?php echo $row['section_id']; ?>">Delete</a></button>

					  </td>
				    </tr>
				  </tbody>
				  <?php 
  				  } ?>
				</table>			
			</div>
		</div>
	</div>
	
</body>
</html>
