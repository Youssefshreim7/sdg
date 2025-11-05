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
                <label class="form-label" for="project-title-input">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter Title" value="<?= @$record['title'] ?>">
              </div>
            </div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label" for="project-title-input">Subttitle</label>
								<input type="text" name="subtitle" class="form-control" placeholder="Enter subtitle" value="<?= @$record['subtitle'] ?>">
							</div>
						</div>
			 
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label" for="project-title-input">Price</label>
								<input type="text" name="price" class="form-control" placeholder="Enter price" value="<?= @$record['price'] ?>">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label" for="project-title-input">Plan(Monthly or Yearly)</label>
								<input type="text" name="plan" class="form-control" placeholder="Enter plan" value="<?= @$record['plan'] ?>">
							</div>
						</div>
						<div class="col-lg-6">
						 <div class="mb-3">
																																																																																																																																																																																																																																																																			 <label class="form-label" for="project-title-input">Position  </label>
								 <input type="number"  step="1" min="0" name="position"  class="form-control"  placeholder="Position" value="<?= @$record['position'] != 0 ? @$record['position'] : 0; ?>" >
						 </div>
							 </div>
						<div class="form-group">
						    <label>Features</label>
						    <div id="feature_wrapper">
						        <?php if (!empty($features)): ?>
						            <?php foreach ($features as $i => $feature): ?>
						                <div class="input-group mb-2">
						                    <input type="text" name="features[]" class="form-control" value="<?= esc($feature['feature_text']) ?>">
						                </div>
						            <?php endforeach; ?>
						        <?php else: ?>
						            <div class="input-group mb-2">
						                <input type="text" name="features[]" class="form-control" placeholder="Enter feature">
						            </div>
						        <?php endif; ?>
						    </div>
						    <button type="button" class="btn btn-primary" onclick="addFeature()">Add More</button>
						</div>

						<script>
						function addFeature() {
						    let wrapper = document.getElementById('feature_wrapper');
						    let inputGroup = document.createElement('div');
						    inputGroup.className = 'input-group mb-2';
						    inputGroup.innerHTML = `<input type="text" name="features[]" class="form-control" placeholder="Enter feature">`;
						    wrapper.appendChild(inputGroup);
						}
						</script>












          </div>
        </div>
        <!-- end card body -->
      </div>
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
