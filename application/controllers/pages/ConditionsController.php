<?php
    namespace controllers\pages;
    use core\engine\Controller;

    class ConditionsController extends Controller
    {
        public function indexAction()
        {
            $this->view->asset->setTitle('Условия');
            $this->view->asset->setCss('/public/style/css/calculator.css');

            $data = array();
            $data['page_title'] = $this->load->controller('modules/pageTitle')->getPageTitle('Условия');
            $data['calculator'] = $this->load->controller('modules/calculator');
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('pages/conditions', $data);
        }
    }