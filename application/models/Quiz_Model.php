<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Quiz_Model
 *
 * @author Faizan
 */
class Quiz_Model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    public function getAllLevels()
    {
        $result = $this->db->query("Select * from levels")->result();
        return $result;
    }
    
    public function addQuestion($level,$question,$o1,$o2,$o3,$o4,$answer)
    {
        $questionArray = array();
        $questionArray['question'] = $question;
        $questionArray['level'] = $level;
        $this->db->insert(TBL_QUESTIONS,$questionArray);
        $questionId = $this->db->insert_id();
        $optionsArray = array();
        if($answer == OPTION1)
        {
            $optionsArray['option'] = $o1;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 1;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
            $optionsArray['option'] = $o2;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 0;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
            $optionsArray['option'] = $o3;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 0;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
            $optionsArray['option'] = $o4;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 0;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
        }
        else if ($answer == OPTION2)
        {
            $optionsArray['option'] = $o1;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 0;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
            $optionsArray['option'] = $o2;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 1;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
            $optionsArray['option'] = $o3;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 0;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
            $optionsArray['option'] = $o4;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 0;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
        }
        else if ($answer == OPTION3)
        {
            $optionsArray['option'] = $o1;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 0;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
            $optionsArray['option'] = $o2;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 0;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
            $optionsArray['option'] = $o3;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 1;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
            $optionsArray['option'] = $o4;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 0;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
        }
        else if ($answer == OPTION4)
        {
            $optionsArray['option'] = $o1;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 0;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
            $optionsArray['option'] = $o2;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 0;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
            $optionsArray['option'] = $o3;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 0;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
            $optionsArray['option'] = $o4;
            $optionsArray['question_id'] = $questionId;
            $optionsArray['is_correct'] = 1;
            $this->db->insert(TBL_OPTIONS,$optionsArray);
        }
    }
    
    public function getQuizDetails($levelId)
    {
        $this->db->where('level',$levelId);
        $jsonCandidate = array();
        $questions = $this->db->get(TBL_QUESTIONS)->result();
        $count = 0;
        foreach($questions as $question)
        {
            $jsonCandidate[$count]['question'] = $question;
            $options = $this->get_options($question->id);
            $jsonCandidate[$count]['options'] = $options;
            $count++;
        }
        return $jsonCandidate;
    }
    
     public function get_options($questionId)
     {
        $this->db->where('question_id',$questionId);
        $options = $this->db->get(TBL_OPTIONS)->result();
        return $options;
     }
     
     public function getQuestionDetails($questionId)
     {
         $this->db->where('id',$questionId);
         $result = $this->db->get(TBL_QUESTIONS)->result();
         $question = $result[0];
         $options = $this->get_options($questionId);
         $returnArray = array();
         $returnArray['question'] = $question;
         $returnArray['options'] = $options;
         return $returnArray;
     }
}

?>
