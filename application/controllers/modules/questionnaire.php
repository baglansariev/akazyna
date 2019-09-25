<?php
    namespace controllers\modules;
    use core\engine\Controller;
    use core\lib\Pagination;

    class Questionnaire extends Controller
    {
        public $question_model;
        public $error_msg;
        public $success_msg;

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
            $this->setQuestion();
            $data = array();
            $data['success_msg'] = $this->success_msg;
            $data['error_msg'] = $this->error_msg;

            return $this->load->view('modules/question-form', $data);
        }

        public function setQuestion()
        {
            if($this->request->has('quest_name') &&
                $this->request->has('quest_email') &&
                $this->request->has('quest_phone') &&
                $this->request->has('quest_captcha') &&
                $this->request->has('quest_text')
            ){
                $quest_name = $this->request->post['quest_name'];
                $quest_email = $this->request->post['quest_email'];
                $quest_phone = $this->request->post['quest_phone'];
                $quest_captcha = $this->request->post['quest_captcha'];
                $quest_text = $this->request->post['quest_text'];

                if(!$this->form->isEmail($quest_email)){
                    $this->error_msg = 'Некорректный E-mail адрес. Попробуйте заново.';
                    return false;
                }
                if((int)$quest_captcha !== 9){
                    $this->error_msg = 'Неправильное решение задачи. Попробуйте заново.';
                    return false;
                }
                if($this->question_model->setQuestion($quest_name, $quest_phone, $quest_email, $quest_text) && $this->mail->questionFormSend($quest_name, $quest_phone, $quest_email, $quest_text)){
                    $this->success_msg = 'Спасибо! Ваш вопрос отправлен на рассмотрение. Мы опубликуем его вместе с ответом';
                    return true;
                }
            }
        }
    }