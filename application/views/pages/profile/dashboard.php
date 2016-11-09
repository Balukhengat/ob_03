<?php
$userid = $_SESSION['userid'];
		$this->db->select('t1.name, t2.name,t1.category,t2.category')
          ->from('realestate AS t1, tution AS t2')
          ->where('t1.userid = t2.userid');
	$dashboard_info=$query = $this->db->get()->result_array();
	print_r($dashboard_info);die();
		?>
		
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
	<table class="table table-hover">
    <thead>
      <tr>
        <th>Title</th>
        <th>Date</th>
 		<th>Category</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($dashboard_info as $row){
?>
      <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['title'];?></td>
        <td><?php $category=$row['category'];
       	 		if($category=='0'){
        			echo"Realestate";}
        		elseif($category=='1'){
        			echo"Tution";}
        		elseif($category=='2'){
        			echo"Hotels $ Restaurents";}
        		elseif($category=='3'){
       				echo"Travelling";}
       			elseif($category=='4'){
       				echo"Automobiles";}
        ?></td>
        <td><button class="btn btn-success btn-sm">Edit</button>&nbsp;<button class="btn btn-danger btn-sm">Delete</button></td>
      </tr>
      <?php }?>
    </tbody>
  </table>		
</div>