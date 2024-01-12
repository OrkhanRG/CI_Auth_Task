<?php require_once APPPATH . 'views/layouts/header.php'; ?>

<div class="col-md-12 d-flex justify-content-center mt-3">
    <div class="card text-white bg-primary col-md-5">
        <div class="card-body">
            <h4 class="card-title">______________Istifadəçi Məlumatları_____________</h4>
            <p class="card-text"><b>Ad Soyad:</b> <?php echo $this->session->userdata('name')?></p>
            <p class="card-text"><b>Email:</b> <?php echo $this->session->userdata('email')?></p>
        </div>
        <a class="btn btn-danger" href="<?php echo base_url('auth/logout') ?>">Çıxış</a>
    </div>
    
</div>


<?php require_once APPPATH . 'views/layouts/footer.php'; ?>