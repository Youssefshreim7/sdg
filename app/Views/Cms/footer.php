<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Anzima Group.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Developed by <a target="_blank" href="https://anzimagroup.com/"> Anzima Group<img height="25" src="<?php echo base_url();?>uploads/backend_settings/anzima.png" /> </a>
                </div>
            </div>
        </div>
    </div>
</footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>






    <!-- JAVASCRIPT -->
    <script src="<?= base_url() . '/assets/cms/' ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() . '/assets/cms/' ?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url() . '/assets/cms/' ?>assets/libs/node-waves/waves.min.js"></script>
    <script src="<?= base_url() . '/assets/cms/' ?>assets/libs/feather-icons/feather.min.js"></script>
    <script src="<?= base_url() . '/assets/cms/' ?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?= base_url() . '/assets/cms/' ?>assets/js/plugins.js"></script>


    <script src="<?= base_url() . '/assets/cms/' ?>assets/js/pages/form-input-spin.init.js"></script>

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/toastify-js'></script>
    <script type='text/javascript' src='<?= base_url() . '/assets/cms/' ?>assets/libs/choices.js/public/assets/scripts/choices.min.js'></script>
    <script type='text/javascript' src='<?= base_url() . '/assets/cms/' ?>assets/libs/flatpickr/flatpickr.min.js'></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.5/main.min.js" integrity="sha512-VyGX7HXwa9yMgIfDPYcj7+XFjtSEzqY7LTf2Tvn2FAf4O6MkD5UzNkrlkMHyLQMbdYfor8SNYKyyeBhTazNgPw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="<?= base_url() . '/assets/cms/' ?>assets/js/app.js"></script>





    <!-- apexcharts -->
    <script src="<?= base_url() . '/assets/cms/' ?>assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="<?= base_url() . '/assets/cms/' ?>assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="<?= base_url() . '/assets/cms/' ?>assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="<?= base_url() . '/assets/cms/' ?>assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="<?= base_url() . '/assets/cms/' ?>assets/js/pages/dashboard-ecommerce.init.js"></script>

    <script src="<?= base_url() . '/assets/cms/' ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

  <!-- Sweet alert init js-->
  <script src="<?= base_url() . '/assets/cms/' ?>assets/js/pages/sweetalerts.init.js"></script>







    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--select2 cdn-->
    <script src="<?= base_url() . '/assets/cms/' ?>assets/js/pages/select2.min.js"></script>

      <script src="<?= base_url() . '/assets/cms/' ?>assets/js/pages/select2.init.js"></script>





    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>


           <script src="<?= base_url() . '/assets/cms/' ?>assets/js/pages/datatables.init.js"></script>

           <?php if(isset($records_name)){ ?>
             <?php if($records_name == 'Order' || $records_name == 'products' || $records_name == 'samples visited doctors' || $records_name == 'samples visited pharmacys' || $records_name == 'sales visited pharmacys'){ ?>
               <script>
               document.addEventListener('DOMContentLoaded', function () {
    // Initialize existing DataTables
    initializeTables();

    // Destroy existing DataTable instance on #example table
    $('#example').DataTable().destroy();

    // Add sorting by ID descending for #example table
    $('#example').DataTable({
        "order": [[ 0, "desc" ]]  // Assuming 'id' is the first column (index 0)
    });



});
               </script>
            <?php } ?>
           <?php } ?>

              <!-- App js -->

           <script type="text/javascript">



         $(document).ready(function(){


               $("table").on("click", ".btn-danger", function(){

                 var element = $(this);

                 var thisid = element.val();

                 swal.fire({
                   title: 'Are you sure?',
                   text: "You won't be able to revert this!",
                   type: 'warning',
                   showCancelButton: true,
                   confirmButtonColor: '#3085d6',
                   cancelButtonColor: ' #d33 ',
                   confirmButtonText: 'Yes, delete it!',
                   cancelButtonText: 'Cancel',
                   confirmButtonClass: 'btn btn-success ',
                   cancelButtonClass: 'btn btn-danger marginRight',
                    reverseButtons: true
                 }).then((result) => {
                   console.log(result);
                   if (result.value == true) {
                     // alert(123);
                     $.ajax({
                       url : "<?= site_url('Cms/Super/inactiveRow'); ?>",
                       type : "POST",
                       data : {
                         "id" : thisid,
                         "table" : "<?= $db_table_name; ?>"
                       },
                       success : function(data){

                         console.log("SUCCESS");
                         console.log(data);
                         var obj = jQuery.parseJSON(data);
                         console.log(obj);

                         if(obj.is_active == 0 ){


                           var tr = element.closest("tr");
                           tr.fadeOut(400, function(){
                             tr.remove();
                           });
                         } else {
                           alert("Un expected error");
                         }

                       }
                     });
                   }
                 });
               });






           $("table").on("click", ".btn-status", function(){

                 var element = $(this);

                 var thisid = element.val();

                 $.ajax({
                   url : "<?= site_url('Cms/Super/changeIsBlocked'); ?>",
                   type : 'POST',
                   data : {'id' : thisid, 'table' : '<?= $db_table_name; ?>'},
                   success : function(data){

                     var obj = jQuery.parseJSON(data);
                     if(obj.is_blocked == 0 ){
                       element.removeClass('btn-outline-danger');
                       element.addClass('btn-outline-success');
                       element.html('Active');
                     } else {
                       element.removeClass('btn-outline-success');
                       element.addClass('btn-outline-danger');
                       element.html('Inactive');
                     }

                   }
                 })
               });

               $("table").on("click", ".btn-new", function(){

                     var element = $(this);

                     var thisid = element.val();

                     $.ajax({
                       url : "<?= site_url('Cms/Super/changeIsfet'); ?>",
                       type : 'POST',
                       data : {'id' : thisid, 'table' : '<?= $db_table_name; ?>'},
                       success : function(data){

                         var obj = jQuery.parseJSON(data);
                         if(obj.is_featured == 1 ){
                           element.removeClass('btn-outline-danger');
                           element.addClass('btn-outline-primary');
                           element.html('<i class=" ri-toggle-fill ri-2x"></i>');
                         } else {
                           element.removeClass('btn-outline-primary');
                           element.addClass('btn-outline-danger');
                           element.html('<i class=" ri-toggle-line ri-2x"></i>');
                         }

                       }
                     })
                   });


             });
           </script>

           <script>
               CKEDITOR.replace('editor1');
           </script>






</body>

</html>
