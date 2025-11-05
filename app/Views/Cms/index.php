<div class="page-content">
		<div class="container-fluid">

			<!-- start page title -->
			<div class="row">
			    <div class="col-12">
			        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
			            <h4 class="mb-sm-0">	Dashboard</h4>

			            <div class="page-title-right">
			                <ol class="breadcrumb m-0">
			                    <li class="breadcrumb-item"><a href="#">General</a></li>
			                    <li class="breadcrumb-item active">	Dashboard</li>
			                </ol>
			            </div>

			        </div>
			    </div>
			</div>
			<!-- end page title -->


      <div class="row project-wrapper">
      <div class="col-xxl-8">
       <div class="row">
			<?php foreach ($panels as $key => $panel) { ?>



            <div class="col-xl-4 col-md-6">
              	<a href="<?= $panel['link']; ?>" class="w-auto ">
                <div class="card card-animate" style="min-height:140px">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm flex-0">
                                <span class="avatar-title <?= $panel['color']; ?> rounded-2 fs-2">
                                    <i class="<?= $panel['icon']; ?>"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1 overflow-hidden ms-5">
                                <p class="text-uppercase fw-medium text-muted    mb-3"><?= $panel['title']; ?></p>
                                <?php if(!empty($panel['active'])){ ?>
                                <div class="d-flex align-items-center mb-3">
                                  <h4 class="fs-4 flex-grow-1 text-success mb-0">Active: <span class="counter-value" data-target="<?= $panel['active']; ?>">0</span> records</h4>
                                  </div>
                               
                                  <div class="d-flex align-items-center mb-3">
                                    <h4 class="fs-4 flex-grow-1 text-danger mb-0">InActive: <span class="counter-value" data-target="<?= $panel['inactive']; ?>">0</span> records</h4>
                                    </div>
                                    <?php } ?>
                                 <div class="d-flex align-items-center mb-3">
                                      <h4 class="fs-4 flex-grow-1 text-info mb-0">Total: <span class="counter-value" data-target="<?= $panel['total']; ?>">0</span> records</h4>
                                  </div>
                             </div>
                        </div>
                    </div><!-- end card body -->
                </div>
              </a>
            </div><!-- end col -->

			<?php } ?>

				</div>
        	</div>
          </div>
				<!-- end row -->
		</div>
		<!-- container-fluid -->
</div>
<!-- End Page-content -->
