<h1> Create project</h1>
<?php $attributes = array('id'=>'create_form', 'class'=>'form_horizontal'); ?>

 <?php
 if ($this->session->flashdata('errors')){
     echo $this->session->flashdata('errors');
 }
 ?> 

 
<?php 
echo form_open('projects/create', $attributes);
?>

<div class="form-group">
<?php echo form_label('Projects Name'); ?>

<?php 
$data = array(
  'class' => 'form-control',    
  'name' => 'project_name',
  'placeholder' => 'Enter project name here'
);
?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">
<?php echo form_label('Description'); ?>

<?php 
$data = array(
  'class' => 'form-control',    
  'name' => 'project_body',
  'placeholder' => 'Enter project descrption'
);
?>
<?php echo form_textarea($data); ?>

</div>

<div class="form-group">


<?php 
$data = array(
  'class' => 'btn btn-primary',    
  'name' => 'submit',
  'value' => 'submit'
);
?>

<?php echo form_submit($data); ?>

</div>

<?php 
echo form_close();
?>

