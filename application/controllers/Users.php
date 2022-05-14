<?php

class Users extends CI_Controller{

    // public function show(){
    //     //$this->load->model('user_model');

    //     $data['results'] = $this->user_model->get_users(1);

       

       
    //    $this->load->view('user_view',$data); 
       
    //     // foreach($result as $object){
    //     //     echo $object->id . "<br>";
    //     // }

    // }

    // public function insert(){
    //     $id = 3;
    //     $username = 'anrica';
    //     $password = '123';
    //     $this->user_model->create_users([
    //         'id'=> $id,
    //         'username' => $username,
    //         'password' => $password 
    //     ]);
    // }

    // public function delete(){
    //     $id = 3; 
    //     $this->user_model->delete_users($id);
    // }


    public function register(){
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');    
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
        
        if($this->form_validation->run() == FALSE){
            $data['main_view'] = "users/register_view";
    
            $this->load->view('layouts/main', $data);
        }
        else{

            // $firstname = $this->input->post('firstname');
            // $lasrname = $this->input->post('lastname');
            // $email = $this->input->post('email');
            // $username = $this->input->post('username');
            // $password = $this->input->post('password');
           if($this->user_model->create_user()){
               $this->session->set_flashdata('user_registered','User has been registered succssfuly');
               redirect('home/index');
           }
           else{

           }

        }

       
    }    



    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');    
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
        if($this ->form_validation->run() == false){
         $data = array(
            'errors' => validation_errors()
             );
        $this->session->set_flashdata($data);
        redirect('home');
        }

        else{

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->user_model->login_user($username, $password );

            if($user_id){
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success', 'You are now logged in');   
                
                // $data['main_view'] ="";
    
                // $this->load->view('layouts/main', $data);
                redirect('home/index');
            }
            else{
                $this->session->set_flashdata('login_failed', 'Sorry, You are not logged in');
                redirect('home/index');
            }

        }


        //echo $this->input->post('username'); 
        //echo $this->input->post('password');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('home/index');
    }


}

?>
