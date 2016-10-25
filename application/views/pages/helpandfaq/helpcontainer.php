<!-- Faq -->
	<div class="faq main-grid-border">
		<div class="container">
			<div class="wthree-help">
				<h3>How Can We help you</h3>
				<br>
				<form action="<?php base_url();?>Contact/feedback" method="post"> 
					<?php if($this->session->flashdata('message')!=null){?>
						<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div> 
						<?php }?>
						<div class="error"><?php echo form_error('name'); ?></div>
				  <input placeholder="Name" type="text" class="form-control" id="name" name="name">
				  <div class="error"><?php echo form_error('email'); ?></div>
				  <input placeholder="Email" type="text" class="form-control" id="email" name="email">
				  <div class="error"><?php echo form_error('message'); ?></div>
				<textarea placeholder="Your Query" name="message" required=""></textarea>
					
					<input type="submit" value="submit">
				</form>
			
				<h5>OR</h5>
				<a href="<?php echo base_url();?>contact">Contact Us</a>
			</div>
			<?php $this->load->view('pages/helpandfaq/faq.php');?>
		</div>	
	</div>
	<!-- // Faq -->