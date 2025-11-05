<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0"> <?= $form_title; ?></h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item"><a href="<?= $table_link; ?>">General</a></li>
							<li class="breadcrumb-item active"> <?= $records_name; ?></li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->


		<div class="row">
			<form method="POST" action="<?= $submit_link ?>" autocomplete="off" autocomplete="off" enctype="multipart/form-data">

				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="mb-3">
										<label class="form-label" for="project-title-input">Address</label>
										<input type="text" name="address" class="form-control" placeholder="Enter address" value="<?= @$record['address'] ?>">
									</div>
								</div>



								<div class="col-lg-6">
									<div class="mb-3">
										<label class="form-label" for="project-title-input">Turkey Number</label>
										<input type="text" name="mobileiraq" class="form-control" placeholder="Enter Turkey mobile" value="<?= @$record['mobileiraq'] ?>">
									</div>
								</div>

								<div class="col-lg-6">
									<div class="mb-3">
										<label class="form-label" for="project-title-input">Lebanon Number</label>
										<input type="text" name="mobileleb" class="form-control" placeholder="Enter lebanon mobile" value="<?= @$record['mobileleb'] ?>">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="mb-3">
										<label class="form-label" for="project-title-input">KSA Number</label>
										<input type="text" name="mobileksa" class="form-control" placeholder="Enter KSA mobile" value="<?= @$record['mobileksa'] ?>">
									</div>
								</div>

								<div class="col-lg-6">
									<div class="mb-3">
										<label class="form-label" for="project-title-input">Email</label>
										<input type="text" name="email" class="form-control" placeholder="Enter email" value="<?= @$record['email'] ?>">
									</div>
								</div>

								<div class="col-lg-6">
									<div class="mb-3">
										<label class="form-label" for="project-title-input">Fax</label>
										<input type="text" name="fax" class="form-control" placeholder="Enter fax" value="<?= @$record['fax'] ?>">
									</div>
								</div>

								<div class="col-lg-12">
									<div class="mb-3">
										<label class="form-label">Full Address</label>
										<textarea class="form-control" name="fulladdress" rows="4" cols="80"><?= @$record['fulladdress'] ?></textarea>
									</div>
								</div>






							</div>



						</div>
						<!-- end card body -->
					</div>
					<!-- end card -->


					<!-- end card -->
					<div class="text-first mb-4">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-danger">Reset</button>
						<button type="button" class="btn btn-secondary" onclick="window.location.href = '<?= $table_link; ?>'">Cancel</button>
					</div>
				</div>
				<!-- end col -->
				<input type="hidden" name="id" value="<?= $id; ?>">

			</form>
			<!-- end col -->
		</div>
		<!-- end row -->

	</div>
	<!-- container-fluid -->
</div>
<!-- End Page-content -->