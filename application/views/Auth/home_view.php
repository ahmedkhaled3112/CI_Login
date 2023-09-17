<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
				<div class="text-center my-5">
						<img src="<?php echo site_url();?>assets/photo.jpg" alt="logo" width="100" style="border-radius: 50%;">
						<h4 style="font-style: italic;">USMLE PREPS</h4>
					</div>
          <div class="card text-white bg-primary">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
            	<h4 class="card-title">Welcome Back</h4>
            	<p class="card-text">nice to meet you</p>
          	</div>
          </div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2023-2025 &mdash; USMLE PREPS 
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
		<?php if($this->session->flashdata('suc')){ ?>
    	toastr.success("<?php echo $this->session->flashdata('suc'); ?>");
		<?php }else if($this->session->flashdata('worng')){  ?>
    	toastr.error("<?php echo $this->session->flashdata('worng'); ?>");
		<?php }else if($this->session->flashdata('warning')){  ?>
    	toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
		<?php }else if($this->session->flashdata('info')){  ?>
    	toastr.info("<?php echo $this->session->flashdata('info'); ?>");
		<?php } ?>
		<?php
			$this->session->unset_userdata ( 'suc' ); 
		?>
		<?php
    	$this->session->unset_userdata ( 'worng' ); 
		?>
	</script>
</body>
</html>
