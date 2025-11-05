
            <div class="page-content">
                <div class="container-fluid">

									<div class="row">
									    <div class="col-12">
									        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
									            <h4 class="mb-sm-0"><?=  text_format($records_name); ?></h4>

									            <div class="page-title-right">
									                <ol class="breadcrumb m-0">
									                    <li class="breadcrumb-item"><a href="<?= site_url('cms/admin/index'); ?>">General</a></li>
									                    <li class="breadcrumb-item active"><?=  text_format($records_name); ?></li>
									                </ol>
									            </div>

									        </div>
									    </div>
									</div>

	                <?php if(isset($notes)) {  ?>
								<div class="alert alert-danger" role="alert">
									<?php echo $notes; ?>
								</div>
                  <?php } ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
 																		<div class="row align-items-center gy-3">
																			<div class="col-sm">
																					<h5 class="card-title mb-0"><?=  text_format($records_name); ?></h5>
																			</div>
																			<div class="col-sm-auto">
																					<div class="d-flex gap-1 flex-wrap">
																						<?php if(!isset($canAdd)){ ?>
																							<a href="<?= $form_link; ?>" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> New <?= $record_name; ?></a>
																						<?php } ?>
  																					</div>
																			</div>
																	</div>
                                </div>
                                <div class="card-body">
                                  <?php if (isset($filters)) {  ?>
                                  <div class="form-group form-group-last">
          <?php if (isset($records_name) && $records_name == "visted doctors") { ?>
            <div class="kt-portlet__bodyy">
              <form class="kt-form kt-form--label-left" action="<?= site_url('cms/visited_doctor/visited_doctors_date'); ?>" method="Get">

                <div class="form-group row col-12">
                  <div class="row col-12 pl-0">
                    <input type="hidden"   class="form-control"   name="staff_id"  value="<?= !empty($staff_id) ? $staff_id : ''; ?>" >

                    <label class="col-form-label col-lg-2 col-sm-12">Select Date </label>

                    <div class="col-lg-4">
                 <div class="mb-3">
                     <input type="text"   class="form-control" data-provider="flatpickr"  name="startdate"  value="<?= !empty($startdate) ? $startdate : ''; ?>"    placeholder="Enter Start Date">
                 </div>
             </div>
             <div class="col-lg-4">
          <div class="mb-3">
              <input type="text"   class="form-control" data-provider="flatpickr"  name="enddate"  value="<?= !empty($enddate) ? $enddate : ''; ?>"    placeholder="Enter End Date">
          </div>
      </div>


                    <div class="col-lg-2 col-md-9 col-sm-12">
                      <button type="submit" class="btn btn-primary" >Search</button>

                    </div>


                  </div>
                </div>
              </form>


            </div>

          <?php } else if (isset($records_name) && $records_name == "visted Pharmacies") { ?>
            <div class="kt-portlet__bodyy">
              <form class="kt-form kt-form--label-left" action="<?= site_url('cms/visited_pharmacy/visited_pharmacys_date'); ?>" method="Get">
                <input type="hidden"   class="form-control"   name="staff_id"  value="<?= !empty($staff_id) ? $staff_id : ''; ?>" >

                <div class="form-group row col-12">
                  <div class="row col-12 pl-0">
                    <label class="col-form-label col-lg-2 col-sm-12">Select Date </label>

                    <div class="col-lg-4">
                 <div class="mb-3">
                     <input type="text"   class="form-control" data-provider="flatpickr"  name="startdate"  value="<?= !empty($startdate) ? $startdate : ''; ?>"    placeholder="Enter Start Date">
                 </div>
             </div>
             <div class="col-lg-4">
          <div class="mb-3">
              <input type="text"   class="form-control" data-provider="flatpickr"  name="enddate"  value="<?= !empty($enddate) ? $enddate : ''; ?>"    placeholder="Enter End Date">
          </div>
      </div>


                    <div class="col-lg-2 col-md-9 col-sm-12">
                      <button type="submit" class="btn btn-primary" >Search</button>

                    </div>


                  </div>
                </div>
              </form>


            </div>

          <?php } else if (isset($records_name) && $records_name == "samples visited doctors") { ?>
            <div class="kt-portlet__bodyy">
              <form class="kt-form kt-form--label-left" action="<?= site_url('cms/sample/samples_for_doctors_date'); ?>" method="Get">
                <input type="hidden"   class="form-control"   name="staff_id"  value="<?= !empty($staff_id) ? $staff_id : ''; ?>" >

                <div class="form-group row col-12">
                  <div class="row col-12 pl-0">
                    <label class="col-form-label col-lg-2 col-sm-12">Select Month </label>

                    <div class="col-lg-4">
                 <div class="mb-3">
                     <input type="month"   class="form-control"   id="selectmonth"   name="selectmonth"  value="<?= !empty($selectmonth) ? $selectmonth : ''; ?>"    placeholder="Enter Start Date"  required>
                 </div>
             </div>



                    <div class="col-lg-2 col-md-9 col-sm-12">
                      <button type="submit" class="btn btn-primary" >Search</button>

                    </div>


                  </div>
                </div>
              </form>
              <div class="col-lg-12 col-md-9 col-sm-12 my-2">
              	 	<a class="btn btn-outline-info " href="<?= site_url('cms/sample/samples_for_doctors_export/' . (!empty($selectmonth) ? $selectmonth : '1').'/'.$staff_id); ?>"> Export </a>
             	</div>

            </div>

          <?php }  else if (isset($records_name) && $records_name == "samples visited pharmacys") { ?>
            <div class="kt-portlet__bodyy">
              <form class="kt-form kt-form--label-left" action="<?= site_url('cms/sample/samples_for_pharmacys_date'); ?>" method="Get">

                <div class="form-group row col-12">
                  <div class="row col-12 pl-0">
                    <label class="col-form-label col-lg-2 col-sm-12">Select Month </label>

                    <div class="col-lg-4">
                 <div class="mb-3">
                     <input type="month"   class="form-control"   id="selectmonth"   name="selectmonth"  value="<?= !empty($selectmonth) ? $selectmonth : ''; ?>"    placeholder="Enter Start Date"  required>
                 </div>
             </div>



                    <div class="col-lg-2 col-md-9 col-sm-12">
                      <button type="submit" class="btn btn-primary" >Search</button>

                    </div>


                  </div>
                </div>
              </form>
              <div class="col-lg-12 col-md-9 col-sm-12 my-2">
                  <a class="btn btn-outline-info " href="<?= site_url('cms/sample/samples_for_pharmacys_export/' . (!empty($selectmonth) ? $selectmonth : '1')); ?>"> Export </a>
              </div>


            </div>

          <?php }  else if (isset($records_name) && $records_name == "sales visited pharmacys") { ?>
            <div class="kt-portlet__bodyy">
              <form class="kt-form kt-form--label-left" action="<?= site_url('cms/visited_pharmacy/sales_for_pharmacys_date'); ?>" method="Get">
                 <input type="hidden"   class="form-control"   name="staff_id"  value="<?= !empty($staff_id) ? $staff_id : ''; ?>" >
                <div class="form-group row col-12">
                  <div class="row col-12 pl-0">
                    <label class="col-form-label col-lg-2 col-sm-12">Select Month </label>

                    <div class="col-lg-4">
                 <div class="mb-3">
                     <input type="month"   class="form-control"   id="selectmonth"   name="selectmonth"  value="<?= !empty($selectmonth) ? $selectmonth : ''; ?>"    placeholder="Enter Start Date"  required>
                 </div>
             </div>



                    <div class="col-lg-2 col-md-9 col-sm-12">
                      <button type="submit" class="btn btn-primary" >Search</button>

                    </div>


                  </div>
                </div>
              </form>
              <div class="col-lg-12 col-md-9 col-sm-12 my-2">
                  <a class="btn btn-outline-info " href="<?= site_url('cms/visited_pharmacy/sales_for_pharmacys_export/' . (!empty($selectmonth) ? $selectmonth : '1')); ?>"> Export </a>
              </div>


            </div>

          <?php } else if (isset($records_name) && $records_name == "appointments pharmacies list") { ?>
            <div class="kt-portlet__bodyy">
              <form class="kt-form kt-form--label-left" action="<?= site_url('cms/appointment_pharmacy/pharmacies_list_by_subarea'); ?>" method="Get">

                <div class="form-group row col-12">
                  <div class="row col-12 pl-0">
                    <label class="col-form-label col-lg-2 col-sm-12">Select SubArea </label>

                    <div class="col-lg-4">
                 <div class="mb-3">
                   <select id=" "  class="form-control  js-example-basic-single" data-placeholder="Select SubArea"  name="subarea_id"  required>
                         <option></option>
                         <?php foreach ($subarea as $key => $value) {   ?>
                            <option
                               <?= (isset($subarea_id)  && $subarea_id == $value['id']) ? 'selected' : ''; ?>
                             value="<?= $value['id']; ?>" 	><?= $value['name']; ?>
                                </option>
                                <?php } ?>
                 </select>
                  </div>
             </div>



                    <div class="col-lg-2 col-md-9 col-sm-12">
                      <button type="submit" class="btn btn-primary" >Search</button>

                    </div>


                  </div>
                </div>
              </form>



            </div>

          <?php } else if (isset($records_name) && $records_name == "appointments doctors list") { ?>
            <div class="kt-portlet__bodyy">
              <form class="kt-form kt-form--label-left" action="<?= site_url('cms/appointment_doctor/doctors_list_by_subarea'); ?>" method="Get">

                <div class="form-group row col-12">
                  <div class="row col-12 pl-0">
                    <label class="col-form-label col-lg-2 col-sm-12">Select SubArea </label>

                    <div class="col-lg-4">
                 <div class="mb-3">
                   <select id=" "  class="form-control  js-example-basic-single" data-placeholder="Select SubArea"  name="subarea_id"  required>
                         <option></option>
                         <?php foreach ($subarea as $key => $value) {   ?>
                            <option
                               <?= (isset($subarea_id)  && $subarea_id == $value['id']) ? 'selected' : ''; ?>
                             value="<?= $value['id']; ?>" 	><?= $value['name']; ?>
                                </option>
                                <?php } ?>
                 </select>
                  </div>
             </div>



                    <div class="col-lg-2 col-md-9 col-sm-12">
                      <button type="submit" class="btn btn-primary" >Search</button>

                    </div>


                  </div>
                </div>
              </form>



            </div>

          <?php } ?>
        <?php } ?>
                                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                            <tr>
																							<?php foreach ($th as $key => $value) {
										 						        			echo "<th class='min-w-100px  '> ".text_format($value)."</th>";
										 							           	} ?>

                                            </tr>
                                        </thead>
                                        <tbody>
																					<?php if(isset($records)) foreach ($records as $key => $value) {    ?>
						                               	<tr >
					                               			<?php foreach ($columns as $k => $column) {
					                               				if($column == "description") {
						                               				echo  '<td><span  class="text-primary" data-toggle="kt-popover" title="" data-content="'.$value[$column].'" data-original-title="Full info" data-html="true">Show text</span></td>';

							                               		} else {
								                               		echo "<td>".$value[$column]."</td>";
								                               	}

							                               	} ?>
					                               		</tr>
					                               	<?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->







			     </div>
					   </div>
