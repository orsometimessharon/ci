<h1> Create task</h1>
<?php $attributes = array('id'=>'create_form', 'class'=>'form_horizontal'); ?>
<?php echo validation_errors("<p class='bg-danger'></p>") ?> 
 
 <?php
 if ($this->session->flashdata('errors')){
     echo $this->session->flashdata('errors');
 }
 ?> 

 
<?php 
echo form_open('tasks/create/' . $this->uri->segment(3) .'', $attributes);
?>

<div class="form-group">
<?php echo form_label('tasks Name'); ?>

<?php 
$data = array(
  'class' => 'form-control',    
  'name' => 'task_name',
  'placeholder' => 'Enter task name here'
);
?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">
<?php echo form_label('Description'); ?>

<?php 
$data = array(
  'class' => 'form-control',    
  'name' => 'task_body',
  'placeholder' => 'Enter task descrption'
);
?>
<?php echo form_textarea($data); ?>

</div>


<div class="form-group">

<?php 
$data = array(
  'class' => 'form-control',    
  'name' => 'due_date',
  'type' => 'date'
);
?>
<?php echo form_input($data); ?>

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

