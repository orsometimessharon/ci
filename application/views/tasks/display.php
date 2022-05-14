

<?php //if(isset ($Tasks)): ?>
<h1>Tasks Display View</h1>


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


<table class="table table-hover">
    <thead>
        <tr>
            <th>
                Task name
            </th>
            <th>
                Task body
            </th>
            <th>
                Date
            </th>
            <th>
                
            </th>
        </tr>
    </thead>
    <tbody>
       
       
        <?php echo "<tr>" ?>
        <td>   
            <div class="task-name">
                <?php echo $task->task_name; ?> 
            </div>
            <div class="task-actions">
                <a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->id; ?>">Edit</a>
                <a href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->project_id; ?>/<?php echo $task->id; ?>">Delete</a>
            </div>
        </td>
        <?php  echo "<td>" . $task->task_body . "</td>"; ?>
        <?php  echo "<td>" . $task->date_created . "</td>"; ?>
        <td><a href="<?php echo base_url(); ?>tasks/mark_complete/<?php echo $task->id; ?>">Mark Complete</a></td> 
        <td><a href="<?php echo base_url(); ?>tasks/mark_incomplete/<?php echo $task->id; ?>">Mark Incomplete</a></td> 
        <?php echo "</tr>" ?>   
      
    </tbody>
</table>
 <?php //endif; ?>