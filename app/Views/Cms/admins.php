
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


								<div class="alert alert-danger" role="alert">
								 You only the one who can access this page (Only <strong>super-administrator </strong> can modify administrators)
								</div>


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
                                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                            <tr>
																							<?php foreach ($th as $key => $value) {
										 						        			echo "<th class='min-w-100px'> ".text_format($value)."</th>";
										 							           	} ?>


                                            </tr>
                                        </thead>
                                        <tbody>
																					<?php if(isset($records)) foreach ($records as $key => $value) {    ?>
																					<tr>
																					<?php foreach ($columns as $k => $column) {
																						if( ($column == "is_blocked" || $column == "is_active") && $value['type'] == 'Super Administrator') {
																							echo "<td></td>";
																						}
																						 else	if( ($column == "is_blocked" || $column == "is_active") && $value['type'] != 'Super Administrator') {
																							echo "<td>".$value[$column]."</td>";

																				} else if($column == "name") {

																					 echo "<td".$value[$column]."</td>";


																			} else if($column == "id") {

																				 echo "<td>".$value[$column]."</td>";

																			}else{
																					echo "<td> ".$value[$column]."</td>";

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
