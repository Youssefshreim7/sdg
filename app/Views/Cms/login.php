<?= $this->include('Cms/partials/main') ?>

<head>

    <?php echo view('Cms/partials/title-meta', array('title'=> $website_name )); ?>
    <link href="<?= base_url() . '/assets/cms/' ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <?= $this->include('Cms/partials/head-css') ?>
<style>
.error{
	    color: #fd397a;
}
</style>
</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="<?= site_url('login'); ?>" class="d-inline-block auth-logo"  >
                                    <img src="<?php echo base_url();?><?= $website_logo; ?>" alt="" height="100">
                                </a>
                            </div>
                         </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5" id="kt_login">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-muted">login in to continue to <?= $website_name; ?> Admin Panel</p>
                                </div>
                                <div class="p-2 mt-4">

                                    <form action="#" novalidate="novalidate"  id="kt_login_form">

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
																						<input class="form-control" type="text" placeholder="Enter Username" name="username" id="username" autocomplete="off" required>
                                        </div>

                                        <div class="mb-3">

                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password" autocomplete="off" required>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>


                                        <div class="mt-4">
                                            <button id="kt_login_signin_submit" class="btn btn-success w-100"  >Log In <span>		<img id="loaderIcon" style="visibility:hidden; display:none;"
							                                     src="https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif" alt="..." width="20"/></span></button>

                                        </div>


                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->


                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script>  System Design Group. Developed by <a target="_blank" href="https://anzimagroup.com/"> Anzima Group<img height="25" src="<?php echo base_url();?>uploads/backend_settings/anzima.png" /> </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <?= $this->include('Cms/partials/vendor-scripts') ?>

    <!-- particles js -->
    <script src="<?= base_url() . '/assets/cms/' ?>assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="<?= base_url() . '/assets/cms/' ?>assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="<?= base_url() . '/assets/cms/' ?>assets/js/pages/password-addon.init.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    <script src="<?= base_url() . '/assets/cms/' ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

  <!-- Sweet alert init js-->
  <script src="<?= base_url() . '/assets/cms/' ?>assets/js/pages/sweetalerts.init.js"></script>


		<script type="text/javascript">
			$(document).ready(function(){
					$("#kt_login_signin_submit").show('slow');
			});
// Class Definition
var KTLoginV1 = function () {
	var login = $('#kt_login');

	var showErrorMsg = function(form, type, msg) {
		var alert = $('<div class="alert alert-' + type + ' alert-dismissible shadow fade show" role="alert">\
    <strong>'+msg+'</strong> \
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
</div>');

		form.find('.alert').remove();
		alert.prependTo(form);
		//KTUtil.animateClass(alert[0], 'fadeIn animated');
	}

	// Private Functions
	var handleSignInFormSubmit = function () {
		$('#kt_login_signin_submit').click(function (e) {
			e.preventDefault();



			var btn = $(this);
			var form = $('#kt_login_form');

			form.validate({
				rules: {
					username: {
						required: true
					},
					password: {
						required: true
					}
				}
			});

			if (!form.valid()) {
				return;
			}

 			$('#loaderIcon').css('visibility', 'visible');
     $('#loaderIcon').show();

		setTimeout(function () {
				$('#loaderIcon').hide();
		}, 2000);



			username = $("#username").val();
			password = $("#password").val();
			// ajax form submit:  http://jquery.malsup.com/form/
			$.ajax({
				url: '<?= site_url('Cms/Login/login'); ?>',
				    type: 'POST',  // http method
    				data: { username : username, password : password },  // data to submit
    				success: function (response) {
    				if (response == 'success') {
              Swal.fire({
    text: "You have successfully logged in!",
    icon: "success",
    showConfirmButton: false,
    timer: 1500
}).then(() => {
    window.location.href = '<?= site_url('Cms/Admin/index'); ?>';
});

    				//	window.location.href = '<?= site_url('Cms/Admin/index'); ?>';
          }else{
					// similate 2s delay
					setTimeout(function () {
				  	$('#loaderIcon').hide();
 						showErrorMsg(form, 'danger', 'Incorrect username or password. Please try again.');
					}, 2000);
				}
      }
			});
		});
	}

	// Public Functions
	return {
		// public functions
		init: function () {
			handleSignInFormSubmit();
		}
	};
}();

// Class Initialization
jQuery(document).ready(function () {
	KTLoginV1.init();
});

</script>
<!--end::Page Scripts -->


</body>

<!-- end::Body -->
</html>
