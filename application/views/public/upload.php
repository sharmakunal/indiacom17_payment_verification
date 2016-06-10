<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>UPLOAD</title>
		<?php echo link_tag('css/bootstrap.min.css'); ?>
		<?php echo link_tag('css/bootstrap-theme.min.css'); ?>
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	</head>
    <body>
     <div class="container">
     <h1 style="text-align:center">PAYMENT PROOF</h1>
	   <form class="form-horizontal" role="form" action="<?php echo base_url('User/upload_file');?>" method="post" enctype="multipart/form-data">
	   <?php validation_errors()?>
	   <?php echo"<br>"?>
			<div class="form-group">
			<label class="control-label col-sm-3" for="MEMBER_ID">MEMBER_ID:</label>
            <div class="col-sm-6">
            <input type="text" class="form-control input-lg" name="MEMBER_ID" placeholder="Enter the Member_Id"/>
            </div>
			</div>
            <div class="form-group">
			<label  class="control-label col-sm-3" for="PAYEMENTMODE">PAYEMENTMODE:</label>
            <input type="radio" name="mode"  value="demand-draft">DEMAND-DRAFT
            <input type="radio" name="mode"   value="cheque">CHEQUE
			<input type="radio" name="mode"  value="bank-cash-deposit-slip">BANK-CASH-DEPOSIT-SLIP
			</div>
	
            <div class="form-group">
			<label class="control-label col-sm-3" for="amount">AMOUNT:</label>
            <div class="col-sm-6">
            <input type="text" class="form-control input-lg" name="amount" placeholder="Enter the amount"/>
            </div>
			</div>
			
			<div class="form-group">
		   <label class="control-label col-sm-3" for="date">DATE:</label>
		   <div class="col-sm-6">
		   <input name="date1" type="date">
            </div>
			</div>
			<div class="form-group">
		    <label class="control-label col-sm-3" for="UPLOADFILE">UPLOAD FILE:</label>
			<div class="col-sm-6">
			<input type="file" name="file"/>
			</div>
			</div>
			<div class="form-group">
			 <div class="col-sm-offset-2 col-sm-3">
            <button type="submit" class="btn btn-block btn btn-primary">SUBMIT</button>
			<!--<span class="pull-right"><a href="#">HOME</a></span><span><a href="#">FORGOT-MEMBER_ID</a></span>-->
            </div>
			</div>
        </form>
		</div>
	 </div>
	  </div>    
	</body>
	</html>