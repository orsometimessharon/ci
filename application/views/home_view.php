<p class="bg-success">
<?php
if($this->session->flashdata('login_success')){
    echo $this->session->flashdata('login_success');
}
?>
</p>
<p class="bg-success">
<?php
if($this->session->flashdata('user_registered')){
    echo $this->session->flashdata('user_registered');
}
?>
</p>

<p class="bg-danger">
<?php
if($this->session->flashdata('login_failed')){
    echo $this->session->flashdata('login_failed');
}
?>
</p>

<p class="bg-danger">
<?php
if($this->session->flashdata('no_access')){
    echo $this->session->flashdata('no_access');
}
?>
</p>

<div class="jumbotron">
    <h2 class="text-center">wellcome to the CI app</h2>
</div>

 <?php if(isset ($projects)): ?>
<h1>Projects</h1>


<table class="table table-hover">
    <thead>
        <tr>
            <th>
                project name
            </th>
            <th>
                project body
            </th>
            <th>
                
            </th>
        </tr>
    </thead>
    <tbody>
       
        <?php  foreach($projects as $project): ?>
        <tr>  
        <?php  echo "<td>" . $project->project_name . "</td>"; ?>
        <?php  echo "<td>" . $project->project_body . "</td>"; ?>
        <td><a href="<?php echo base_url(); ?>projects/display/<?php echo $project->id; ?>" >view</a></td>
        </tr> 
        <?php endforeach;  ?>
       
    </tbody>
</table>
 <?php endif; ?>


 <?php if(isset ($projects)): ?>
<h1>Tasks</h1>


<table class="table table-hover">
    <thead>
        <tr>
            <th>
                task name
            </th>
            <th>
                task body
            </th>
            <th>
                
            </th>
        </tr>
    </thead>
    <tbody>
       
        <?php  foreach($tasks as $task): ?>
        <?php echo "<tr>" ?>   
        <?php  echo "<td>" . $task->task_name . "</td>"; ?>
        <?php  echo "<td>" . $task->task_body . "</td>"; ?>
        <td><a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->id; ?>" >view</a></td>
        <?php echo "</tr>" ?>   
        <?php endforeach;  ?>
       
    </tbody>
</table>
 <?php endif; ?>