<section class="content">
        <div class="container-fluid">
        <div class="block-header">
                <h2>REALESTATE / View</h2>
            </div>
<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                REALESTATE - DATA
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Date</th>
                                    </tr>
                                </tfoot>
                                <tbody>
<?php 
	$userid = $_SESSION['adminid'];
	$realestate_data = $this->db->order_by('date','desc')->get_where('realestate',array('userid' => $userid))->result_array();
?>                                
                                    <tr>
                                     <?php foreach ($realestate_data as $row){?>
								      <tr>
								        <td><?php echo $row['name'];?></td>
								        <td><?php echo $row['title'];?></td>
								        <td><?php echo $row['mobile'];?></td>
								        <td><?php echo $row['email'];?></td>
								        <td><?php echo $row['city'];?></td>
								        <td>
								        	<?php 
								        		$postdate =  $row['date'];
								        		echo date("d F , Y",strtotime(str_replace('-','/', $postdate)));
								        	?>
								        </td>
								        <td><a href="<?php echo base_url();?>Admin/realestate_edit/<?php echo $row['realid'];?>"><button class="btn btn-success">Edit</button></a></td>
								        <td><a href="<?php echo base_url();?>Admin/realestate/delete/<?php echo $row['realid'];?>"><button class="btn btn-danger">Delete</button></a></td>
								      </tr>
								      <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
      </div>
</section> 
