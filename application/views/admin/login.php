<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <link href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
        rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
</head>

<body class="vh-100">
    <div class="authincation ">
        <div class="container">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form" style="background: #00a79c">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img
                                                src="https://ik.imagekit.io/7vdby4475/images/logo-3.png?updatedAt=1714458488268" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">login to your account</h4>
                                    <?php if ($this->session->flashdata('danger')): ?>
                                        <?php echo '                                
                                            <div class="alert alert-danger solid alert-end-icon alert-dismissible">
                                                <span>
                                                    <i class="mdi mdi-help"></i>
                                                </span>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                    <span>
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </span>
                                                </button>
                                                <strong>Error!</strong> ' . $this->session->flashdata('danger') . '
                                            </div>;'; ?>
                                    <?php endif; ?>
                                    <?php if ($this->session->flashdata('success')): ?>
                                        <?php echo '                        
                                            <div class="alert alert-info solid alert-end-icon alert-dismissible">
                                                <span><i class="mdi mdi-email"></i></span>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                    <span>
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </span>
                                                </button> ' . $this->session->flashdata('success') . '
                                            </div>'; ?>
                                    <?php endif; ?>
                                    <?php echo form_open(base_url('admin/adminLogin')); ?>
                                    <div class="mb-3">
                                        <label class="mb-1 text-white"><strong>Username</strong></label>
                                        <input type="text" class="form-control" name="email" placeholder="username"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-1 text-white"><strong>Password</strong></label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="password" required>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/global/global.min.js"></script>
    <script
        src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/dlabnav-init.js"></script>
</body>

</html>