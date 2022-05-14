<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta  content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css" media="all" />

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   <a class="navbar-brand" href="<?php echo base_url();?>">CI app</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>">Home</a>
          <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>users/register">Register</a>
          <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>projects">Projects</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <?php if($this->session->userdata('username')): ?>
            <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>users/logout">logout</a>
          <?php endif; ?>              
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container con" > 
        <div class="col-xs-3" id="q">  
        <?php $this->load->view('users/login_view'); ?>
        </div>
        <div class="col-xs-9">
            <?php $this->load->view($main_view) ?>
        </div>
    </div>
</body>
</html>