<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="enable">

<head>

     <meta charset="utf-8" />
    <title>Dashboard |  Content Management System Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content=" System Design Group" name="description" />
    <meta content=" System Design Group" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() . '/assets/cms/' ?>assets/images/small/chair.png">

    <!--datatable css-->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
      <!--datatable responsive css-->
      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

      <link href="<?= base_url() . '/assets/cms/' ?>assets/css/select2.min.css" rel="stylesheet" type="text/css" />


    <!-- jsvectormap css -->
    <link href="<?= base_url() . '/assets/cms/' ?>assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="<?= base_url() . '/assets/cms/' ?>assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="<?= base_url() . '/assets/cms/' ?>assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?= base_url() . '/assets/cms/' ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url() . '/assets/cms/' ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url() . '/assets/cms/' ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?= base_url() . '/assets/cms/' ?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <link href="<?= base_url() . '/assets/cms/' ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.5/main.min.css" integrity="sha512-1P/SRFqI1do4eNtBsGIAqIZIlnmOQkaY7ESI2vkl+q+hl9HSXmdPqotN0McmeZVyR4AWV+NvkP6pKOiVdY/V5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="<?= base_url() . '/assets/cms/' ?>assets/libs/ckeditor/ckeditor.js"></script>


    <link href="<?= base_url() . '/assets/cms/'; ?>assets/libs/uppy/uppy.bundle.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

      <header id="page-topbar">
          <div class="layout-width">
              <div class="navbar-header">
                  <div class="d-flex">
                      <!-- LOGO -->
                      <div class="navbar-brand-box horizontal-logo">
                          <a href="/" class="logo logo-dark">
                              <span class="logo-sm">
                                  <img src="<?= base_url() . '/assets/cms/' ?>assets/images/logo-sm.png" alt="" height="22">
                              </span>
                              <span class="logo-lg">
                                  <img src="<?= base_url() . '/assets/cms/' ?>assets/images/logo-dark.png" alt="" height="17">
                              </span>
                          </a>

                          <a href="/" class="logo logo-light">
                              <span class="logo-sm">
                                  <img src="<?= base_url() . '/assets/cms/' ?>assets/images/logo-sm.png" alt="" height="22">
                              </span>
                              <span class="logo-lg">
                                  <img src="<?= base_url() . '/assets/cms/' ?>assets/images/logo-light.png" alt="" height="17">
                              </span>
                          </a>
                      </div>

                      <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                          <span class="hamburger-icon">
                              <span></span>
                              <span></span>
                              <span></span>
                          </span>
                      </button>

                      <!-- App Search-->

                  </div>

                  <div class="d-flex align-items-center">







                      <div class="ms-1 header-item d-none d-sm-flex">
                          <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" data-toggle="fullscreen">
                              <i class='bx bx-fullscreen fs-22'></i>
                          </button>
                      </div>

                      <div class="ms-1 header-item d-none d-sm-flex">
                          <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none">
                              <i class='bx bx-moon fs-22'></i>
                          </button>
                      </div>



                      <div class="dropdown ms-sm-3 header-item topbar-user">
                          <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="d-flex align-items-center">
                                  <img class="rounded-circle header-profile-user" src="<?= base_url() . '/assets/cms/' ?>assets/images/users/avatar-4.jpg" alt="Header Avatar">
                                  <span class="text-start ms-xl-2">
                                      <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo $_SESSION['username']; ?>  <?php echo session()->get('admin_id'); ?></span>
                                      <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Super Admin</span>
                                  </span>
                              </span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end">
                              <!-- item-->
                              <h6 class="dropdown-header">Welcome <?php echo $_SESSION['username']; ?>!</h6>

                              <div class="dropdown-divider"></div>

                              <a class="dropdown-item" href="<?= site_url('Cms/Admin/logout'); ?>"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </header>

      <!-- removeNotificationModal -->
      <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="mt-2 text-center">
                          <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                          <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                              <h4>Are you sure ?</h4>
                              <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                          </div>
                      </div>
                      <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                          <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                      </div>
                  </div>

              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- ========== App Menu ========== -->
      <div class="app-menu navbar-menu">
          <!-- LOGO -->
          <div class="navbar-brand-box">
              <!-- Dark Logo-->
              <a href="<?=   site_url('cms/admin/index'); ?>" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="<?= base_url() . '/assets/cms/' ?>assets/images/icon.png" alt="" height="22">
                </span>
                <span  class="logo-lg">
                    <img  src="<?= base_url() . '/assets/cms/' ?>assets/images/sdglogo.png" alt="" height="100">
                </span>
              </a>
              <!-- Light Logo-->
              <a href="<?=   site_url('cms/admin/index'); ?>" class="logo logo-light">
                  <span class="logo-sm">
                      <img src="<?= base_url() . '/assets/cms/' ?>assets/images/icon.png" alt="" height="22">
                  </span>
                  <span  class="logo-lg">
                      <img   src="<?= base_url() . '/assets/cms/' ?>assets/images/sdglogo.png" alt="" style=" height: auto; max-width: 183px; ">
                  </span>
              </a>
              <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                  <i class="ri-record-circle-line"></i>
              </button>
          </div>

          <div id="scrollbar">
              <div class="container-fluid">

                  <div id="two-column-menu">
                  </div>
                  <ul class="navbar-nav" id="navbar-nav">
                      <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                      <li class="nav-item">
                          <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'dashboard' ? 'active' : '';  ?>" href="<?=   site_url('cms/admin/index'); ?>">
                              <i class="mdi mdi-speedometer"></i> <span data-key="t-widgets">Dashboards</span>
                          </a>
                      </li>

                 <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'System Administrator' ? 'active' : '';  ?>" href="<?=   site_url('cms/admin/admins'); ?>">
                        <i class="mdi mdi-view-grid-plus-outline"></i>  <span data-key="t-widgets">System Administrator</span>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'Sliders' ? 'active' : '';  ?>" href="<?=   site_url('cms/slider/sliders'); ?>">
                         <i class="mdi mdi-image-outline"></i> <span data-key="t-widgets">Sliders</span>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'aboutus' ? 'active' : '';  ?>" href="<?=   site_url('cms/about/about'); ?>">
                         <i class="mdi mdi-clipboard-multiple-outline"></i> <span data-key="t-widgets">About Us</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'mainservices' ? 'active' : '';  ?>" href="<?=   site_url('cms/mainservices/mainservices'); ?>">
                         <i class="mdi mdi-source-fork"></i> <span data-key="t-widgets">Catalogues</span>
                     </a>
                 </li>
                  <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'categories' ? 'active' : '';  ?>" href="<?=   site_url('cms/categories/categories'); ?>">
                         <i class="mdi mdi-database-edit"></i> <span data-key="t-widgets">Categories</span>
                     </a>
                   </li>
                                     <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'sub_categories' ? 'active' : '';  ?>" href="<?=   site_url('cms/categories/sub_categories'); ?>">
                         <i class="mdi mdi-database-edit"></i> <span data-key="t-widgets">Subcategory</span>
                     </a>
                   </li>
                 <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'products' ? 'active' : '';  ?>" href="<?=   site_url('cms/product/products'); ?>">
                         <i class="mdi mdi-spotlight"></i> <span data-key="t-widgets">Products</span>
                     </a>
                 </li> 
                 <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'news' ? 'active' : '';  ?>" href="<?=   site_url('cms/news/news'); ?>">
                         <i class="mdi mdi-account-circle"></i> <span data-key="t-widgets">Events</span>
                     </a>
                 </li> 
                                  <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'partner' ? 'active' : '';  ?>" href="<?=   site_url('cms/partner/partner'); ?>">
                         <i class="mdi mdi-router-network"></i> <span data-key="t-widgets">Partner</span>
                     </a>
                 </li>
                                  <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'socialmedia' ? 'active' : '';  ?>" href="<?=   site_url('cms/socialmedia/socialmedia'); ?>">
                         <i class="mdi mdi-play-network-outline"></i> <span data-key="t-widgets">Social media</span>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'contactinfo' ? 'active' : '';  ?>" href="<?=   site_url('cms/contactinfo/contactinfo'); ?>">
                         <i class="mdi mdi-phone-return-outline"></i> <span data-key="t-widgets">Contact Info </span>
                     </a>
                 </li>
                 <!-- <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'labels' ? 'active' : '';  ?>" href="<?=   site_url('cms/labels/labels'); ?>">
                         <i class="mdi mdi-account-circle"></i> <span data-key="t-widgets">Labels</span>
                     </a>
                 </li> 
                 <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'testimonial' ? 'active' : '';  ?>" href="<?=   site_url('cms/testimonial/testimonial'); ?>">
                         <i class="mdi mdi-badge-account-alert"></i> <span data-key="t-widgets">Testimonial</span>
                     </a>
                 </li>
                  <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'services' ? 'active' : '';  ?>" href="<?=   site_url('cms/services/services'); ?>">
                         <i class="mdi mdi-database-edit"></i> <span data-key="t-widgets">Services</span>
                     </a>
                 </li>-->
