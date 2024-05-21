<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin</title>
    <link href="<?php echo base_url(); ?>assets/admin/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet" />
    <link
        href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/admin/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/toastr/css/toastr.min.css">
    <link href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
        rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/css/custom.css" rel="stylesheet" />
</head>

<body>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="<?php echo base_url(); ?>admin/products" class="brand-logo">
                <!-- <img class="logo-abbr" width="39" height="31" src="<?php echo base_url(); ?>assets/images/logo.png" width="200px" /> -->
                <img class="brand-title" width="147" src="https://ik.imagekit.io/7vdby4475/images/logo-3.png?updatedAt=1714458488268"
                    width="200px" />
            </a>
            <div class="nav-control">
                <div class="hamburger"><span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="container d-block my-0">
                        <div class="d-flex align-items-center justify-content-sm-between justify-content-end">
                            <div class="header-left">
                                <div class="nav-item d-flex align-items-center"></div>
                            </div>
                            <ul class="navbar-nav header-right">
                                <li class="nav-item d-flex align-items-center"></li>
                                <li>
                                    <div class="dropdown header-profile2">
                                        <a class="nav-link" href="javascript:void(0);" role="button"
                                            data-bs-toggle="dropdown">
                                            <div class="header-info2 d-flex align-items-center">
                                                <img src="<?php echo base_url(); ?>assets/admin/images/man.png"
                                                    alt="" />
                                                <div class="d-flex align-items-center sidebar-info">
                                                    <div>
                                                        <h6 class="font-w500 mb-0 ms-2">Overfloww</h6>
                                                    </div>
                                                    <i class="fas fa-chevron-down"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" style="min-width: 160px;">
                                            <a href="<?php echo base_url(); ?>" target="_blank  "
                                                class="dropdown-item ai-icon ms-1">
                                                <i class="fa-solid fa-globe" style="color: #00a79c"></i>
                                                <span class="ms-1">Website</span>
                                            </a>
                                            <a href="<?php echo base_url(); ?>admin/logout"
                                                class="dropdown-item ai-icon ms-1">
                                                <i class="fa-solid fa-right-from-bracket" style="color: #00a79c"></i>
                                                <span class="ms-1">Logout</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dlabnav border-right">
            <div class="dlabnav-scroll">
                <h5 class="menu-title style-1">Main Menu</h5>
                <ul class="metismenu" id="menu">
                    <!-- <li>
                        <a href="<?php echo base_url(); ?>admin/dashboard" class="" aria-expanded="false">
                            <i class="bi bi-grid"></i>
                            <span class="nav-text">dashboard</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url(); ?>admin/products" class="" aria-expanded="false">
                            <i class="bi bi-cart" style="font-size: 2rem; color: #00a79c;"></i>
                            <span class="nav-text">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/product-list" class="" aria-expanded="false">
                        <i class="bi bi-card-checklist" style="font-size: 2rem; color: #00a79c;"></i>
                            <span class="nav-text">Product Status</span>
                        </a>
                    </li>                    
                    <li>
                        <a href="<?php echo base_url(); ?>admin/bestseller" class="" aria-expanded="false">
                        <i class="bi bi-arrow-up-right-square" style="font-size: 2rem; color: #00a79c;"></i>
                            <span class="nav-text">Best Selling</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/product-type" class="" aria-expanded="false">
                            <i class="bi bi-tags" style="font-size: 2rem; color: #00a79c;"></i>
                            <span class="nav-text">Product Type</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/galleries" class="" aria-expanded="false">
                            <i class="bi bi-card-image" style="font-size: 2rem; color: #00a79c;"></i>
                            <span class="nav-text">Galleries</span>
                        </a>
                    </li>
                </ul>
                <div class="plus-box">
                    <div class="d-flex align-items-center">
                        <h5>Upgrade your Admin Console.</h5>
                    </div>
                    <a href="javascript:void(0);" class="btn bg-white btn-sm">Call Now</a>
                </div>
                <div class="copyright mt-0">
                    <p><strong>Overfloww Cakes and Cafe</strong> © 2024. All Rights Reserved</p>
                </div>
            </div>
        </div>
        <div class="content-body">
            <?php if ($this->session->flashdata('success')): ?>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        toastr.info('<?php echo $this->session->flashdata('success'); ?>', 'Success!', {
                            positionClass: "toast-top-right",
                            timeOut: 5e3,
                            closeButton: !0,
                            debug: !1,
                            newestOnTop: !0,
                            progressBar: !0,
                            preventDuplicates: !0,
                            onclick: null,
                            showDuration: "300",
                            hideDuration: "1000",
                            extendedTimeOut: "1000",
                            showEasing: "swing",
                            hideEasing: "linear",
                            showMethod: "fadeIn",
                            hideMethod: "fadeOut",
                            tapToDismiss: !1
                        });
                    });
                </script>
            <?php endif; ?>
            <?php if ($this->session->flashdata('Error')): ?>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        toastr.error('<?php echo $this->session->flashdata('Error'); ?>', 'Deleted!', {
                            positionClass: "toast-top-right",
                            timeOut: 5e3,
                            closeButton: !0,
                            debug: !1,
                            newestOnTop: !0,
                            progressBar: !0,
                            preventDuplicates: !0,
                            onclick: null,
                            showDuration: "300",
                            hideDuration: "1000",
                            extendedTimeOut: "1000",
                            showEasing: "swing",
                            hideEasing: "linear",
                            showMethod: "fadeIn",
                            hideMethod: "fadeOut",
                            tapToDismiss: !1
                        });
                    });
                </script>
            <?php endif; ?>
            <?php if ($this->session->flashdata('warning')): ?>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        toastr.error('<?php echo $this->session->flashdata('warning'); ?>', 'warning!', {
                            positionClass: "toast-top-right",
                            timeOut: 5e3,
                            closeButton: !0,
                            debug: !1,
                            newestOnTop: !0,
                            progressBar: !0,
                            preventDuplicates: !0,
                            onclick: null,
                            showDuration: "300",
                            hideDuration: "1000",
                            extendedTimeOut: "1000",
                            showEasing: "swing",
                            hideEasing: "linear",
                            showMethod: "fadeIn",
                            hideMethod: "fadeOut",
                            tapToDismiss: !1
                        });
                    });
                </script>
            <?php endif; ?>
            <?php $this->load->view($view_page); ?>
        </div>
        <div class="footer">
            <div class="copyright border-top">
                <p>Designed and Developed by <a href="" style="color: teal;" target="_blank">God Particles</a></p>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/global/global.min.js"></script>
    <script
        src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/toastr/js/toastr.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins-init/toastr-init.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/swiper/js/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins-init/datatables.init.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/dlabnav-init.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#category-select').change(function () {
                var categoryId = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: '<?php echo base_url("admin/get_product_types"); ?>',
                    data: { category_id: categoryId },
                    dataType: 'json',
                    success: function (response) {
                        $('#product-type-select').empty();
                        $.each(response, function (index, type) {
                            $('#product-type-select').append('<option value="' + type.id + '">' + type.type_name + '</option>');
                        });
                    },
                    error: function () {
                        console.error('Error fetching product types');
                    }
                });
            });
        });
    </script>
    <script>
        imgInp.onchange = (evt) => {
            const [file] = imgInp.files;
            if (file) {
                blah.src = URL.createObjectURL(file);
            }
        };
    </script>
</body>

</html>