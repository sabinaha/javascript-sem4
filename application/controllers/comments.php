<?php
class comments extends CI_Controller{
    public function create(){

        $food = $this->input->post('food');
        $this->form_validation->set_rules('body', 'Comment', 'required');
        $data['comments'] = $this->comments_model->get_comments();

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('pages/'.$food, $data);
            $this->load->view('templates/footer');
        }else{
            $this->comments_model->create_comment($food);
            $this->session->set_flashdata('comment_posted', 'Your comment has been posted!');

            redirect($food);
        }

    }
    public function delete($id){

        $food = $this->input->post('food');
        $this->comments_model->delete_comment($id);
        $this->session->set_flashdata('comment_deleted', 'Your comment has been deleted!');
        redirect($food);

    }
}
