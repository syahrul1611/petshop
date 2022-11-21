<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Header -->
        <title><?php echo $title; ?></title>
        <?php foreach ($csss as $css) : ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $css; ?>" />
        <?php endforeach; ?>
        <!-- End Header -->
    </head>
    <body>
        <!-- Navbar -->
            <?php $this->load->view('layouts/navbar'); ?>
        <!-- End Navbar -->

        <!-- Body -->
        <section class="container" style="margin-top:50px;" role="main">
            <?php $this->load->view($yield); ?>
        </section>
        <!-- End Body -->

        <!-- Footer -->
        <?php foreach ($jss as $js) : ?>
        <script src="<?php echo base_url(); ?>assets/<?php echo $js; ?>"></script>
        <?php endforeach; ?>
        <!-- End Footer -->
    </body>
</html>