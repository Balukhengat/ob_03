<html>
	<?php $this->load->view('layout/head');?>
	<body>
		<?php $this->load->view('layout/leftsidebar.php');?>
		<?php $this->load->view('layout/header.php');?>
		<?php $this->load->view('layout/category.php');?>
		<div class="container">
		<?php $this->load->view('pages/helpandfaq/faq.php');?>
		</div>
		<?php $this->load->view('layout/footer.php');?>
		<?php $this->load->view('layout/js.php');?>
	</body>
</html>