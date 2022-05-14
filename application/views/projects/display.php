<div class="col-xs-9">

<p class="bg-danger">
<?php
if($this->session->flashdata('task_deleted')){
    echo $this->session->flashdata('task_deleted');
}
?>
</p>


<p class="bg-success">
<?php
if($this->session->flashdata('task_created')){
    echo $this->session->flashdata('task_created');
}
?>
</p>

<p class="bg-success">
<?php
if($this->session->flashdata('task_marked_complete')){
    echo $this->session->flashdata('task_marked_complete');
}
?>
</p>


<p class="bg-success">
<?php
if($this->session->flashdata('task_marked_incomplete')){
    echo $this->session->flashdata('task_marked_incomplete');
}
?>
</p>




<h1>Project Name: <?php echo $project_data->project_name; ?> </h1>
<p>Date Created: <?php echo $project_data->date_created; ?> </p>
<h3>Description</h3>
<p><?php echo $project_data->project_body; ?> </p>

<h3>Active Tasks</h3>

<?php if($completed_tasks): ?>

<?php foreach($completed_tasks as $task): ?>
    <li>
        <a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->task_id ?>" >
            <?php echo $task->task_name . "<br>" ;?>
        </a>
    </li>
<?php endforeach; ?>


<?php else: ?>
    <P>you have no tasks pending</P>
<?php endif; ?>




<h3>Completed Tasks</h3>   

<?php if($not_completed_tasks): ?>

    <?php foreach($not_completed_tasks as $task): ?>
        <li>
            <a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->task_id ?>" >
                <?php echo $task->task_name . "<br>" ;?>
            </a>
        </li>
    <?php endforeach; ?>


    <?php else: ?>
        <P>you have no tasks pending</P>
<?php endif; ?>





</div>

<div class="col-xs-3 pull-right">      
    <ul class="list-group">
        <h3>project actions</h3>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/create/<?php echo $project_data->id; ?>">create task</a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $project_data->id; ?>">edit project</a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $project_data->id; ?>">delete project</a></li>
    </ul>
</div>