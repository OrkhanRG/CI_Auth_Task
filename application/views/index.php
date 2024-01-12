<?php require_once APPPATH . 'views/layouts/header.php'; ?>

<?php
if ($this->session->flashdata('success')) {
?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php } ?>

<?php
if ($this->session->flashdata('dntlogin')) {
?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('dntlogin'); ?>
    </div>
<?php } ?>


<div class="col-sm-4">
    <h3>Məqalə 1</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
</div>
<div class="col-sm-4">
    <h3>Məqalə 2</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
</div>
<div class="col-sm-4">
    <h3>Məqalə 3</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
</div>
<div class="col-sm-4">
    <h3>Məqalə 4</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
</div>
<div class="col-sm-4">
    <h3>Məqalə 5</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
</div>
<div class="col-sm-4">
    <h3>Məqalə 6</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
</div>

<?php require_once APPPATH . 'views/layouts/footer.php'; ?>