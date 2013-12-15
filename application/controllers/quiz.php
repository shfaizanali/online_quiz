<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of quiz
 *
 * @author Faizan
 */
class quiz extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function add_question()
    {
        $level = $this->input->post('level');
        $this->load->model('Quiz_Model');
        $question = $this->input->post('question');
        $o1 = $this->input->post('option1');
        $o2 = $this->input->post('option2');
        $o3 = $this->input->post('option3');
        $o4 = $this->input->post('option4');
        $answer = $this->input->post('answer');
        if(isset($_FILES['sample_file']) && $_FILES['sample_file']['size'] > 0)
        {
            $image1 = 'sample_file';
            $uploadedData = $this->Quiz_Model->do_upload($image1);
            $filepathRelative = 'uploads/'.$uploadedData['file_name'];
            $filepathAbsolute = $uploadedData['full_path'];
        }
        else
        {
            $filepathRelative = "";
            $filepathAbsolute = "";
        }
        $this->Quiz_Model->addQuestion($level,$question,$o1,$o2,$o3,$o4,$answer,$filepathRelative,$filepathAbsolute);
        redirect("quiz/get_quiz_details?level=$level", 'refresh');
    }
    
    public function do_edit_question()
    {
        $questionId = $this->input->get('qid');
        $level = $this->input->post('level');
        $this->load->model('Quiz_Model');
        $question = $this->input->post('question');
        $o1 = $this->input->post('option1');
        $o2 = $this->input->post('option2');
        $o3 = $this->input->post('option3');
        $o4 = $this->input->post('option4');
        $answer = $this->input->post('answer');
        $image1 = 'sample_file';
        if(isset($_FILES['sample_file']) && $_FILES['sample_file']['size'] > 0)
        {
            $uploadedData = $this->Quiz_Model->do_upload($image1);
            $filepathRelative = 'uploads/'.$uploadedData['file_name'];
            $filepathAbsolute = $uploadedData['full_path'];
        }
        else
        {
            $filepathRelative = -1;
            $filepathAbsolute = -1;
        }
        $this->Quiz_Model->editQuestion($questionId,$level,$question,$o1,$o2,$o3,$o4,$answer,$filepathRelative,$filepathAbsolute);
        redirect("quiz/get_quiz_details?level=$level", 'refresh');
    }
    
    
    public function get_quiz_details()
    {
        $levelId = $this->input->get('level');
        $this->load->model('Quiz_Model');
        $data = array();
        $data['quiz_details'] = $this->Quiz_Model->getQuizDetails($levelId);
        $data[VIEW_NAME] = 'quiz_details';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
   
    public function edit_question()
    {
        $questionId = $this->input->get('qid');
        $this->load->model('Quiz_Model');
        $questionDetail = $this->Quiz_Model->getQuestionDetails($questionId);
        $data = array();
        $data['levels'] = $this->Quiz_Model->getAllLevels();
        $data['question_details'] = $questionDetail;
        $data[VIEW_NAME] = 'edit_question';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
    public function select_level_quiz_detail()
    {
        $this->load->model('Quiz_Model');
        $data['levels'] = $this->Quiz_Model->getAllLevels();
        $data[VIEW_NAME] = 'select_level_quiz_detail';
        $this->load->view(MAIN_TEMPLATE,$data);
    }
    
}

?>
