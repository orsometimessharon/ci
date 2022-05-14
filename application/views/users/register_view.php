
<h1>Register</h1>

<?php $attributes = array('id'=>'register_form', 'class'=>'form_horizontal'); ?>

 <?php
 if ($this->session->flashdata('errors')){
     echo $this->session->flashdata('errors');
 }
 ?> 

 <?php 
    echo validation_errors("<p class='bg-danger'>");
 ?>

<?php 
echo form_open('users/register', $attributes);
?>

<div class="form-group">
<?php echo form_label('First Name'); ?>

<?php 
$data = array(
  'class' => 'form-control',    
  'name' => 'first_name',
  'placeholder' => 'Enter first name'
);
?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">
<?php echo form_label('Last Name'); ?>

<?php 
$data = array(
  'class' => 'form-control',    
  'name' => 'last_name',
  'placeholder' => 'Enter last name'
);
?>
<?php echo form_input($data); ?>

</div>

<div class="form-group">
<?php echo form_label('Email'); ?>

<?php 
$data = array(
  'class' => 'form-control',    
  'name' => 'email',
  'placeholder' => 'Enter Email'
);
?>

<?php echo form_input($data); ?>

</div>


<div class="form-group">
<?php echo form_label('Username'); ?>

<?php 
$data = array(
  'class' => 'form-control',    
  'name' => 'username',
  'placeholder' => 'enter Username'
);
?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">
<?php echo form_label('Password'); ?>

<?php 
$data = array(
  'class' => 'form-control',    
  'name' => 'password',
  'placeholder' => 'enter Password'
);
?>

<?php echo form_password($data); ?>

</div>

<div class="form-group">
<?php echo form_label('Comfirm Password'); ?>

<?php 
$data = array(
  'class' => 'form-control',    
  'name' => 'confirm_password',
  'placeholder' => 'Confirm Password'
);
?>

<?php echo form_password($data); ?>

</div>

<div class="form-group">


<?php 
$data = array(
  'class' => 'btn btn-primary',    
  'name' => 'submit',
  'value' => 'register'
);
?>

<?php echo form_submit($data); ?>

</div>



<?php 
echo form_close();
?>

