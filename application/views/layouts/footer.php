</div>
</div>
<div class="card text-center footer fixed-bottom bg-dark white text-white">
  <div class="card-header ">
    Footer
  </div>
</div>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.js') ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?php echo base_url('assets/datepicker/js/bootstrap-datepicker.js') ?>"></script>

<script>

$(function(){

$('#dp1').datepicker({

format: 'dd.mm.yyyy'

})

.on('changeDate', function(ev){

$('#dp1').datepicker('hide');

});

 

});

</script>

<script src=”http://www.google-analytics.com/urchin.js” type=”text/javascript”></script>
</body>

</html>