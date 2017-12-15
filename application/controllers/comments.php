<?php
class comments extends CI_Controller{


    public function showComments(){
        $result = $this->comments_model->showComments();
        echo json_encode($result);
    }

    public function longpolling(){
        $result = $this->comments_model->longpolling();
        echo json_encode($result);
    }

    public function addComment(){

        $result = $this->comments_model->addComment();
        $msg['success'] = false;
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);

    }
    public function delete(){
        $result = $this->comments_model->delete_comment();
        $msg['success'] = false;
        if($result){
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

}

/** Without javascript
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
}*/
