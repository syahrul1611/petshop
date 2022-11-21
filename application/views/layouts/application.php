<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Header -->
            <title><?php echo $title; ?></title>
            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
            <!-- vendor css -->
            <?php foreach ($vendor_css as $css) : ?>
            <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $css; ?>" />
            <?php endforeach; ?>
            <!-- vendor css end -->
            <!-- vendor js -->
            <?php foreach ($vendor_js as $js) : ?>
            <script src="<?php echo base_url(); ?>assets/<?php echo $js; ?>"></script>
            <?php endforeach; ?>
            <!-- vendor js end -->
            <!-- main css -->
            <?php foreach ($main_css as $css) : ?>
            <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $css; ?>" />
            <?php endforeach; ?>
            <!-- main css end -->
            <!-- custom css -->
            <?php foreach ($csss as $css) : ?>
            <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $css; ?>" />
            <?php endforeach; ?>
            <!-- custom css end -->
        <!-- End Header -->
    </head>
    <body>
        <!-- Navbar -->
            <?php $this->load->view('layouts/navbar'); ?>
        <!-- End Navbar -->

        <!-- Body -->
            <section class="container" style="margin-top:70px;" role="main">
                <?php $this->load->view($yield); ?>
            </section>
            <!-- custom js -->
            <?php foreach ($jss as $js) : ?>
            <script src="<?php echo base_url(); ?>assets/<?php echo $js; ?>"></script>
            <?php endforeach; ?>
            <!-- custom js end -->
        <!-- End Body -->

        <!-- Footer -->
            <?php $this->load->view('layouts/footer'); ?>
        <!-- End Footer -->
    </body>
</html>