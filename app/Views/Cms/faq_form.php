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
										<!-- Title Input -->
										<div class="col-lg-6">
											<div class="mb-3">
												<label class="form-label" for="project-title-input"> Question? </label>
												<input type="text" name="question" class="form-control" placeholder="Enter question" value="<?= @$record['question'] ?>">
											</div>
										</div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label" for="project-title-input"> Answer </label>

                        	<textarea name="answer" id="editor1" rows="8" cols="80"><?= @$record['answer'] ?></textarea>
                      </div>
                    </div>
									</div>
								</div>
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
