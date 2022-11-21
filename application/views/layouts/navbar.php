<nav class="navbar navbar-expand-lg fixed-top shadow-sm" style="background: #fae5be;">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url(); ?>assets/image/logo.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-center">
            <?php echo app_name(); ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
                <a class="nav-link" href="<?php echo base_url(); ?>about">About Us</a>
                <a class="nav-link" href="<?php echo base_url(); ?>service">Service</a>
                <a class="nav-link" href="<?php echo base_url(); ?>product">Product</a>
            </div>
        </div>
    </div>
</nav>