>
                 <!--<li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'items' ? 'active' : '';  ?>" href="<?=   site_url('cms/products/products'); ?>">
                         <i class="mdi mdi-led-strip-variant"></i> <span data-key="t-widgets">The QR</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'faq' ? 'active' : '';  ?>" href="<?=   site_url('cms/faq/faq'); ?>">
                         <i class="mdi mdi-frequently-asked-questions"></i> <span data-key="t-widgets">Faq</span>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'projects' ? 'active' : '';  ?>" href="<?=   site_url('cms/projects/projects'); ?>">
                         <i class="mdi mdi-source-fork"></i> <span data-key="t-widgets">Projects</span>
                     </a>
                 </li> -->
                <!-- <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'mainservices' ? 'active' : '';  ?>" href="<?=   site_url('cms/mainservices/mainservices'); ?>">
                         <i class="mdi mdi-database-edit"></i> <span data-key="t-widgets">Services</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'price' ? 'active' : '';  ?>" href="<?=   site_url('cms/price/price'); ?>">
                         <i class="mdi mdi-source-fork"></i> <span data-key="t-widgets">Price</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'csr' ? 'active' : '';  ?>" href="<?=   site_url('cms/csr/csr'); ?>">
                         <i class="mdi mdi-database-edit"></i> <span data-key="t-widgets">Why Choose Us</span>
                     </a>
                 </li>-->



                <!-- <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'clients' ? 'active' : '';  ?>" href="<?=   site_url('cms/clients/clients'); ?>">
                         <i class="mdi mdi-electron-framework"></i> <span data-key="t-widgets">Clients</span>
                     </a>
                 </li>-->

                <!-- <li class="nav-item">
                     <a class="nav-link menu-link <?= isset($menu_active) && $menu_active == 'membership' ? 'active' : '';  ?>" href="<?=   site_url('cms/membership/membership'); ?>">
                         <i class="mdi mdi-set-left-center"></i> <span data-key="t-widgets">Membership</span>
                     </a>
                 </li> -->












                  </ul>
              </div>
              <!-- Sidebar -->
          </div>

          <div class="sidebar-background"></div>
      </div>
      <!-- Left Sidebar End -->
      <!-- Vertical Overlay-->
      <div class="vertical-overlay"></div>


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
