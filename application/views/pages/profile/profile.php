<html>
	<?php $this->load->view('layout/head');?>
	<body>
		<?php $this->load->view('layout/leftsidebar.php');?>
		<?php $this->load->view('layout/header.php');?>
		<?php $this->load->view('layout/category.php');?>
		<?php $this->load->view('pages/profile/profile_container',$pagename)?>
		<?php// $this->load->view('pages/profile/'.$pagename)?>
		<?php $this->load->view('layout/footer.php');?>
		<?php $this->load->view('layout/js.php');?>
	</body>
</html>