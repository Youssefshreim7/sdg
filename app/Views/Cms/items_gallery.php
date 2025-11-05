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
      <!-- begin:: Content -->
         <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
           <div class="row">
             <div class="col-md-12">

               <!--begin::Portlet-->
               <div class="kt-portlet">
                 <div class="kt-portlet__head">
                   <div class="kt-portlet__head-label">
                     <h3 class="kt-portlet__head-title">
                       <?= $form_title; ?>
                     </h3>
                   </div>
                 </div>


                 <div class="row  ">
                   <div class="col-lg-6">
                     <div class="kt-portlet kt-portlet--height-fluid">

                       <div class="kt-portlet__body">
                         <div class="kt-uppy" id="kt_uppy_2" style="width: 100% !important;">
                           <div class="kt-uppy__dashboard"></div>
                           <div class="kt-uppy__progress"></div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6">
                     <div class="kt-portlet kt-portlet--height-fluid" style="background-color:#fff">

                         <div class="kt-portlet__body">
                         Uploaded images
                         <hr>

                           <!--begin: Datatable -->
                       <table class="table table-striped- table-bordered table-hover table-checkable text-center" id="kt_table_1">

                         <thead>
                           <tr>

                             <th>Image</th>
                             <th>Uploaded Date</th>
                              <th>Actions</th>
                           </tr>
                         </thead>
                         <tbody>

                         </tbody>
                       </table>

                       <!--end: Datatable -->



                       </div>
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-lg-12">
                     <div class="kt-uppy" id="kt_uppy_2">
                       <div class="kt-uppy__dashboard"></div>
                       <div class="kt-uppy__progress"></div>
                     </div>
                   </div>
                 </div>



                 <!--end::Form-->
               </div>

               <!--end::Portlet-->


             </div>

           </div>
         </div>

         <!-- end:: Content -->
       </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

       <!--Uppy file upload -->
       <script src="<?= base_url() . '/assets/cms/'; ?>assets/libs/uppy/uppy.bundle.js" type="text/javascript"></script>
       <!-- <script src="<?= base_url() . '/assets/cms/'; ?>assets/js/pages/crud/file-upload/uppy.js" type="text/javascript"></script> -->
       <script type="text/javascript">
   "use strict";
   // Class definition
   var KTUppy = function () {
     const Tus = Uppy.Tus;
     const ProgressBar = Uppy.ProgressBar;
     const StatusBar = Uppy.StatusBar;
     const FileInput = Uppy.FileInput;
     const Informer = Uppy.Informer;

     // to get uppy companions working, please refer to the official documentation here: https://uppy.io/docs/companion/
     const Dashboard = Uppy.Dashboard;
     const Dropbox = Uppy.Dropbox;
     const GoogleDrive = Uppy.GoogleDrive;
     const Instagram = Uppy.Instagram;
     const Webcam = Uppy.Webcam;

     const XHRUpload = Uppy.XHRUpload;
     console.log(XHRUpload);

     var initUppy2 = function(){
       var id = '#kt_uppy_2';

       var options = {
         proudlyDisplayPoweredByUppy: false,
         target: id,
         inline: true,
         replaceTargetContent: true,
         showProgressDetails: true,
         note: '(1200 x 800)Images only, up to 1 MB',
         height: 470,
         metaFields: [
         { id: 'name', name: 'Name', placeholder: 'file name' },
         { id: 'caption', name: 'Caption', placeholder: 'describe what the image is about' }
         ],
         browserBackButtonClose: true
       }

       var uppyDashboard = Uppy.Core({
         autoProceed: true,
         restrictions: {
           maxFileSize: 100000000, // 1mb
           maxNumberOfFiles: 50,
           minNumberOfFiles: 1,
           allowedFileTypes: ['image/*']
         }
       });

       uppyDashboard.use(Dashboard, options);
       // uppyDashboard.use(Tus, { endpoint: '<?= site_url('admin/items_gallery_save/'.$id);?>' });

       uppyDashboard.use(XHRUpload, {
         endpoint: '<?= site_url('cms/items/items_gallery_save/'.$id);?>',
         fieldName: 'file_name'
       })

       uppyDashboard.on('upload-success', (file, response) => {
         console.log("response success");
         console.log(response);
         refreshFiles();
       });
               uppyDashboard.on('upload-error', (file, response) => {
         console.log("response error");
         console.log(response);
       });

     }

     return {
       // public functions
       init: function() {
         initUppy2();

       }
     };
   }();

   $(document).ready(function() {
     KTUppy.init();
   });

   refreshFiles();

   function refreshFiles(){
     $.ajax({
       url : "<?= site_url('cms/items/get_items_gallery/'.$id); ?>",
       type : 'POST',
       data : {},
       success : function(data){
         $("#kt_table_1 tbody").html(data);
       }
     })
   }
 </script>
