<head> 
 <title></title>
 <link rel="stylesheet" href="/css/register.css"> 
 <link rel="stylesheet" href="/bootrap/bootstrap.min.css">
</head>
<div class="container">
 <div class="col">
  <div class="row align-items-center">
  	<h1>Halaman pendaftaran</h1>
  	<div class="box ">
  		<form action="" method="POST">
  		  <div class="row mb-3">
  		  	<label for="email">Email</label>
  		  	<div class="col-sm-10">
  		  		<input type="email" name="email" >
  		  	</div>
  		  </div>
  		  <div class="row mb-3">
  		  	<label id="input-password" for="password">Password</label>
  		  	<div class="col-sm-10">
  		  		<input type="password" name="password">
  		  	</div>
  		  </div>
  		  <div class="row mb-3">
  		  	<p><a href="<?php echo site_url('home/login'); ?>">Sudah punya akun? Login!</a></p>
  		  	<a href="" class="btn btn-primary">Daftar!</a>
  		  </div>	
  		</form>
  	</div>
  </div>	
 </div>	
</div>