<p class="bg-success">
<?php
if($this->session->flashdata('project_created')){
    echo $this->session->flashdata('project_created');
}
?>

<p class="bg-success">
<?php
if($this->session->flashdata('project_updated')){
    echo $this->session->flashdata('project_updated');
}
?>
</p>

<p class="bg-success">
<?php
if($this->session->flashdata('task_edited')){
    echo $this->session->flashdata('task_edited');
}
?>
</p>


<p class="bg-danger">
<?php
if($this->session->flashdata('project_deleted')){
    echo $this->session->flashdata('project_deleted');
}
?>
</p>







<div class="pull-right">
    <a class="btn btn-primary pull-right btn-toR-90perc" href="<?php echo base_url(); ?>projects/create">Crate Project</a>
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
            <?php if($project->project_user_id == ($this->session->userdata('user_id'))): ?>
            <?php echo "<tr>" ?>   
            <?php  echo "<td><a href='". base_url() ."projects/display/". $project->id . "'>" . $project->project_name . "</a></td>"; ?>
            <?php  echo "<td>" . $project->project_body . "</td>"; ?>
            <td><a class="btn btn-danger" href="<?php echo base_url(); ?>projects/delete/<?php echo $project->id; ?>" ><span class="glyphicon glyphicon-remove"></span></a></td>  
            <?php echo "</tr>" ?>
            <?php endif; ?>   
            <?php endforeach;  ?>
        
    </tbody>
</table>
</div>