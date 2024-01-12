<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datepicker/css/datepicker.css') ?>" rel=”stylesheet”>
</head>

<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo base_url('anasehife') ?>"><img src="<?php echo base_url('assets/img/flup.jpg') ?>" alt="Flup" width="100"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo base_url('anasehife') ?>">Anasəhifə</a>
                            </li>
                        </ul>

                        <?php
                        if ($this->session->userdata('login') != 'success') {
                        ?>
                            <div class="d-flex">
                                <a class="btn btn-success" href="<?php echo base_url('auth/login_page') ?>">Giriş</a>
                            </div>
                            <div class="d-flex" role="search" style="margin-left: 5px;">
                                <a class="btn btn-warning" href="<?php echo base_url('auth/register_page') ?>">Qeydiyyat</a>
                            </div>
                        <?php
                        } else { ?>
                            <div class="d-flex" role="search" style="margin-left: 5px;">
                                <label class="text-warning" style="margin: 5px 10px 0 0;">
                                    <a href="<?php echo base_url('auth/user') ?>">
                                        <b>
                                            <?php echo $this->session->userdata('name'); ?>
                                        </b>
                                    </a>
                                </label>
                                <a class="btn btn-danger" href="<?php echo base_url('auth/logout') ?>">Çıxış</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </nav>