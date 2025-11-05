<div class="page-content">
		<div class="container-fluid">

			<!-- start page title -->
			<div class="row">
			    <div class="col-12">
			        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
			            <h4 class="mb-sm-0">	<?=  $form_title; ?></h4>

			            <div class="page-title-right">
			                <ol class="breadcrumb m-0">
			                    <li class="breadcrumb-item"><a href="<?= $table_link; ?>">General</a></li>
			                    <li class="breadcrumb-item active">	<?=  $records_name; ?></li>
			                </ol>
			            </div>

			        </div>
			    </div>
			</div>
			<!-- end page title -->

				<div class="row">
					<form  method="POST" action="<?= $submit_link ?>" autocomplete="off"  accept-charset="utf-8">

						<div class="col-lg-12">
								<div class="card">
										<div class="card-body">
												<div class="mb-3">
														<label class="form-label" for="project-title-input">Admin Fullname</label>
																																																																																																																																																																																																																																																										                      	<input type="text"  name="full_name" class="form-control"   placeholder="Enter Admin Fullname" value="<?= @$record['full_name'] ?>">
																																																																																																																																																																																																																																																																 		</div>

												<div class="mb-3">
																																																																																																																																																																																																																																																																							 		<label class="form-label" for="project-title-input">Admin Username</label>
														<input type="text" name="username"  class="form-control"  placeholder="Enter Admin Username" value="<?= @$record['username'] ?>" >
												</div>

											<div class="mb-3">
										<labe class="form-label" >Admin Password </label>
										<input type="password" name="password" class="form-control" aria-describedby="" placeholder="Enter Username's Password">
 									</div>


														<div class="mb-3 mb-lg-0">
																<label for="choices-priority-input" class="form-label">User Role:</label>
																<select class="form-select" data-choices data-choices-search-false id="choices-priority-input">
																	<option value="0">Admin</option>
																</select>
														</div>






										</div>
										<!-- end card body -->
								</div>
								<!-- end card -->


								<!-- end card -->
								<div class="text-first mb-4">
									<button type="submit" class="btn btn-primary" >Submit</button>
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
