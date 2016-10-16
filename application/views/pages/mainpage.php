
<html>
	<?php 
		$this->load->view('layout/head');
	?>
	<body>
	<?php $this->load->view('layout/leftsidebar.php');?>
		<?php $this->load->view('layout/header');?>
		<?php  $this->load->view('pages/'.$template.'/container.php');
			var_dump($datas);
			$i=3;
			var_dump($i);
			foreach ($datas as $val){
				echo $val;
			}
		?>
		<?php $this->load->view('layout/footer');?>
		<?php $this->load->view('layout/js');?>
	</body>
</html>