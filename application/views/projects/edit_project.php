<h1>edit project</h1>
<?php $attributes = array('id'=>'edit_form', 'class'=>'form_horizontal'); ?>

 <?php
 if ($this->session->flashdata('errors')){
     echo $this->session->flashdata('errors');
 }
 ?> 

 
<?php 
echo form_open('projects/edit/' . $project_data->id . '', $attributes);
?>

<div class="form-group">
<?php echo form_label('Projects Name'); ?>

<?php 
$data = array(
  'class' => 'form-control',    
  'name' => 'project_name',
  'value' => $project_data->project_name
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
  'value' => $project_data->project_body
);
?>
<?php echo form_textarea($data); ?>

</div>

<div class="form-group">


<?php 
$data = array(
  'class' => 'btn btn-primary',    
  'name' => 'submit',
  'value' => 'update'
);
?>

<?php echo form_submit($data); ?>

</div>

<?php 
echo form_close();
?>

