<?php include('server.php'); 

		
	if (isset($_GET['edit8'])) {
		$id_number = $_GET['edit8'];
		$update = true;
		$sql = "SELECT * FROM section_officer,academic_year WHERE section_officer.academic_code = academic_year.academic_code AND id_number='$id_number'";
		$record2 = mysqli_query($db, $sql);	

		
		
	
	}	


?>


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
		   <a href = "index.php"><img src = "picture/ssc.PNG" style=" height:70px; width:70px;"></a>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		      </li>
		    </ul>
		    	<center><p style="color:white; font-size: 50px; margin-right: 400px;">Supreme Student Council</p></center>
		    	<a href="logout.php">Logout</a> 
		  </div>
		</nav>
	</div>
	<br /><br />
	<!-- Show Data -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2" >
				<div class="btn-group-vertical">
				<ul style="list-style: none;">
					<li><a href = "list_of_student.php"><button type="button" class="btn btn-dark">List of Student</button></a></li>
					<li><a href ="list_of_organization.php"><button type="button" class="btn btn-outline-dark">Organization</button></a></li>
					<li><a href ="list_of_section.php"><button type="button" class="btn btn-outline-dark">Sections</button></a></li>
					<li><a href ="list_of_department.php"><button type="button" class="btn btn-outline-dark">Departments</button></a></li>
					<li><a href ="list_of_program.php"><button type="button" class="btn btn-outline-dark">Program</button></a></li>
					<li><a href ="list_of_event.php"><button type="button" class="btn btn-outline-dark">Events</button></a></li>
					<li><a href ="fines.php"><button type="button" class="btn btn-outline-dark">Fines</button></a></li>
					<li><a href ="list_of_organization_member.php"><button type="button" class="btn btn-outline-dark">Organization Member</button></a></li>
					<li><a href ="list_of_organization_officer.php"><button type="button" class="btn btn-outline-dark">Organization Officer</button></a></li>
					<li><a href ="list_of_organization_moderator.php"><button type="button" class="btn btn-outline-dark">Organization Moderator</button></a></li>
					<li><a href ="list_of_section_officer.php"><button type="button" class="btn btn-outline-dark">Section Officer</button></a></li>	
					<li><a href ="list_of_acad_year.php"><button type="button" class="btn btn-outline-dark">Academic Year</button></a></li>			
				</ul>
				</div>
			</div>
			<div class="col-sm-2" >
				<div class="vertical_line">

				</div>
			</div>
			<div class="col-sm-8">
			<center><h2>"Update Section Officer"</h2></center><br />
			<center><h3>Section Officer Information</h3></center><br />
				<form action = "list_of_section_officer.php" method="POST">
					<?php if(mysqli_num_rows($record2)){
						  		while ($row1 = mysqli_fetch_array($record2)){
						  			
						  		
					?>
				  <div class="form-row">
				    <div class="col-md-4">
				      <h6>Student ID#</h6><input type="text" class="form-control" value="<?php echo $id_number; ?>"  name="id_number" placeholder="Instructor Id" readonly>
					</div>
				    <div class="col-md-8">
				      <h6>Position: </h6>
				      <select name = "position" class="form-control">
				      		
									<option value = "<?php echo $row1['position']; ?>"<?php if($row1['position'] == $row1['position']);?> ><?php echo $row1['position']; echo " "."(Selected)"?></option>
									<option value="President">President</option>
									<option value="Vice President">Vice President</option>
									<option value="Secretary">Secretary</option>
									<option value="Treasurer">Treasurer</option>
									<option value="Auditor">Auditor</option>
									<option value="P.I.O">P.I.O</option>
									<option value="Muse">Muse</option>
									<option value="Prince">Prince</option>

						</select>
				    </div>
					<div class="col-md-8">
				      <h6>Academic Year: </h6>
				      	<select name = "academic_code" class="form-control">
									<?php 
										$query = "SELECT * FROM academic_year";
										$results = mysqli_query($db, $query); 
										if(mysqli_num_rows($results)){
											while ($row2 = mysqli_fetch_array($results)){
									?>
											<option value = "<?php echo $row2['academic_code'] ?>"<?php if($row1['academic_code'] == $row2['academic_code']); echo "selected";?> ><?php echo $row2['acad_year']." "."(".$row2['semester'].")" ?></option>
										
									<?php } 
							  		}?>
						</select>
						
					  <h6>Section:</h6>
						  <select name = "section_id" class="form-control">
							<?php 
								$query =  "SELECT * FROM section"; 
								$record1 = mysqli_query($db, $query);
								if(mysqli_num_rows($record1)){
									while ($row = mysqli_fetch_array($record1)){
							?>

									<option value = "<?php echo $row1['section_id']; ?>"<?php if($row1['section_id'] == $row['section_id']); echo "Selected";?> ><?php echo $row['section_id']; ?></option>
								
								<?php } 
					  			}?>
						  </select>	
						<?php }
						}?>
				    </div>
				  </div>
				  <br />
				  <div class="form-row">
					  <div class="col-md-4">
						<?php if ($update == true): ?>
							<button type="submit" class="btn btn-secondary"  name="EDIT8" style="background: red;">Update</button>
						  <?php else: ?>
							<button type="submit" class="btn btn-primary" name="save">Save</button>
						<?php endif ?>
					  </div>
				  </div>
				</form>
			</div>
		</div>
	</div>
<script>
function myFunction() {
  confirm("Successfully Save!");
}
</script>
</body>
</html>
