<?php if($this->session->userdata('logged_in')): ?>
<h2>log out </h2> 

<?php echo form_open('users/logout'); ?>
<div>
    <?php 
        if($this->session->userdata('username')){
            echo "You are logged in as " . $this->session->userdata('username');
        }
    ?>
</div>
<?php

    $data = array(
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Logout'
    );

    echo form_submit($data);

    echo form_close();
?> 


<?php else: ?>
<h1>login form</h1>

<?php $attributes = array('id'=>'login_form', 'class'=>'form_horizontal'); ?>

 <?php
 if ($this->session->flashdata('errors')){
     echo $this->session->flashdata('errors');
 }
 ?> 

<?php 
echo form_open('users/login', $attributes);
?>

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
  'value' => 'login'
);
?>

<?php echo form_submit($data); ?>

</div>



<?php 
echo form_close();
?>
<?php endif; ?>
