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
														<label class="form-label" for="project-title-input">Name</label>
																																																																																																																																																																																																																																																										                      	<input type="text"  name="name" class="form-control"   placeholder="Enter Title" value="<?= @$record['name'] ?>">
                         </div>
                        </div>

                        <div class="col-lg-6">
                       <div class="mb-3">
                         <label class="form-label" for="project-title-input">Position</label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <input type="text"  name="position" class="form-control" id="position"   placeholder="Enter Title" value="<?= @$record['position'] ?>">
                      </div>
                     </div>

													 <div class="col-lg-12">
													<div class="mb-3">
                          <label class="form-label">Description</label>
													<textarea name="description" id="editor1" rows="10" cols="80"><?= @$record['description'] ?></textarea>
                          </div>
                          </div>


                         <div class="col-lg-6">
                         <div class="mb-3">
                              <label class="form-label" for="project-thumbnail-img"> Image(270x374)</label>
                              <input class="form-control" name="image" id="project-thumbnail-img" type="file" accept="image/png, image/gif, image/jpeg">
                          </div>
	                         </div>
                       <?php if(@$record['image']){?>
                  <div class="form-group col-6">
                    <label>Current Image:</label><br>
                    <img src="<?= base_url() . '/uploads/'.@$record['image'] ?>" width="175px">
                  </div>
                    <?php }?>
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
