<?php
    namespace controllers\pages;
    use core\engine\Controller;

    class FaqController extends Controller
    {
        public function indexAction()
        {
            $this->view->asset->setTitle('Вопрос-Ответ');

            $data = array();
            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle('Вопрос-Ответ');

            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('pages/faq', $data);
        }
    }