<?php 
class task_model extends CI_Model{

    public function get_task($task_id){
        
        $this->db->where('id',$task_id);
        $query = $this->db->get('tasks');

        return $query->row();

    }


    public function create_task($data){
        
        $query =  $this->db->insert('tasks', $data);
        return $query;

    }


    public function get_project_name($project_id){

        $this->db->where('id',$project_id);
        $query = $this->db->get('projects');

        return $query->row()->project_name;


    }

    public function edit_task($task_id,$data){
        
        $this->db->where('id', $task_id );
        $this->db->update('tasks', $data);

        return true;
    }

    public function delete_task($task_id){
        $this->db->where('id', $task_id);
        $this->db->delete('tasks');

        return TRUE;
    }


    public function mark_complete($task_id){
        $this->db->set('status', 1);
        $this->db->where('id', $task_id);
        $this->db->update('tasks');

        return TRUE;
    }
    

    public function mark_incomplete($task_id){
        $this->db->set('status', 0);
        $this->db->where('id', $task_id);
        $this->db->update('tasks');

        return TRUE;
    }


   public function get_all_tasks($user_id){

    $this->db->where('project_user_id', $user_id);
    $this->db->join('tasks', 'projects.id = tasks.project_id');
    $query = $this->db->get('projects');

    return $query->result();


   } 
    
    








}

?>