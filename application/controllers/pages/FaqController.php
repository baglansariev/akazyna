<?php
    namespace controllers\pages;
    use core\engine\Controller;

    class FaqController extends Controller
    {
        public function indexAction()
        {
            $this->view->asset->setTitle('Вопрос-Ответ');
            $this->view->asset->setCss('/public/style/css/accordion.css');
            $this->view->asset->setJs('/public/style/js/accordion.js');

            $data = array();
            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle('Вопрос-Ответ');
            $data['questions'] = $this->load->controller('modules/questionnaire')->getQuestionsList(4);

            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('pages/faq', $data);
        }
    }