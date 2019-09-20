<?php
    namespace controllers\pages;
    use core\engine\Controller;

    class ConditionsController extends Controller
    {
        public function indexAction()
        {
            $this->view->asset->setTitle('Условия');

            $data = array();
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');

            $this->view->response('pages/conditions', $data);
        }
    }