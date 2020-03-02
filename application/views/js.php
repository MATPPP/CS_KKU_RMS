<!-- jQuery Js -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
<!-- Bootstrap Js -->
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<!-- Metis Menu Js -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.metisMenu.js');?>"></script>
<!-- Morris Chart Js -->
<script type="text/javascript" src="<?php echo base_url('assets/js/morris/raphael-2.1.0.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/morris/morris.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/easypiechart.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/easypiechart-data.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/Lightweight-Chart/jquery.chart.js');?>"></script>
<script> </script>
<!-- DATA TABLE SCRIPTS -->
<script type="text/javascript" src="<?php echo base_url('assets/js/dataTables/jquery.dataTables.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dataTables/dataTables.bootstrap.js');?>"></script>
<script>
	$(document).ready(function () {
		$('#dataTables-example').dataTable();
	});
</script>
<!-- Custom Js -->
<script type="text/javascript" src="<?php echo base_url('assets/js/custom-scripts.js');?>"></script>

<!-- Script -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- jQuery UI -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type='text/javascript'>
	$(document).ready(function(){

		// Initialize
		$( "#autouser_by_id_std" ).autocomplete({
			source: function( request, response ) {
				// Fetch data
				$.ajax({
					url: "<?=base_url()?>index.php/User/userList",
					type: 'post',
					dataType: "json",
					data: {
						search: request.term
					},
					success: function( data ) {
						response( data );
					}
				});
			},
			select: function (event, ui) {
				// Set selection
				$('#autouser_by_id_std').val(ui.item.label); // display the selected text
				$('#name_std').val(ui.item.value); // save selected id to input
				return false;
			}
		});

	});
</script>
