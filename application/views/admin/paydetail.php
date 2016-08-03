<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	   <?php echo link_tag('css/bootstrap.min.css'); ?>
	   <?php echo link_tag('css/bootstrap-theme.min.css'); ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</head>
<body>

<div align="center"class="container">
  <h1>Check payment proof of member</h1>
    <form class="form-inline" role="form" action="<?php echo base_url().'Admin/search_member';?>" method="post">
      <div class="form-group">
      <input type="text" class="form-control" name="search" id="search" placeholder="search by member id">
      </div>
      <button type="submit" class="btn btn-success" name="submit">
	  <span class="glyphicon glyphicon-search"></span> Search</button>
    </form>
	<a style="float:right" href="<?php echo base_url().'Admin/pending';?>"class="btn btn-link btn-lg">
	<span class="glyphicon glyphicon-link"></span> check pending transaction</a>
	<!--<p> <?php echo $message; ?> </p>-->
	<form  action="" method="post">
     <table class="table">
	   <thead>
		<th>MEMBER_ID</th>
		<th>MODE</th>
		<th>AMOUNT</th>
		<th>DATE</th>
		<th>file</th>
		<th>STATUS</th>
		<th>VERIFY</th>
	   </thead>
	   <tbody>
	   <?php if($result==null) {
		   echo "<script> alert('NOT FOUND') </script>"; ?>	   
	      <a style="float:left" href="<?php echo base_url().'Admin';?>"class="btn btn-link btn-lg">
	      <span class="glyphicon glyphicon-link"></span> go back</a>	   
	 <?php  } else{ ?>
	 	 <a style="float:left" href="<?php echo base_url().'Admin';?>"class="btn btn-link btn-lg">
	      <span class="glyphicon glyphicon-link"></span> Go Back</a>
	   <?php foreach($result as $row):?>
	   
	       <tr>
			   <td><?php echo $row->MEMBER_ID;?></td>
			    <td><?php echo $row->mode;?></td>
			   <td><?php echo $row->amount;?></td>
			   <td><?php echo $row->date1;?></td>
			   
			   <?php 
			   if ($row->extension=='application/pdf') {
			   	?>
			   <td>
			   		<a href = "<?php echo base_url('file/'.$row->file);?>" class = "btn btn-info btn-sm" target="_blank">
				   <span class="glyphicon glyphicon-open"></span> open</a>
			   	<!--a href="" >click here to view pdf.</a>-->
			   </td>
				<?php }
				else {
				?>
				<td>
					<a href = "<?php echo base_url('Admin/proof/'.$row->MEMBER_ID);?>" class = "btn btn-info btn-sm">
				
				
				   <span class="glyphicon glyphicon-open"></span> open</a>
				</td>
				<?php } ?>  
				<td>
				<?php echo $row->verify;?>
				 </td>
				 <td>
				   <a href="<?php echo base_url('Admin/amount/'.$row->MEMBER_ID);?>"class="btn btn-info btn-sm">
				   <span class="glyphicon glyphicon-check"></span> UPDATE</a>
				</td>
			</tr>
	   <?php endforeach;
	   } ?>
		</tbody>
	   </table>
	 <!-- <?php echo $this->pagination->create_links(); ?> -->
	   </form>
	  
	   
</div>
</body>
</html>
<!--
"<?php echo base_url().'Admin/amount';?>"
					<td>
				<label class="checkbox-inline"><input type="checkbox" value=""></label>
                <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
				</td>
								<td>
				<div class="form-group">  
			   <button type="submit" class="col-md-6" class="btn btn-success">submit</button>
		       </div>
			    </td>
-->				



<!-- 