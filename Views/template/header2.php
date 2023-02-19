<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Hello, world!</title>
   <link rel="stylesheet" type="text/css" href="/bootrap/bootstrap.min.css">
   <!-- icon -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="/css/home.css">
  </head>
  <body>

 <!-- navbar website -->

   <nav class="navbar navbar-expand-lg navbar-light  p-3 ">
	 <div class="container-fluid m-2 mx-5">
	    <a class="navbar-brand ms-5 " href="#">Go<span style="color: #90EE90;">Food</span></a>
	  <div class="collapse navbar-collapse  ms-5  d-flex justify-content-start" id="navbarSupportedContent">
	      <ul class="navbar-nav  mb-2 mb-lg-0">
	        <li class="nav-item ">
	          <a class="nav-link active me-5" aria-current="page" href="<?php echo site_url('home/index'); ?>">Home</a>
	         
	        </li>
	      </ul>
	      <ul class="navbar-nav" >
	      	<li class="nav-item">
	      		<a href="" class="nav-link active me-5 ">Catalog Makanan</a>
	      	</li>
	      </ul>
	    <div class="dropdown" >
	     <ul class="navbar-nav">
	     	<li class="nav-item dropdown">
	     		<a href="" type="button"  data-bs-toggle="dropdown"  class="nav-link dropdown-toggle me-5">Category makanan
	     		</a>
	     	<ul class="dropdown-menu" >
	     		<li class="dropdown-item" type="button"><a href="">Makanan Pembuka</a></li>
	     		<li class="dropdown-item" type="button"><a href="">Makanan Penutup</a></li>
	     		<li class="dropdown-item" type="button"><a href="">Minuman</a></li>
	     	</ul>
	     	</li>
	     </ul>
	    </div>
	    </div>
	    <div class="d-flex align-content-start ">
		<ul class="navbar-nav">
	     	<li class="nav-item" id="icon-user">
	     		<a href="<?php echo site_url('home/register'); ?>" class=" me-5"><i class="bi bi-person" style="font-size: 1.5rem;" ></i></a>
	     	</li>
	     </ul>
	     <ul class="navbar-nav">
	     	<li class="nav-item">
	     		<a href="" class="me-5"><i class="bi bi-basket" style="font-size: 1.3rem;" ></i></a>
	     	</li>
	     </ul>
	    </div>
	  </div>
	</nav>

<!-- navbar website -->
