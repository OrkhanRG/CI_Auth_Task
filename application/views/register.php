<?php require_once APPPATH . 'views/layouts/header.php'; ?>


<div class="col-md-12 d-flex justify-content-center mb-4">

    <form class="col-md-6" action="<?php echo base_url('auth/register') ?>" method="post">

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

        <div class="mb-3">
            <label for="name" class="form-label">Ad</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Soyad</label>
            <input type="text" class="form-control" name="surname" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Doğum Tarix</label> <br>
            <input type="text" class="span2" name="date" id="dp1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password_conf" id="exampleInputPassword1">
        </div>
        <div class="mb-3 justify-content-end">
            <button type="submit" name="register" class="btn btn-primary">Qeydiyyatdan Keç</button>
        </div>
    </form>
</div>

<?php require_once APPPATH . 'views/layouts/footer.php'; ?>