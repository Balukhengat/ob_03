
<html>
	<?php 
		$this->load->view('layout/head');
	?>
	<body>
		<?php $this->load->view('layout/header');?>
		<?php  $this->load->view('pages/'.$template.'/container.php');?>
		<?php $this->load->view('layout/footer');?>
		<?php $this->load->view('layout/js');?>
	</body>
</html>