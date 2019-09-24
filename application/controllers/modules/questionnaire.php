<?php
    namespace controllers\modules;
    use core\engine\Controller;
    use core\lib\Pagination;

    class Questionnaire extends Controller
    {
        public $question_model;

        public function __construct()
        {
            parent::__construct();
            $this->question_model = $this->load->model('modules/questionnaire');
        }

        public function getQuestionsList($limit = false, $pagination = false)
        {
            $data = array();
            $questions = $this->question_model->getQuestionsList($limit);

            if($pagination){
                $totalNews = $this->question_model->getTotalQuestions()['count'];
                $pagination = new Pagination($limit, $totalNews, $this->request->getUriWithoutParams());
                $data['pages_viewport'] = $pagination->pagesViewPort(5);
                $questions = $this->question_model->getQuestionsList(['from' => $pagination->from, 'notes' => $limit]);
            }

            $data['questions']  = array();
            if($questions){
                foreach($questions as $key => $question) {
                    $data['questions'][$key]['id'] = $question['id'];
                    $data['questions'][$key]['client_name'] = $question['client_name'];
                    $data['questions'][$key]['client_phone'] = $question['client_phone'];
                    $data['questions'][$key]['client_email'] = $question['client_email'];
                    $data['questions'][$key]['client_text'] = $question['client_text'];
                    $data['questions'][$key]['question_date'] = $question['question_date'];
                    $data['questions'][$key]['answer'] = $question['answer'];
                }
            }

            return $this->load->view('modules/questionnaire', $data);
        }

        public function getFrequentQuestions()
        {
            return $this->load->view('modules/questionnaire');
        }

        public function getQuestionForm()
        {
            return $this->load->view('modules/question-form');
        }

        public function setQuestion()
        {
            //..
        }
    }