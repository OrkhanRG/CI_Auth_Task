<?php require_once APPPATH . 'views/layouts/header.php'; ?>


<div class="col-md-12 d-flex justify-content-center mb-3">
    <form class="col-md-6" action="<?php echo base_url('auth/login') ?>" method="post">

        <?php
        if (validation_errors()) {
        ?>

            <div class="alert alert-danger">
                <?php echo validation_errors() ?>
            </div>

        <?php
        }
        ?>

        <?php
        if ($this->session->flashdata('success')) {
        ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>

        <?php
        if ($this->session->flashdata('error')) {
        ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php } ?>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <button type="submit" name="login" class="btn btn-success">Daxil Ol</button>
    </form>
</div>


<?php require_once APPPATH . 'views/layouts/footer.php'; ?>