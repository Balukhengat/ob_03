<!-- Faq -->
	<div class="faq main-grid-border">
		<div class="container">
			<div class="wthree-help">
				<h3>How Can We help you</h3>
				<form action="#" method="get"> 
					<textarea placeholder="Your Query" name="Message" required=""></textarea>
					<input type="submit" value="submit">
				</form>
				<h5>OR</h5>
				<a href="<?php echo base_url()?>index.php/contact">Contact Us</a>
			</div>
			<?php $this->load->view('pages/helpandfaq/faq.php');?>
		</div>	
	</div>
	<!-- // Faq -->