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
					<form  method="POST" action="<?= $submit_link ?>" autocomplete="off"  autocomplete="off"  enctype="multipart/form-data">

						<div class="col-lg-12">
								<div class="card">
										<div class="card-body">
                      <div class="row">
                           <div class="col-lg-6">
  												<div class="mb-3">
														<label class="form-label" for="project-title-input">fullname</label>
																																																																																																																																																																																																																																																										                      	<input type="text"  name="fullname" class="form-control"   placeholder="Enter fullname" value="<?= @$record['fullname'] ?>" readonly>
                         </div>
                        </div>
												<div class="col-lg-6">
											 <div class="mb-3">
												 <label class="form-label" for="project-title-input">Type</label>
																																																																																																																																																																																																																																																																				 <input type="text"  name="type" class="form-control"   placeholder="type" value="<?= @$record['type'] ?>" readonly>
											</div>
										 </div>
										 <div class="col-lg-6">
										<div class="mb-3">
											<label class="form-label" for="project-title-input">Email</label>
																																																																																																																																																																																																																																																																			<input type="text"  name="email" class="form-control"   placeholder="Email" value="<?= @$record['email'] ?>" readonly>
									 </div>
									</div>
									<div class="col-lg-6">
								 <div class="mb-3">
									 <label class="form-label" for="project-title-input">phone</label>
																																																																																																																																																																																																																																																																	 <input type="text"  name="phone" class="form-control"   placeholder="phone" value="<?= @$record['phone'] ?>" readonly>
								</div>
							 </div>






	                  </div>



										</div>
										<!-- end card body -->
								</div>
								<!-- end card -->


								<!-- end card -->
								<div class="text-first mb-4">
						 
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
