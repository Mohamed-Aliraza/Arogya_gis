<?php include'../../layout/head.php' ?>
<?php include '../../layout/topbar.php' ?>        
<?php include '../../layout/sidebar.php' ?>

<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<div class="page-body">
				<div class="row">
					<div class="col-lg-12 col-md-6">
						<div class="card fmg">
							<div class="card-header">
								<h5>Create Admission Information</h5>
							</div>
							<div class="card-block">
								<form class="form-sample" method="POST">

									<div class="form-group">
									 <div class="row">
										<div class=" col-6">
											<label class="float-label"><b>Patient First Name</b></label>
											<input type="text" name="" class="form-control" placeholder="Enter The First Name" required="">
											<span class="form-bar"></span>
										</div>

										<div class="col-6">
											<label class="float-label"><b>Patient Last Name</b></label>
											<input type="text" name="" class="form-control" placeholder="Enter The Last Name" required="">
											<span class="form-bar"></span>
										</div>

										<div class="col-4">
											<label><b>Patient Date of Birth</b></label>
											<input type="date" name="" class="form-control" required="">
											<span class="form-bar"></span>
										</div>

										<div class="col-4">
											<label><b>Patient Gender</b></label>
											<select name="select" class="form-control">
												<option value="1">Select your Gender</option>
												<option value="2">Male</option>
												<option value="3">Female</option>                                                     
												<span class="form-bar"></span>
											</div>

											<div class="col-3">
												<label><b>Patient Contact Number</b></label>
												<input type="number" name="" class="form-control" placeholder="Enter The Phone Number" required="">
												<span class="form-bar"></span>
											</div>

										</div>
									</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	 </div>
</div>

<?php include '../../layout/header.php' ?>
<?php include '../../layout/footer.php' ?>

