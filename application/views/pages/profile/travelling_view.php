<div class="col-md-9">
<?php 
$userid = $_SESSION['userid'];
$travel_data = $this->db->order_by('date','desc')->get_where('travelling',array('userid' => $userid))->result_array();
?>
<div class="col-md-9">
	<a href="<?php echo base_url();?>Basic_Controller/user_travelling"><button class="btn btn-success">Add</button></a>
	<a href="<?php echo base_url();?>Basic_Controller/user_travelling_view"><button class="btn btn-success">View</button></a>
</div>
<?php if($this->session->flashdata('message')!=null){?>
			<div class="col-md-12">
			<br>
						<div id="danger-alert" class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div>
			</div>	
<?php }?>
 <table class="table table-hover">
    <thead>
      <tr>
        <th>Post-ID</th>
        <th>Title</th>
        <th>Edit</th>
        <th>Post-Date</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($travel_data as $row){?>
      <tr>
        <td><?php echo $row['travelid'];?></td>
        <td><?php echo $row['title'];?></td>
        <td>
        	<?php 
        		$postdate =  $row['date'];
        		echo date("d F , Y",strtotime(str_replace('-','/', $postdate)));
        	?>
        </td>
        <td><a href="<?php echo base_url();?>Basic_Controller/user_travelling_edit/<?php echo $row['travelid'];?>"><button class="btn btn-success">Edit</button></a></td>
        <td><a href="<?php echo base_url();?>Basic_Controller/user_travelling/delete/<?php echo $row['travelid'];?>"><button class="btn btn-danger">Delete</button></a></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>
<div class="col-md-3">
	<h3>ADSENSE CODE GOES HERE</h3>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js">
</script>
<script type="text/javascript" lang="javascript" src="<?php echo base_url();?>assets/js/validation.js">
</script>